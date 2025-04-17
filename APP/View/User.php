<?php
use APP\Entity\User;

/** @var User $user */
/** @var User[] $users */
?>
<h1>Профиль</h1>

<dl>
	<dt>Логин</dt>
	<dd><?= htmlspecialchars($user->getLogin()); ?></dd>

    <dt>Права</dt>
    <dd><?= $user->getPermissions(); ?></dd>

	<dt></dt>
	<dd>
		<form action="<?= \APP\Action\UserLogout::getUrl(); ?>" method="post">
			<input type="submit" name="logout" value="Выход">
		</form>
	</dd>
</dl>

<?php if (count((array) $users) > 1): ?>

    <h2>Пользователи</h2>

	<ul>
        <?php foreach ($users as $user): ?>

            <?php if ($user->getLogin() === \APP\Service\Auth::getUser()->getLogin()) continue; ?>

        	<li>
                <?= $user->getLogin(); ?>
                <nobr>
                (
                    <?php if ($user->isManager()): ?>

                        <?= $user->getPermissions(); ?>

                    <?php else: ?>

                        <form action="#" method="post" style="display: inline-block">
                            <input type="submit" name="" value="сделать менеджером">
                        </form>

                    <?php endif; ?>
                )
                </nobr>
            </li>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>