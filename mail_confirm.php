<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題1 lesson16</title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
    <h1 class="title">お問い合わせ内容確認</h1>

    <main class="wrapper">
        <p class="text">
            お問い合わせ内容はこちらでよろしいでしょうか？<br>
            よろしければ「送信する」ボタンを押して下さい。
        </p>

        <table>
            <tr>
                <th>名前</th>
                <td><?= $_POST["name"] ?></td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td><?= $_POST["mail"] ?></td>
            </tr>

            <tr>
                <th>年齢</th>
                <td><?= $_POST["age"] ?>歳</td>
            </tr>

            <tr>
                <th>コメント</th>
                <td><?= $_POST["comments"] ?></td>
            </tr>
        </table>

        <form action="index.html" method="post">
            <input type="submit" value="戻って修正する" class="btn">
        </form>

        <form action="insert.php" method="post">
            <input name="name" hidden value=<?= $_POST["name"] ?>>
            <input name="mail" hidden value=<?= $_POST["mail"] ?>>
            <input name="age" hidden value=<?= $_POST["age"] ?>>
            <input name="comments" hidden value=<?= $_POST["comments"] ?>>

            <input type="submit" value="登録する" class="btn btn--insert">
        </form>
    </main>
</body>
</html>
