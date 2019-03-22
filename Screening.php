<?php
class Screening {
    function getScrValue($plink, $str) {
       return htmlentities(mysqli_real_escape_string($plink, $str));
    }
}