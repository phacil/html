<?php
/**
 * @property HTMLElement $html
 */
include '../vendor/autoload.php';
use Phacil\HTML\HTML;
use Phacil\HTML\HTMLElement;

/* You can echo this code */
echo html()->h1('This is a title');
/* or call output() function */
HTML::h2('This is a second title')->output();
/* and use chain mode to set attributes */
echo HTML::a('A link to google.com')->href('http:://google.com.br')->class('link');

