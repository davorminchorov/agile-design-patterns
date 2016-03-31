<?php


class ProductType {

    private $category;
    private $name;
    private $code;

    function __construct($category, $name, $code)
    {
        $this->category = $category;
        $this->name = $name;
        $this->code = $code;
    }

    public function __get($typeProperty)
    {
        if (!isset($typeProperty)){
            throw new Exception ('No such property!');
        }
        return $this->$typeProperty;
    }
}