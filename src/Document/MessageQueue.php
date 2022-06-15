<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(db="messages", collection="rssData", repositoryClass="Repository\MessageRepository") */
class MessageQueue
{
    /**
     * @ODM\Id
     */
    private $id;
}