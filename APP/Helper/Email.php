<?php
namespace APP\Helper;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
	public static function send($subject, $message, $to)
	{
		require_once __DIR__ . '/../../vendor/PHPMailer/src/Exception.php';
		require_once __DIR__ . '/../../vendor/PHPMailer/src/PHPMailer.php';
		require_once __DIR__ . '/../../vendor/PHPMailer/src/SMTP.php';

        $subject = implode(', ', $subject);
		$mail = new PHPMailer(true);

		$mail->CharSet    = PHPMailer::CHARSET_UTF8;

		// $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Host       = 'smtp.yandex.ru';
		// здесь логин от яндекса
		$mail->Username   = 'test';
		// завести новый пароль для приложения почты здесь https://passport.yandex.ru/profile/access использовать здесь
		// старый пароль от яндекса при этом не измениться, здесь заводятся дополнительные пароли к основному, чтобы не светить основной
		// для отладки подойдет твой, для релиза нужно будет попросить заказчика сделать это
		// так же надо включить настройку "Разрешить доступ к почтовому ящику с помощью почтовых клиентов" в настройках яндекс почты
		$mail->Password   = 'Пароль приложения';
		$mail->Port       = 587;

		// здесь email кому отправлять это письмо например в нашем случае это может быть tehnomarket.nhk@yandex.ru
		$mail->addAddress("test.ru");

		// здесь указать email с того же аккаунта, что выше был указан пароль, может совпадать с email to
		$mail->setFrom("test.ru");

		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body    = $message;

		$mail->send();

	}
}