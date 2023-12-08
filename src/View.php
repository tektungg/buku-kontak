<?php

namespace src;

class View
{
    private $_template;
    private $_data; //data yg bs diakses dr template
    public function __construct($template){
        $this->_template = $template;
        $this->_data = [];
    }

    public function setData($data)
    {
        $this->_data = $data;
    }
    public function render(){
        // include template agar bisa ditampikan
        include_once $this->_template;
    }
}