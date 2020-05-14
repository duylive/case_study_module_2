<?php

namespace model;

class Gun
{
    public $name;
    public $series;
    public $branch;
    public $content;
    public $origin;
    public $price;
    public $status;
    public $type_id;
    public $size_bullet_id;

    public function __construct($name, $series, $branch, $content, $origin, $price, $status, $type_id, $size_bullet_id)
    {
        $this->name = $name;
        $this->series = $series;
        $this->branch = $branch;
        $this->content = $content;
        $this->origin = $origin;
        $this->price = $price;
        $this->status = $status;
        $this->type_id = $type_id;
        $this->size_bullet_id = $size_bullet_id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $branch
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @param mixed $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @param mixed $size_bullet_id
     */
    public function setSizeBulletId($size_bullet_id)
    {
        $this->size_bullet_id = $size_bullet_id;
    }

    /**
     * @param mixed $type_id
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @return mixed
     */
    public function getSizeBulletId()
    {
        return $this->size_bullet_id;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->type_id;
    }
}
