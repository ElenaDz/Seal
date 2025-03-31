<?php
/** @var string $login */
/** @var array $errors */
?>
<h1>Регистрация</h1>

<form action="<?= \APP\Action\UserReg::getUrl(); ?>" method="post">

	<label>
		Логин:
		<input
			type="text"
			name="<?= \APP\Action\UserReg::POST_NAME_LOGIN; ?>"
			value="<?= $login; ?>"
            required
		>
        <small>
            <?= $errors[\APP\Action\UserReg::POST_NAME_LOGIN]; ?>
        </small>
	</label><br>

	<label>
		Пароль:
		<input
			type="password"
			name="<?= \APP\Action\UserReg::POST_NAME_PASS; ?>"
            required
		>
        <small>
	        <?= $errors[\APP\Action\UserReg::POST_NAME_PASS]; ?>
        </small>
	</label><br>

	<input
		type="submit"
		name="submit"
		value="Зарегистрироваться"
	>
    <small>
	    <?= $errors[\APP\Action\UserReg::POST_NAME_SUBMIT]; ?>
    </small><br>
	<br>

	<a href="<?= \APP\Action\UserLogin::getUrl(); ?>">Вход</a>

</form>