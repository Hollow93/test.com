<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица размеров обуви</title>
</head>
<body>
<?php

use app\Application;

require 'app\application.php';

$application = new Application();
$application->downloadFtpFile();

?>

<table border="1">
    <tr>
        <th>Пользователь</th>
        <th>Город</th>
    </tr>
    <?php foreach ($application->getXml() as $user): ?>
        <tr>
            <td>
                <?php echo $user->name; ?>
            </td>
            <td>
                <?php foreach ($user->cities->city as $city): ?>
                    <?php echo $city; ?> <br/>
                <?php endforeach; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>


