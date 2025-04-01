<?php
/** @var array $errors */
?>
<h1>Авторизация</h1>

<form action="<?= \APP\Action\UserLogin::getUrl(); ?>" method="post">

    <label>
        Логин:
        <input
			type="text"
			name="<?= \APP\Action\UserLogin::POST_NAME_LOGIN; ?>"
			value=""
            required
		>
        <small class="text-danger">
	        <?= $errors[\APP\Action\UserLogin::POST_NAME_LOGIN]; ?>
        </small>
    </label><br>

    <label>
        Пароль:
        <input
			type="password"
			name="<?= \APP\Action\UserLogin::POST_NAME_PASS; ?>"
            required
		>
        <small class="text-danger">
	        <?= $errors[\APP\Action\UserLogin::POST_NAME_PASS]; ?>
        </small>
    </label><br>

    <input
        type="submit"
        name="<?= \APP\Action\UserLogin::POST_NAME_SUBMIT; ?>"
        value="Войти"
    >
    <small class="text-danger">
	    <?= $errors[\APP\Action\UserLogin::POST_NAME_SUBMIT]; ?>
    </small>
    <br>
    <br>

    <a href="<?= \APP\Action\UserReg::getUrl(); ?>">Регистрация</a>

</form>