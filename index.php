<!DOCTYPE html>
<html lang="ja">

<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
    <script src="./js/main.js"></script>
    <meta charset="UTF-8">
    <title>ブラウザでプッシュ通知</title>
</head>

<body>
    <label>通知情報</label>
    <br><label>title：</label>
    <br><input type="text" name="title" value="site name" id="action_title">
    <br><label>body：</label>
    <br><input type="text" name="body" value="exampleページに遷移" id="action_body">
    <br>
    <br><input type="button" id="push" onclick="return push()" value="ブラウザプッシュ通知を送信" />
</body>

</html>