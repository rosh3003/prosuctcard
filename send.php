<?php

if (isset($_COOKIE["thanks"])) {
    header('Location: thanks/success.php');
    return;
}

$pixel_id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$subid = $_POST['subid'];
$fbpix = $_POST['fbpix'];
$web = $_POST['web'];
$product = $_POST['product'];
$land = $_POST['land'];

session_start();
// Этот код добавляем на целевую страницу

if (isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
} else {
    $name = '';
}
if (isset($_POST['phone'])) {
    $phone = htmlentities($_POST['phone']);
    $phone = str_replace(['_', ' '], '', $phone);
} else {
    $phone = '';
}
if (isset($_POST['email'])) {
    $email = htmlentities($_POST['email']);
} else {
    $email = '';
}
if (isset($_POST['address'])) {
    $address = htmlentities($_POST['address']);
} else {
    $address = '';
}
if (isset($_POST['kolvo'])) {
    $kolvo = htmlentities($_POST['kolvo']);
} else {
    $kolvo = '';
}
if (isset($_POST['cena'])) {
    $cena = htmlentities($_POST['cena']);
} else {
    $cena = '';
}
if (isset($_POST['artikul'])) {
    $artikul = htmlentities($_POST['artikul']);
} else {
    $artikul = '';
}
if (isset($_POST['comments'])) {
    $comments = htmlentities($_POST['comments']);
} else {
    $comments = '';
}

if (strlen(trim($phone)) === 13) {
    $data = array
    (
        'code' => htmlspecialchars($_SESSION['code']),
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'address' => $address,
        'kolvo' => $kolvo,
        'cena' => $cena,
        'artikul' => $artikul,
        'comments' => $comments,
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://haridd.uz');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $content = curl_exec($ch);
    curl_close($ch);

    setcookie("thanks", "123", time() + 86400);
    header('Location: thanks/success.php?fbpix=' . $fbpix);
} else {
    echo 'ОШИБКА! Получены не все данные. Вернитесь и заполните форму';
}
