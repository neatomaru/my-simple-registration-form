<?php
require_once 'Link.php';
require_once 'Result.php';
session_start();
if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
    $my_class = new Link();
    $link = $my_class->getLink();

    $query = "SELECT name FROM info WHERE md5 = '$token'";

    $result_class = new Result();


    if($result_class->getResult($link, $query)) {
        $row = mysqli_fetch_row($result_class->getResult($link, $query));

        echo 'Hello ' . $row[0];
        echo "<br>";
    }

    mysqli_close($link);
}
else {
    echo "Введите логин!";
}
?>
<a href="form.php">К окну ввода логина</a>
