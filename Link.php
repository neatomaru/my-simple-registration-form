<?php
class Link {
    function getLink() {
        $host = 'localhost';
        $database = 'login';
        $user = 'root';
        $password = 'root';


        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));;

        return $link;

    }
}
