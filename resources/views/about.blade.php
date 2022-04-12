<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/contacts">Contact</a>
<a href="/hello">Hello</a>
<h1>Inja Aboute</h1>
@foreach($messages as $message)
    <div>
        {{$message->text}}
    </div>
@endforeach
</body>
</html>