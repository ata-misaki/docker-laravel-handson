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

@extends('layout')

@section('content')
<h1>{{ __('送信完了') }}</h1>
@endsection


</body>
</html>
