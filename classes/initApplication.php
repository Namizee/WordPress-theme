<?php

namespace kobzar;

class initApplication
{
    function __construct()
    {
        $this->init();
    }
    function init(){
        new Enqueue();
        new Settings();
        new Filter();
        new ConsultationForm();
        new ProductModal();
    }
}
