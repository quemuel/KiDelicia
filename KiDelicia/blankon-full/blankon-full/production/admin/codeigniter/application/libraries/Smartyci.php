<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/smarty/libs/Smarty.class.php');

class Smartyci extends Smarty {

    function __construct()
    {
        parent::__construct();
        // NOT Changig this for some reason
        $this->setTemplateDir(APPPATH.'views/templates/');
        $this->setCompileDir(APPPATH.'views/templates_c/');
    }

}