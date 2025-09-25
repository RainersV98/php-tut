<?php
    function happy_birthday($name = "Dude") {
    if ($name) {

        echo "Happy birthday {$name}!";
    } else {
        echo 'Happy birthday dude!';
    }
    }

    happy_birthday('Baby');