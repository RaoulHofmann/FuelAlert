<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(db="messages", collection="rssData", repositoryClass="Repository\ChannelRepository") */
class MessageQueue
{
    /**
     * @ODM\Id
     */
    private $id;
}