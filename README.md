# php-adaptive-cards

A Simple PHP package for Microsoft's Adaptive Cards.

This library provides simple objects to construct a message that will contain one or more AdaptiveCard.

This message can conveniently be send through any HTTP client as JSON format to Microsoft Teams.

## Requirements

PHP 5.6 and later.

## Installation

You can install the library package via Composer:

```bash
composer install
```

To use the library, use Composer's autoload:

```php
require_once('vendor/autoload.php');
```

## Getting Started

```php
$message = new AdaptiveCards\Message();
$card = new AdaptiveCards\Cards\AdaptiveCard();
$container = new AdaptiveCards\Containers\Container();
$textBlock = new AdaptiveCards\Elements\TextBlock("my_text);

$container->addItem($textBlock);
$card->addItem($container);
$message->addAttachment($card);

echo json_encode($message);
```

## Development

Install dependencies:

```bash
composer install
```

This library uses PHPUnit for tests. Code must pass tests before PRs are submitted, otherwise CI will fail.

Run the test suite:

```bash
./vendor/bin/phpunit
```

Or to run an individual test file:

```bash
./vendor/bin/phpunit tests/MessageTest.php
```
