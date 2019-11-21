<?php
class Form
{
    private $postData = array();

    public function __construct()
    {

    }

    public function post($field)
    {
        $this->postData[$field] = $_POST[$field];
    }

    public function val()
    {
        # code...
    }
}
