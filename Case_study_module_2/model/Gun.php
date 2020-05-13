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
}
