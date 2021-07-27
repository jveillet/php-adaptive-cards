<?php

namespace AdaptiveCards\Containers;

use AdaptiveCards\Containers\AbstractContainer;
use AdaptiveCards\Elements\AbstractElement;
use AdaptiveCards\Elements\Column;

/**
 * This is an object representing a container of type ColumnSet.
 *
 * This container has one or many columns that can be added.
 *
 * @property array $columns List of columns.
 */
class ColumnSet extends AbstractContainer
{
    /**
     * Columns.
     *
     * @var array
     */
    public $columns = [];

    /**
     * Create a new ColumnSet instance.
     */
    public function __construct()
    {
        $this->setType("ColumnSet");

        return $this;
    }

    /**
     * Add a columns to the ColumnSet.
     *
     * @param Column $column A Column Element.
     *
     * @return ColumnSet Instance of ColumnSet.
     */
    public function addItem(AbstractElement $column): self
    {
        if ($column->getType() != "Column") {
            throw new \Exception("Each item in the ColumnSet must be a Column.");
        }

        array_push($this->columns, $column);

        return $this;
    }
}
