<?php

class controller {
    
    private $context = array();
    
    public function run($action) {
        $this->$action();
        $this->generatePage($action);
    }
    
    public function home_de () {
        $this->addContext("template", "home_de");
    }
    
    public function kontakt_de () {
        $this->addContext("template", "kontakt_de");
    }
    
    public function dieTischlerei_de () {
        $this->addContext("template", "die_Tischlerei_de");
    }
    
    public function planung3D_de () {
        $this->addContext("template", "3d_planung_de");
    }
    
    public function referenzen_de () {
        $this->addContext("template", "referenzen_de");    
    }
    
    private function generatePage($template){
        extract($this->context);
        require_once 'view/de/'.$template.".tpl.html";
    }
    
    private function addContext($key, $value) {
        $this->context[$key] = $value;
    }
}