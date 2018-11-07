<?php

class controller {
    
    private $context = array();
    
    public function run($action) {
        $this->$action();
        $this->generatePage($action);
    }
    
    public function home() {
        $this->addContext("template", "home");
    }
    
    public function contact() {
        $this->addContext("template", "contact");
    }
    
    private function generatePage($template){
        extract($this->context);
        require_once 'view/'.$template.".tpl.html";
    }
    
    private function addContext($key, $value) {
        $this->context[$key] = $value;
    }
}