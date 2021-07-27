<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Cards;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Cards\AdaptiveCard;
use AdaptiveCards\Containers\Container;
use AdaptiveCards\Elements\TextBlock;

final class AdaptiveCardTest extends TestCase
{
    public function testCanInitializeANewAdaptiveCard(): void
    {
        $this->assertInstanceOf(
            AdaptiveCard::class,
            new AdaptiveCard()
        );
    }

    public function testHasAMessageType(): void
    {
        $card = new AdaptiveCard();
        $this->assertEquals(
            $card->type,
            "AdaptiveCard"
        );
    }

    public function testCanAddAContainer(): void
    {
        $card = new AdaptiveCard();
        $container = new Container();

        $card->addItem($container);

        $this->assertEquals(
            count($card->body),
            1
        );
    }

    public function testCanAddAnElement(): void
    {
        $card = new AdaptiveCard();
        $element = new TextBlock();

        $card->addItem($element);

        $this->assertEquals(
            count($card->body),
            1
        );
    }
}
