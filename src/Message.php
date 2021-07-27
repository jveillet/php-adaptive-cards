<?php

/**
 * Copyright (c) Jérémie Veillet <jveillet@hey.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/jveillet/php-adaptive-cards
 */

declare(strict_types=1);

namespace AdaptiveCards;

use AdaptiveCards\Cards\AdaptiveCard;
use AdaptiveCards\Containers\AbstractContainer;
use AdaptiveCards\Containers\Container;
use AdaptiveCards\Containers\ColumnSet;
use AdaptiveCards\Containers\FactSet;
use AdaptiveCards\Elements\Element;
use AdaptiveCards\Elements\TextBlock;
use AdaptiveCards\Elements\Column;

/**
 * Global Message structure.
 *
 * @see https://docs.microsoft.com/en-us/microsoftteams/platform/webhooks-and-connectors/how-to/connectors-using?tabs=cURL
 */
class Message
{
    /**
     * Type of the adaptive card.
     *
     * @var string
     */
    public $type = "";

    /**
     * List of attachments.
     *
     * @var array
     */
    public $attachments = [];

    /**
     * Create a new Message instance.
     */
    public function __construct()
    {
        $this->type = "message";
        return $this;
    }

    /**
     * Add an attachement to the card.
     *
     * @param AdaptiveCard $card One instance of card.
     *
     * @return Message
     */
    public function addAttachment(AdaptiveCard $card): self
    {
        array_push($this->attachments, $card);

        return $this;
    }
}
