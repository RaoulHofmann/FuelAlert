<?php

namespace App\Model;

class Rss
{
    /** @var Channel */
    private $channel;

    public function getChannel() {
        return $this->channel;
    }

    public function setChannel($channel) {
        $this->channel = $channel;

        return $this;
    }
}