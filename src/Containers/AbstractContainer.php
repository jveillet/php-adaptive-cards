<?php

namespace AdaptiveCards\Containers;

use AdaptiveCards\Elements\AbstractElement;

/**
 * This object is representing a genric container.
 *
 * It has methods that needs to be implemented by the class extending it.
 *
 * @property string $type The type of container.
 */
abstract class AbstractContainer
{
    /**
     * Type of container.
     *
     * @var string
     */
    private $type = "";

    /**
     * Sets the type of container.
     *
     * @param string $type String representing the type of container.
     *
     * @return AbstractContainer Instance of AbstractContainer.
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the type of container.
     *
     * @return string representing the type of container.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Add items to the container.
     *
     * @param AbstractElement $element Represents the element to add into the container.
     *
     * @return AbstractContainer
     */
    abstract public function addItem(AbstractElement $element): self;
}
