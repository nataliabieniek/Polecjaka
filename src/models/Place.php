<?php

class Place
{
    private $title;
    private $description;
    private $image;
    private $district;
    private $address;

    public function __construct($title, $address, $district, $description, $image)
    {
        $this->title = $title;
        $this->address = $address;
        $this->district = $district;
        $this->description = $description;
        $this->image = $image;
    }
    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}