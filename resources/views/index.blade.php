<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
</head>
<body>
    <h1>Dados do Usuário</h1>
    <p>Nome: {{ session('user')->name }}</p>
    <p>Email: {{ session('user')->email }}</p>
    <!-- Exibir outros dados do usuário, se necessário -->
</body>
</html>
