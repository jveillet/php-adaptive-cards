<?php

declare(strict_types=1);

namespace AdaptiveCards\Elements;

use AdaptiveCards\Elements\AbstractElement;

/**
 * This is an object representing an Element of type Column to use with a ColumnSet.
 *
 * @property array $items Items.
 * @property string $width Width (Automatic, Stretch, Weighted, Pixels).
 */
class Column extends AbstractElement
{
    public $items = [];
    public $width = "stretch";

    /**
     * Create a new Column instance.
     */
    public function __construct()
    {
        $this->setType("Column");

        return $this;
    }

    /**
     * Add an Element to the Column.
     *
     * @param AbstractElement $element An element.
     *
     * @return Column
     */
    public function addItem(AbstractElement $element): self
    {
        array_push($this->items, $element);

        return $this;
    }

    /**
     * Filters unused properties.
     *
     * @return AbstractElement $element The Column with filterd properties.
     */
    public function filtered(): self
    {
    }
}
