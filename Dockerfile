FROM alpine:latest
ENV PHPVERSION=7
RUN apk add --update apache2 php${PHPVERSION}-apache2 php${PHPVERSION} && rm -rf /var/cache apk/* && rm -r /run/apache2/ && mkdir /run/apache2/ && rm -rf /var/www/localhost/htdocs/index.html
ADD ./index.php /var/www/localhost/htdocs
ADD ./script.php /var/www/localhost/htdocs
EXPOSE 80 443
ENTRYPOINT ["httpd"]
CMD ["-D", "FOREGROUND"]
