<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas</title>
</head>
<body>
//link para rotas administradores//
<a href="{{ route('administradores.index') }}">Listar Administradores</a>
<a href="{{ route('administradores.store') }}">Criar Administrador</a>
<a href="{{ route('administradores.show') }}">Mostrar Administrador</a>
<a href="{{ route('administradores.update') }}">Alterar Administrador</a>
<a href="{{ route('administradores.destroy') }}">Excluir Administrador</a>




//link para rotas documentos//
<a href="{{ route('documentos.index') }}">Listar Documentos</a>
<a href="{{ route('documentos.store') }}">Criar Documento</a>
<a href="{{ route('documentos.download') }}">Baixar Documento</a>
<a href="{{ route('documentos.update') }}">Alterar Documento</a>
<a href="{{ route('documentos.destroy') }}">Excluir Documento</a>
</body>
</html>