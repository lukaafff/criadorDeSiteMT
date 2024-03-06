<!DOCTYPE html>
<html>
<head>
    <title>Dados Externos</title>
</head>
<body>
    <h1>Dados Externos</h1>

    <h2>Assinatura Asaas</h2>
    @foreach ($externalData as $data)
        @if ($data->status == 1)
            <p>Tem plano</p>
        @else
            <p>Não tem plano</p>
        @endif
    @endforeach

    <h2>Dados do Usuário</h2>
    @foreach ($userData as $user)
        <p>ID: {{ $user->id }}</p>
        <p>Nome: {{ $user->name }}</p>
        <p>Nível: {{ $user->level }}</p>
    @endforeach
</body>
</html>
