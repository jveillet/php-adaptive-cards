<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Elements;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Elements\Column;
use AdaptiveCards\Elements\TextBlock;

final class ColumnTest extends TestCase
{
    public function testCanInitializeANewContainer(): void
    {
        $this->assertInstanceOf(Column::class, new Column());
    }

    public function testHasAMessageType(): void
    {
        $element = new Column();
        $this->assertEquals($element->getType(), "Column");
    }

    public function testCanAddAnElement(): void
    {
        $element = new Column();
        $textBlock = new TextBlock("test");
        $element->addItem($textBlock);

        $this->assertEquals(count($element->items), 1);
    }
}
