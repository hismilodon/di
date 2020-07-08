<?php

require __DIR__.'/vendor/autoload.php';

use DiDemo\FriendHarvester;

/* START BUILDING CONTAINER */

$container = new Pimple();

require_once __DIR__."/app/config.php";
require_once __DIR__."/app/services.php";

/* END CONTAINER BUILDING */

/** @var FriendHarvester $friendHarvester */
$friendHarvester = $container['friend_harvester'];

$friendHarvester->emailFriend();
