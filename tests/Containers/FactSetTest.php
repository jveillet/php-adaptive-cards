<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Containers;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Containers\FactSet;
use AdaptiveCards\Elements\TextBlock;

final class FactSetTest extends TestCase
{
    public function testCanInitializeANewContainer(): void
    {
        $this->assertInstanceOf(FactSet::class, new FactSet());
    }

    public function testHasAMessageType(): void
    {
        $container = new FactSet();
        $this->assertEquals($container->getType(), "FactSet");
    }

    public function testCanAddAnElement(): void
    {
        $container = new FactSet();
        $container->addFact("titleTest", "valueTest");

        $this->assertEquals(count($container->facts), 1);
    }

    public function testAddItemThrowsNotImplemented(): void
    {
        $container = new FactSet();
        $item = new TextBlock("test");

        $this->expectException(\Exception::class);

        $container->addItem($item);
    }
}
