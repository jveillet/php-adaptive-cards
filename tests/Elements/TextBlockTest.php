<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Elements;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Elements\TextBlock;

final class TextBlockTest extends TestCase
{
    public function testCanInitializeANewContainer(): void
    {
        $this->assertInstanceOf(TextBlock::class, new TextBlock());
    }

    public function testHasAMessageType(): void
    {
        $element = new TextBlock();
        $this->assertEquals($element->getType(), "TextBlock");
    }

    public function testHasAText(): void
    {
        $element = new TextBlock("test");
        $this->assertEquals($element->text, "test");
    }

    public function testIsVisible(): void
    {
        $element = new TextBlock("test");
        $this->assertEquals($element->isVisible, true);
    }

    public function testCanFilterEmptyProperties(): void
    {
        $element = new TextBlock("test");
        $filtered = $element->filtered();
        $this->assertEquals(isset($filtered->fontType), false);
    }

    public function testCanAddAnElement(): void
    {
        $textBlock = new TextBlock("test");
        $textBlock2 = new TextBlock("test2");

        $this->expectException(\Exception::class);

        $textBlock->addItem($textBlock2);
    }
}
