<?php

$container['smtp.server'] = 'smtp.SendMoneyToStrangers.com';
$container['smtp.user'] = 'smtpuser';
$container['smtp.password'] = 'smtppass';
$container['smtp.port'] = '465';

$container['database.dsn'] = 'sqlite:' . __DIR__ . '/../data/database.sqlite';
