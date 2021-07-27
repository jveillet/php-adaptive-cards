<?php

declare(strict_types=1);

namespace AdaptiveCards\Cards;

use AdaptiveCards\Elements\AbstractElement;
use AdaptiveCards\Containers\AbstractContainer;

/**
 * This object is representing an AdaptiveCard.
 *
 * @property array $body Body.
 * @property string $summary Summary.
 * @property string $version Version.
 * @property string $schema Schema.
 * @property string $type Type.
 */
class AdaptiveCard
{
    /**
     * Body of the card.
     *
     * @var array
     */
    public $body = [];

    /**
     * The summary (optional).
     *
     * @var string
     */
    public $summary = "";

    /**
     * The card version.
     *
     * @var string
     */
    public $version = "";

    /**
     * The adaptive card schema URL.
     *
     * @var string
     */
    public $schema = "";

    /**
     * The card type.
     *
     * @var string
     */
    public $type = "";

    /**
     * Create a new Adaptivecard instance.
     */
    public function __construct()
    {
        $this->type = "AdaptiveCard";

        $this->{'$schema'} = "https://adaptivecards.io/schemas/adaptive-card.json";
        $this->version = "1.2";

        return $this;
    }

    /**
     * Add items to the Card (Element or Container).
     *
     * @param mixed $item Element or Container type.
     *
     * @return AdaptiveCard
     */
    public function addItem($item): self
    {
        array_push($this->body, $item);

        return $this;
    }
}
