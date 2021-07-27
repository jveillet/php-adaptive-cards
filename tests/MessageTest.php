<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Message;
use AdaptiveCards\Cards\AdaptiveCard;

final class MessageTest extends TestCase
{

    public function testCanInitializeANewMessage(): void
    {
        $this->assertInstanceOf(
            Message::class,
            new Message()
        );
    }

    public function testHasAMessageType(): void
    {
        $message = new Message();
        $this->assertEquals(
            $message->type,
            "message"
        );
    }

    public function testCanAddAttachments(): void
    {
        $message = new Message();
        $card = new AdaptiveCard();

        $message->addAttachment($card);

        $this->assertEquals(
            count($message->attachments),
            1
        );
    }
}
