<?php

    function extract_image_name($input) {
        if (strpos($input, "../gallery/fullscreen/") !== false) {
            $parts = explode("/", $input);
            return end($parts);
        } else {
            return $input;
        }
    }

?>