<?php

/**
 * 
 * @return \Phacil\HTML\HTML
 */
function html()
{
    if(!is_null(\Phacil\HTML\HTML::getInstance())){
        return \Phacil\HTML\HTML::getInstance();
    }
    return new \Phacil\HTML\HTML();
}

/**
 * 
 * @return \Phacil\HTML\Form
 */
function form()
{
    if(!is_null(\Phacil\HTML\Form::getInstance())){
        return \Phacil\HTML\Form::getInstance();
    }
    return new \Phacil\HTML\Form();
}