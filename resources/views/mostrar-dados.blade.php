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
            @isset($assinatura)
                <p>Informações da Assinatura:</p>
                <p>Status: {{ $assinatura->status == 1 ? 'Ativa' : 'Inativa' }}</p>
                @if ($assinatura->status == 1)
                    <p>O usuário tem nível suficiente e a assinatura está ativa para criar domínio.</p>
                @else
                    <p>O usuário tem nível suficiente, mas a assinatura não está ativa para criar domínio.</p>
                @endif
            @else
                <p>O usuário tem nível suficiente, mas não foi encontrada nenhuma informação de assinatura.</p>
            @endisset
        @else
            <p>O usuário não atende aos requisitos para criar domínio.</p>
        @endif
    @endisset

    @isset($message)
        <p>{{ $message }}</p>
    @endisset
</body>
</html>
