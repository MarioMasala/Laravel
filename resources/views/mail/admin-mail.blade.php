<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="fw-bold text-uppercase">Ciao Admin</h1>
    <h3 class="fw-bold font-second text-color">C'e un nuova mail</h3>
    <ul class="fw-bold">
        <li class="fw-bold font-second text-color">Nome: {{$userData['name']}}</li>
        <li class="fw-bold font-second text-color">E-Mail:{{$userData['email']}}</li>
    </ul>
    <h5 class="fw-bold text-colote font-second">Messaggi da parte dell'Utente:</h5>
    <p>{{$userData['message']}}</p>
</body>
</html>