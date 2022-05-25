<?php

namespace App\Model;

class Item
{
    private $title;
    private $brand;
    private $date;
    private $price;
    private $tradingName;
    private $location;
    private $address;
    private $phone;
    private $latitude;
    private $longitude;
    private $siteFeatures;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }
 
    public function getTradingName()
    {
        return $this->tradingName;
    }

    public function setTradingName($tradingName)
    {
        $this->tradingName = $tradingName;

        return $this;
    }

    public function getSiteFeatures()
    {
        return $this->siteFeatures;
    }

    public function setSiteFeatures($siteFeatures)
    {
        $this->siteFeatures = $siteFeatures;

        return $this;
    }
}
