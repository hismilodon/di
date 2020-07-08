<?php

use DiDemo\FriendHarvester;
use DiDemo\Mailer\SmtpMailer;

/** @var SmtpMailer $container['mailer']*/
$container['mailer'] = $container->share(function (Pimple $container) {
  return new SmtpMailer(
    $container['smtp.server'],
    $container['smtp.user'],
    $container['smtp.password'],
    $container['smtp.port']
  );
});

/** @var /PDO $container['pdo']*/
$container['pdo'] = $container->share(function (Pimple $container) {
  return new PDO($container['database.dsn']);
});

/** @var FriendHarvester $container['friend_harvester']*/
$container['friend_harvester'] = $container->share(function (Pimple $container1) {
  return new FriendHarvester($container1['pdo'], $container1['mailer']);
});

