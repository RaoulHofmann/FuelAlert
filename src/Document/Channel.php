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
     * @ODM\Field(type="string")
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
    }

    public function getItem() {
        return $this->item;
    }

    public function setItem($item) {
        $this->item = $item;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of ttl
     */ 
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Set the value of ttl
     *
     * @return  self
     */ 
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of language
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of language
     *
     * @return  self
     */ 
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get the value of copyright
     */ 
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set the value of copyright
     *
     * @return  self
     */ 
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get the value of lastBuildDate
     */ 
    public function getLastBuildDate()
    {
        return $this->lastBuildDate;
    }

    /**
     * Set the value of lastBuildDate
     *
     * @return  self
     */ 
    public function setLastBuildDate($lastBuildDate)
    {
        $this->lastBuildDate = $lastBuildDate;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}