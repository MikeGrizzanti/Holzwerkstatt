<?php

class controller {
    
    private $context = array();
    
    public function run($action) {
        $this->$action();
        $this->generatePage($action);
    }
    
    public function home_DE () {
        $this->addContext("template", "home_de");
    }
    
    public function contact_DE () {
        $this->addContext("template", "kontakt_de");
    }
    
    public function dieTischlerei_DE () {
        $this->addContext("template", "die_Tischlerei_de");
    }
    
    public function planung3D_DE () {
        $this->addContext("template", "3d_planung_de");
    }
    
    public function referenzen_DE () {
        $this->addContext("template", "referenzen_de");    
    }
    
    private function generatePage($template){
        extract($this->context);
        require_once 'view/de'.$template.".tpl.html";
    }
    
    private function addContext($key, $value) {
        $this->context[$key] = $value;
    }
}