<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Dados</title>
</head>
<body>
    <h1>Dados do Usuário</h1>
    <p>ID do Usuário: {{ $user_id }}</p>

    @isset($nivelUsuario)
        <p>Nível do Usuário: {{ $nivelUsuario }}</p>
        @if ($nivelUsuario >= 8)
            <p>O usuário tem nível suficiente para criar domínio.</p>
        @else
            <p>O usuário não atende aos requisitos para criar domínio.</p>
        @endif
    @endisset

    @isset($assinatura)
        <p>Informações da Assinatura:</p>
        <p>Status: {{ $assinatura->status == 1 ? 'Ativa' : 'Inativa' }}</p>
    @endisset

    @isset($message)
        <p>{{ $message }}</p>
    @endisset
</body>
</html>
