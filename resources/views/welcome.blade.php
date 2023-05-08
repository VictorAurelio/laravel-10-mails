<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
<h1>Formulário de Contato</h1>
<form action="{{ route('send-email.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea><br>

    <input type="submit" value="Send">
</form>
</body>
</html>
