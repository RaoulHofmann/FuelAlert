<?php

namespace App\Model;

use App\Document\Channel;

class Rss
{
    /** @var Channel */
    private $channel;

    public function getChannel() {
        return $this->channel;
    }

    public function setChannel($channel) {
        $this->channel = $channel;
    }
}