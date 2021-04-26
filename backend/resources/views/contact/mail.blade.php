<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>
<body>

お問い合わせ内容を受け付けました。<br>
<br>
■メールアドレス<br>
{!! $email !!}<br>
<br>
■タイトル<br>
{!! $title !!}<br>
<br>
■お問い合わせ内容<br>
{!! nl2br($body) !!}<br>


</body>
</html>
