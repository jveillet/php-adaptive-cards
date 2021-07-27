<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Containers;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Containers\ColumnSet;
use AdaptiveCards\Elements\Column;
use AdaptiveCards\Elements\TextBlock;

final class ColumnSetTest extends TestCase
{
    public function testCanInitializeANewContainer(): void
    {
        $this->assertInstanceOf(ColumnSet::class, new ColumnSet());
    }

    public function testHasAMessageType(): void
    {
        $container = new ColumnSet();
        $this->assertEquals($container->getType(), "ColumnSet");
    }

    public function testCanAddAnElement(): void
    {
        $container = new ColumnSet();
        $element = new Column();

        $container->addItem($element);

        $this->assertEquals(count($container->columns), 1);
    }

    public function testCanNotAddOtherTypeThanColumn(): void
    {
        $container = new ColumnSet();
        $element = new TextBlock("test");

        $this->expectException(\Exception::class);

        $container->addItem($element);
    }
}
