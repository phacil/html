<?php

namespace Phacil\HTML;

class FormElement extends HTMLElement{
    
    private $route = null;
    private $params = null;
    
    public function __construct($name, $self_closer = false, $route = null, $params = null) {
        
        $this->route = $route;
        $this->params = $params;
        
        return parent::__construct($name, $self_closer);
    }

    private function _form() {
        
        $_fhead = null;
       
//        if(!empty($this->attributes['text']) || !is_null($this->attributes['text'])){
//            $fieldset = new parent('fieldset', true);
//            $legend = new parent('legend');
//            $legend->setText($this->attributes['text']);
//            $this->attributes['text'] = '';
//            $_fhead .= "\n\t". $fieldset->output() ."\n\t". $legend->output();            
//        }
        if(!empty($this->route) && !empty($this->params)){
            $route = $this->route;
            $params = $this->params;
            
            $this->attributes['action'] = isset($this->attributes['action'])?$this->attributes['action']:$route::url($params::info('url'));
        }
        $this->attributes['method'] = isset($this->attributes['method'])?$this->attributes['method']:'post';
//        $_parent_to_string = parent::__toString();

//        $hidden_method = HTML::input()->type('hidden')->name('_method')->value($this->attributes['method'])->output();
//        return $_parent_to_string . "\n" . $hidden_method . $_fhead . "\n";
        //return $this;
    }
    
    private function _form_close($param = []){
        $end = null;
        if(!isset($this->attributes['fieldset']) || $this->attributes['fieldset'] !== false){
            $end .= "\n\t</fieldset>";
        }
        return $end .= "\n</form>\n";
    }
    
    public function fieldset($op = true){
        
    }
    
    public function __toString() {        
        if(method_exists($this, "_$this->type")){
            call_user_func_array([$this, "_$this->type"],[]);
        }
        return parent::__toString() . "\n";        
    }
    
}
