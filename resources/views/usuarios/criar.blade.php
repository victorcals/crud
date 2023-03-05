<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('usuarios-criado')}}" method="post">
        @csrf
        <label for=" ">nome</label>

        <input name="name" type="text">


        <label for="">e-mail</label>
        <input name="email" type="text">

        <label for="">senha</label>
        <input name="senha" type="text">

        <button type="submit">Enviar</button>

    </form>
</body>

</html>