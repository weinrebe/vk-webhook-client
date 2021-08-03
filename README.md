
![GitHub release (latest by date)](https://img.shields.io/github/v/release/weinrebe/vk-webhook-client?style=flat-square)
<img src="https://img.shields.io/github/license/weinrebe/vk-webhook-client?style=flat-square&logo=star" alt="License">
<img src="https://img.shields.io/badge/PHP-v8.0.*-green??style=flat-square&logo=php">

# vk-webhook-client
Webhook клиент, для CALLBACK API Вконтакте, реализующий паттерн "Наблюдатель"


## Установка и использование
**vk-webhook-client** доступен в [Packagist](https://packagist.org/packages/weinrebe/vk-webhook-client) (_с использованием семантического управления версиями_), и установка через **Composer** является единственным способом установки.

Для установки, выполните команду:
```sh
composer require weinrebe/vk-webhook-client
```

## Реализация
Класс 
`Weinrebe\VkWebhook\Client` реализует интерфейс [SplSubject](https://www.php.net/manual/ru/class.splsubject.php).

Клиенский код наблюдателя, должен реализовать интерфейс [SplObserver](https://www.php.net/manual/ru/class.splobserver.php)
и может быть присоединен с помощью метода `->attach()`

Например: 
```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Weinrebe\VkWebhook\Client;
use Weinrebe\VkWebhook\EventList;

$client = new Client();

$client->attach(new \Weinrebe\VkWebhook\Examples\Observers\Logger(__DIR__ . '/../log.txt'), '*');
$client->attach(new \Weinrebe\VkWebhook\Examples\Observers\Confirmation('206136423'), EventList::CONFIRMATION);

$client->initialize();
```

### События
Наблюдатели, могут подписываться на все или некоторые события. 
События, указаны в константах класса `Weinrebe\VkWebhook\EventList`


## Полезные ссылки:
1. [Типы событий](https://vk.com/dev/groups_events)
2. [Документация Vk.com API](https://vk.com/dev/first_guide)
3. [Паттерн "Наблюдатель"](https://refactoring.guru/ru/design-patterns/observer)
4. [Примеры реализации](https://github.com/weinrebe/vk-webhook-client/tree/main/examples)

## Лицензия
MIT License

Copyright (c) 2021 Victor Vinogradov

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

## Контакты:
1. [Вконтакте](https://vk.com/winogradow.wiktor)
2. [Telegram](https://t.me/victor_dialogbox)