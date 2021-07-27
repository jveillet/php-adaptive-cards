<?php

declare(strict_types=1);

namespace AdaptiveCards\Tests\Containers;

use PHPUnit\Framework\TestCase;
use AdaptiveCards\Containers\Container;
use AdaptiveCards\Elements\TextBlock;

final class ContainerTest extends TestCase
{
    public function testCanInitializeANewContainer(): void
    {
        $this->assertInstanceOf(Container::class, new Container());
    }

    public function testHasAMessageType(): void
    {
        $container = new Container();
        $this->assertEquals($container->getType(), "Container");
    }

    public function testCanAddAnElement(): void
    {
        $container = new Container();
        $element = new TextBlock();

        $container->addItem($element);

        $this->assertEquals(count($container->items), 1);
    }
}
