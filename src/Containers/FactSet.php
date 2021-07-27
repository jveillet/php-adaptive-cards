<?php

namespace AdaptiveCards\Containers;

use AdaptiveCards\Containers\AbstractContainer;
use AdaptiveCards\Elements\AbstractElement;

/**
 * This is an object representing a container of type FactSet.
 *
 * This container has one or many facts that can be added.
 *
 * @property array $facts List of Facts.
 */
class FactSet extends AbstractContainer
{
    /**
     * Facts.
     *
     * @var array
     */
    public $facts = [];

    /**
     * Create a new FactSet instance.
     */
    public function __construct()
    {
        $this->setType("FactSet");

        return $this;
    }

    /**
     * Add a Fact to the FactSet.
     *
     * @param string $title Title of the fact.
     * @param string $value Value of the fact.
     *
     * @return FactSet Instance of FactSet.
     */
    public function addFact(string $title, string $value): self
    {
        array_push($this->facts, ["title" => $title, "value" => $value]);

        return $this;
    }

    /**
     * Add eemnts to the FactSet.
     *
     * Currently not used because a FactSet is composed of an array of strings
     * and not an array of Elements.
     *
     * @param AbstractElement $element An Element.
     *
     * @return FactSet Instance of FactSet.
     */
    public function addItem(AbstractElement $element): self
    {
        throw new \Exception("Not implemented");
    }
}
