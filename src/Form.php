<?php

namespace Phacil\Component\HTML;

use ICanBoogie\Inflector;

class Form extends HTML{
    
    private static $route = null;
    private static $params = null;
    
    public static function __callStatic($name, $arguments=[]) {
        $data = \Phacil\Kernel\Request::getData();
        if(empty($arguments)){$arguments[0]='';}
        if(isset($data[$arguments[0]])){
            $arguments[0] = $data[$arguments[0]];
        }
        $elementObject = new FormElement($name);
        call_user_func_array([$elementObject, 'content'], $arguments);
        return $elementObject;
    }
    
    public static function open($content = null){
               
        if(is_callable($content) && $content instanceof \Closure){
           $form = new FormElement('form', false, self::$route, self::$params);

           call_user_func_array([$form, 'content'], [$content]);
           return $form;
        }else{
            $form = new FormElement('form', true, self::$route, self::$params);
            call_user_func_array([$form, 'content'], ['']);
        }
        //pr($form); exit;
        
        return $form;
    }
    
    public static function close($tag = null){
        $form = new FormElement('form_close', true, self::$route, self::$params);
        $form->set('text', '');
                
        return $form;
    }
    
    public static function registry($par, $class){        
        self::$$par = $class;
    }
    
    private static function getInflactor(){
        return Inflector::get('pt');
    }
    
    private static function __input($elementObject, $campo){  
        $data = \Phacil\Kernel\Request::getData();
        $elementObject->value('');
        if(isset($data[$campo])){
            $elementObject->value($data[$campo]);
        }
        return $elementObject
                ->name($campo)
                ->id(self::getInflactor()->camelize($campo));
    }
    
    public static function input($campo){ 
        $elementObject = new FormElement('input');
        return self::__input($elementObject, $campo);        
    }
    
    public static function label($campo, $text = null){
        $text = !empty($text)?$text:self::getInflactor()->humanize($campo);
        $elementObject = HTML::label($text);
        return $elementObject->for(self::getInflactor()->camelize($campo));
    }
    
    public static function select($campo = null, $options = null, $empty=false){        
        $data = \Phacil\Kernel\Request::getData();
        $selected = null;
        if(isset($data[$campo])){
            $selected = $data[$campo];
        }
        $elementObject = parent::select($options, $selected, $empty);
        return $elementObject
                ->name($campo)
                ->id(self::getInflactor()->camelize($campo));
    }
    
    public static function textarea($campo){
        $elementObject = new FormElement('textarea');
        $data = \Phacil\Kernel\Request::getData();
        $elementObject->text('');
        if(isset($data[$campo])){
            $elementObject->text($data[$campo]);
        }
        return $elementObject
                ->name($campo)
                ->id(self::getInflactor()->camelize($campo));
    }
    
    public static function radio($campo = null, $list = null, $checked = null) {
        $data = \Phacil\Kernel\Request::getData();
        $selected = null;
        if(isset($data[$campo])){
            $checked = $data[$campo];
        }
        $elementObject = parent::radio($list, $checked);
        return $elementObject
                ->name($campo)
                ->id(self::getInflactor()->camelize($campo));
    }
    
    public static function checkbox($campo = null, $list = null, $checked = null) {
        $data = \Phacil\Kernel\Request::getData();
        $selected = null;
        if(isset($data[$campo])){
            $checked = array_keys($data[$campo]);
        }
        $elementObject = parent::checkbox($list, $checked);
        return $elementObject
                ->name($campo)
                ->id(self::getInflactor()->camelize($campo));
    }
    
}


