<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>


    <h1>Aqui vai aditar a rota</h1>
    <form action="{{route('usuario-update', ['id' => $user->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for=" ">nome</label>

        <input name="name" type="text" value="{{$user->name}}">


        <label for="">e-mail</label>
        <input name="email" type="text" value="{{$user->email}}">

        <label for="">senha</label>
        <input name="senha" type="text" value="">

        <button type="submit">Enviar</button>

    </form>
</body>

</html>