<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Подключение внешних стилей</title>
        <!-- подключите внешние стили -->
        <style>
            body { background: url(mn.jpg); }
        </style>

    </head>
<body>
    <?php
    include 'header.php';
    ?>

    <?php

    if (array_key_exists('first_name', $_POST)) {
        $firstName = $_POST['first_name'];
    } else {
        $firstName = 'undefined';
    }

$lastName = $_POST['last_name'];
    $fathersName = $_POST['fathers_name'];

    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];
    if ('male' == $gender) {
        $genderUkr = 'Чоловіча';
    } else {
        $genderUkr = 'Жіноча';
    }
    $city = $_POST['city'];
?>

    <p>First name - <?=$firstName; ?></p>
    <p>Last name - <?=$lastName; ?></p>
    <p>Стать - <?=$genderUkr ?></p>

<?php
$orders = [];

    $order = array(
        'name' => $firstName . ' ' . $lastName,
        'gender' => $genderUkr,
        'city' => $city
    );
$orders[] = $order;
$order2 = array(
    'name' => 'Dmytro Chabanenko',
    'gender' => 'male',
    'city' => 'Cherkasy'
);

$orders [] = $order2;

?>

<table border="1">
    <tr>
        <th>field</th>
        <th>value</th>
    </tr>
    <?php foreach ($order as $key => $value) { ?>
    <tr>
        <td><?=$key; ?></td>
        <td><?=$value; ?></td>
    </tr>
    <?php } ?>

</table>



<?php var_dump($orders); ?>

    <table border="1">
        <tr>
            <th>num</th>
            <th>name</th>
            <th>gender</th>
            <th>city</th>
        </tr>
        <?php foreach ($orders as $key => $value) { ?>
            <tr>
                <td><?=$key; ?></td>
                <td><?=$value['name']; ?></td>
                <td><?=$value['gender']; ?></td>
                <td><?=$value['city']; ?></td>
            </tr>
        <?php } ?>

    </table>

<?php

$c = mysqli_connect("localhost", "myuser", "111", "mydatabase");
$firstName = mysqli_real_escape_string($c, $firstName);
$lastName = mysqli_real_escape_string($c, $secondName );
$fathersName = mysqli_real_escape_string($c, $secondName );
$gender = mysqli_real_escape_string($c, $gender);
$telephone = mysqli_real_escape_string($c, $telephone);
$city = mysqli_real_escape_string($c, $city);

$sql = "INSERT INTO orders (first_name, last_name, fathers_name, gender, city, telepone)".
    " VALUES ('$firstName', '$lastName', '$fathersName', '$gender', '$city', '$telephone');";
echo $sql;
$res = $c->query($sql);
if ($res) {
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:".$c->error;
}
?>


</body>