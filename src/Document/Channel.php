<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/** @ODM\Document(db="fuelAlert", collection="rssData") */
class Channel
{
    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     */
    private $title;
    
    /**
     * @ODM\Field(type="string")
     */
    private $ttl;
    
    /**
     * @ODM\Field(type="string")
     */
    private $link;
    
    /**
     * @ODM\Field(type="string")
     */
    private $description;
    
    /**
     * @ODM\Field(type="string")
     */
    private $language;
    
    /**
     * @ODM\Field(type="string")
     */
    private $copyright;
    
    /**
     * @ODM\Field(type="timestamp")
     */
    private $lastBuildDate;
    
    /**
     * @ODM\Field(type="hash")
     */
    private $image;

    /** 
     * @var Item[]
     * @ODM\EmbedMany(targetDocument=Item::class) 
     */
    private $item;

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    public function getItem() {
        return $this->item;
    }

    public function setItem($item) {
        $this->item = $item;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getTtl()
    {
        return $this->ttl;
    }

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    public function getCopyright()
    {
        return $this->copyright;
    }

    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getLastBuildDate()
    {
        return $this->lastBuildDate;
    }

    public function setLastBuildDate($lastBuildDate)
    {
        $date = new \DateTime($lastBuildDate);

        $this->lastBuildDate = $date->getTimestamp();

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}