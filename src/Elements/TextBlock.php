<?php

declare(strict_types=1);

namespace AdaptiveCards\Elements;

use AdaptiveCards\Elements\AbstractElement;

/**
 * This is an object representing an Element of type TextBlock.
 *
 * @property string $text Text.
 * @property bool $isVisible Initially visible (true|false).
 * @property string $spacing Spacing (None, Small, Default, Medium, Large, ExtraLarge, Padding).
 * @property bool $separator Separator (true|false).
 * @property string $horizontalAlignment Horizontal alignment (Left, Center, Right).
 * @property string $height Height (Automatic, Stretch).
 * @property bool $wrap Wrap (true|false).
 * @property string $maxLines Maximum lines (empty by default).
 * @property string $fontType Font type (Default, Monospace).
 * @property string $size Size (Small, Default, Medium, Large, ExtraLarge).
 * @property string $weight Weight (Lighter, Default, Bolder).
 * @property string $color Color (Default, Dark, Light, Accent, Good, Warning, Attention).
 * @property bool $isSubtle Subtle (true|false).
 */
class TextBlock extends AbstractElement
{
    /* TextBlock */
    public $text = "";
    public $isVisible = true;

    /* Layout properties */
    public $spacing = "";
    public $separator = false;
    public $horizontalAlignment = "Left";
    public $height = "";
    public $wrap = true;
    public $maxLines = "";

    /* Style */
    public $fontType = "";
    public $size = "";
    public $weight = "";
    public $color = "";
    public $isSubtle = false;

    /**
     * Create a new TextBlock instance.
     *
     * @param string $text Optionnal text value of the TextBlock.
     */
    public function __construct($text = "")
    {
        $this->setType("TextBlock");
        $this->text = $text;
        return $this;
    }

    /**
     * Currently not implemented.
     *
     * TextBlock doesn't have an array of elements.
     *
     * @param AbstractElement $element An element.
     *
     * @return TextBlock
     */
    public function addItem(AbstractElement $element): self
    {
        throw new \Exception("Not implemented.");
    }

    /**
     * Filters unused properties of the TextBlock.
     *
     * Empty properties are not added to the final JSON when used in the designer.
     *
     * @return AbstractElement $element The TextBlock without empty values.
     */
    public function filtered(): self
    {
        $element = $this;

        foreach ($element as $key => $value) {
            if ($value == '') {
                unset($element->$key);
            }
        }

        return $element;
    }
}
