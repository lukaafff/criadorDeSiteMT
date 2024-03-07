<!DOCTYPE html>
<html>
<head>
    <title>Dados Externos2</title>
</head>
<body>
    <h1>Informações do Usuário</h1>

    @if(isset($usuarios))
        <h2>Lista de Usuários</h2>
        <ul>
            @foreach($usuarios as $usuario)
                <li>
                    <strong>Nome:</strong> {{ $usuario->name }}<br>
                    <strong>Nível:</strong> {{ $usuario->level }}
                </li>
            @endforeach
        </ul>
    @elseif(isset($usuario))
        <h2>Detalhes do Usuário</h2>
        <p>
            <strong>Nome:</strong> {{ $usuario->name }}<br>
            <strong>Nível:</strong> {{ $usuario->level }}
        </p>
    @else
        <p>Nenhum usuário encontrado.</p>
    @endif
</body>
</html>
