<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=WeddingSite',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			'useFileTransport' => false,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'mailtrap.io',
				'username' => '30cd1673afa5eb',
				'password' => '9708f4234071ae',
				'port' => '2525',
				'encryption' => 'tls',
			],

        ],
    ],
];
