<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Inquilino</title>
</head>
<body>
    <div class="container">
        <h2>Criar Inquilino</h2>

        <form action="{{ route('tenant.create') }}" method="post">
            @csrf

            <label for="tenant_id">ID do Inquilino:</label>
            <input type="text" name="tenant_id" required>

            <label for="domain">Domínio:</label>
            <input type="text" name="domain" required>

            <button type="submit">Criar Inquilino</button>
        </form>

    </div>
</body>
</html>
