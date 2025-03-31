
<h1>Авторизация</h1>

<form action="<?= \APP\Action\UserLogin::getUrl(); ?>" method="post">

    <label>
        Логин:
        <input
			type="text"
			name="<?= \APP\Action\UserLogin::POST_NAME_LOGIN; ?>"
			value=""
			>
    </label><br>

    <label>
        Пароль:
        <input
			type="password"
			name="<?= \APP\Action\UserLogin::POST_NAME_PASS; ?>"
			>
    </label><br>

    <input
            type="submit"
            name="submit"
            value="Войти"
    ><br>
    <br>

    <a href="<?= \APP\Action\UserReg::getUrl(); ?>">Регистрация</a>

</form>