<?php

declare(strict_types=1);

namespace AdaptiveCards\Elements;

/**
 * This object is representing a generic Element.
 *
 * It has methods that needs to be implemented by the class extending it.
 *
 * @property string $type The type of element.
 */
abstract class AbstractElement
{
    /**
     * Type of element.
     *
     * @var string
     */
    private $type = "";

    /**
     * Sets the type of element.
     *
     * @param string $type String representing the type of element.
     *
     * @return AbstractElement Instance of AbstractElement.
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the type of element.
     *
     * @return string representing the type of element.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Utility function to filter the output of the element.
     *
     * @return AbstractElement
     */
    abstract public function filtered(): AbstractElement;

    /**
     * Add items to the element.
     *
     * @param AbstractElement $element Represents the element to add into the element.
     *
     * @return AbstractElement
     */
    abstract public function addItem(AbstractElement $element): self;
}
