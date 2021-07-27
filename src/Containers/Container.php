<?php

namespace AdaptiveCards\Containers;

use AdaptiveCards\Containers\AbstractContainer;
use AdaptiveCards\Elements\AbstractElement;

/**
 * This is an object representing a container.
 *
 * This container has one or many items that can be added.
 *
 * @property array $items List of items.
 */
class Container extends AbstractContainer
{
    /**
     * Items.
     *
     * @var array
     */
    public $items = [];

    /**
     * Create a new Container instance.
     */
    public function __construct()
    {
        $this->setType("Container");

        return $this;
    }

    /**
     * Add an element to the Container.
     *
     * @param AbstractElement $element An Element.
     *
     * @return Container Instance of Container.
     */
    public function addItem(AbstractElement $element): self
    {
        array_push($this->items, $element);

        return $this;
    }
}
