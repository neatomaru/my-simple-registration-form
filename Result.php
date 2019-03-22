<?php

class Result {

    function getResult($link, $query) {
        $resul = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        return $resul;
    }


}