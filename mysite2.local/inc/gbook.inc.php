<?php
/* Основные настройки */
const DB_HOST =  'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'gbook';
/* Основные настройки */

/* Сохранение записи в БД */
$link = mysqli_connect(DB_HOST,  DB_LOGIN,  DB_PASSWORD,  DB_NAME);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name =  trim(strip_tags($_POST['name']));
    $email =  trim(strip_tags($_POST['email']));
    $msg =  trim(strip_tags($_POST['msg']));

    $query = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
    mysqli_query($link, $query);
}
/* Сохранение записи в БД */

/* Удаление записи из БД */
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query2 = "DELETE FROM msgs WHERE id = $id";
    mysqli_query($link, $query2);
}
/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
    Имя: <br /><input type="text" name="name" /><br />
    Email: <br /><input type="text" name="email" /><br />
    Сообщение: <br /><textarea name="msg"></textarea><br />

    <br />

    <input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
$query = "SELECT  COUNT(id) FROM msgs";
$con = mysqli_query($link, $query);
$result = mysqli_fetch_assoc($con);

$query2 = "SELECT id, name, email, msg, datetime as dt FROM msgs ORDER BY id DESC";
$con = mysqli_query($link, $query2);
for ($data = []; $row = mysqli_fetch_assoc($con); $data[] = $row);

echo '<p>Всего записей в гостевой книге: ' . $result['COUNT(id)'] . '</p>';
foreach ($data as $elem) {
    echo '<p>';
    echo '<a href="' . $elem['email'] . '">' . $elem['name'] . '</a> ' . $elem['dt'] . ' написал<br />' . $elem['msg'] . '.';
    echo '</p>';

    echo '<p align="right">';
    echo '<a href="http://php:81/Php_lab_work/mysite2.local/index.php?id=gbook&del=' . $elem['id'] . '">Удалить</a>';
    echo '<p>';
}

mysqli_close($link);
/* Вывод записей из БД */
?>