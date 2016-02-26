<?php
    namespace Snor\Tools;
    class Helpers 
    {
        public static function getRadioButtonResult($index) 
        {
            if (!isset($_POST[$index])) {
                return null;
            }
            return $_POST[$index];
        }   
    }

