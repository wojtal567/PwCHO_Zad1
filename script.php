<?php
    function _time()
    {
        $time = new DateTime("now", new DateTimeZone('Europe/Warsaw'));//Lublin jest w tej samej strefie czasowej co Warszawa
        echo "Lublin: ", $time->format('m-d, H:i'), '<br>';

        $time = new DateTime("now", new DateTimeZone('America/New_York'));
        echo "New York: ", $time->format('m-d, H:i'), '<br>';

        $time = new DateTime("now", new DateTimeZone('Australia/Sydney'));
        echo "Sydney: ", $time->format('m-d, H:i'), '<br>'; 
    }
?>


