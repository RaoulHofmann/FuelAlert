<?php

namespace App\Model;

class Channel
{
    private $title;
    private $ttl;
    private $link;
    private $description;
    private $language;
    private $copyright;
    private $lastBuildDate;
    private $image;

    /** 
     * @var Item[]
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
        // Split date in half because its twice in the rss feed
        if (strlen($lastBuildDate) > 29) {
            $middle = strlen($lastBuildDate)/2;
            $lastBuildDate = substr($lastBuildDate,0,$middle);
        }
        
        // format to timestamp
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
}