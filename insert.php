
<?php
 $pdo = new PDO("mysql:host=localhost;dbname=lesson16", "root", "");

 $sql = $pdo->prepare("insert into contactform values(?, ?, ?, ?)");

 $sql->execute([$_POST["name"], $_POST["mail"], $_POST["age"], $_POST["comments"]]);

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">お問い合わせフォーム</h1>

    <main class="wrapper">
        <p class="text">
            お問い合わせありがとうございました。<br>
            3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </main>
</body>
</html>