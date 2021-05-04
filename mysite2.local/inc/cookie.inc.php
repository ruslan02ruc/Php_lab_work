<?php
$visitCounter = 0;
$lastVisit = "";
ini_set('date.timezone', 'Asia/Omsk');

if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = $_COOKIE['lastVisit'];
}
if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {

    if (isset($_COOKIE['visitCounter'])) {
        $visitCounter = $_COOKIE['visitCounter'];
        $visitCounter++;
    }
    setcookie('visitCounter', $visitCounter,  time() + 3600);
    setcookie('lastVisit', date("d-m-Y"),  time() + 3600);
}
