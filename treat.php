<?php
require_once 'Link.php';
require_once 'Screening.php';
require_once 'Result.php';

if(isset($_POST['name']) && isset($_POST['pswd'])) {
    $my_class = new Link();
    $link = $my_class->getLink();



    session_start();

    $screening = new Screening();
    $name = $screening->getScrValue($link, $_POST['name']);
    $pswd = $screening->getScrValue($link, $_POST['pswd']);


    $check = mysqli_query($link, "SELECT * FROM info WHERE name='$name'");

    if(mysqli_num_rows($check) == 0) {


        $md5 = md5($name.''.$password.''."something");

        $_SESSION['token'] = $md5;


        $query = "INSERT INTO info VALUES(NULL , '$name', '$pswd', '$md5')";

        $result_class = new Result();
        $result = $result_class->getResult($link, $query);

        if ($result) {
            echo "Данные добавлены!";
            echo "<br>";
            echo "<a href='index3.php'>На главную</a>";
        }
    }

    else {
        echo "Такой пользователь уже существует!";
        echo "<br>";
        echo "<a href='form.php'>Попробуйте зарегистрироваться снова!</a>";
    }
    mysqli_close($link);



}