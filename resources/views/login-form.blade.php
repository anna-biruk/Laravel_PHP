<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <a href="/"> back</a>
    <div class="form">
        <form class="signin" method="POST" action="{{ route('login') }}">
        @csrf
            <label class="field">Вход</label>
            <input  class = 'field' name = 'name' type="text" placeholder="Логин">
            <input class = 'field' name = 'password' type="password" placeholder="Пароль">
            <input class = 'field'  type="submit" value="Войти">
        </form>
    
        <form class="signup" method="POST" action="{{ route('register') }}">
        @csrf
            <label class="field">Регистрация</label>
            <input   class = 'field' type="text" name="email" placeholder="Email">
            <input  class = 'field' type="text" name='name' placeholder="Логин">
            <input  class = 'field' type="password" name = 'password' placeholder="Пароль">
            <input  class = 'field' type="password" name="password_confirmation" placeholder="Повторить пароль">
            <input  class = 'field' type="submit" value="Зарегистрироваться">
        </form>
    </div>
   
</body>
</html>