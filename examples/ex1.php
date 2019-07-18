<?php
/**
 * @property HTMLElement $html
 */
include '../vendor/autoload.php';
use Phacil\HTML\HTMLElement;

/* You can echo this code */
echo phacil\html\h1('This is a title');
/* or call output() function */
echo phacil\html\tag('h2', 'This is a second title')->output();
/* and use chain mode to set attributes */
echo phacil\html\a('A link to google.com')->href('http:://google.com.br')->class('link');

