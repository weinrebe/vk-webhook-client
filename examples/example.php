<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Weinrebe\VkWebhook\Client;
use Weinrebe\VkWebhook\EventList;

$client = new Client();

$client->attach(new \Weinrebe\VkWebhook\Examples\Observers\Logger(__DIR__ . '/../log.txt'), '*');
$client->attach(new \Weinrebe\VkWebhook\Examples\Observers\Confirmation('206136423'), EventList::CONFIRMATION);

$client->initialize();