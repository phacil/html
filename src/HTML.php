<?php

/**
 * HTML Class
 *
 * @author Alisson Nascimento <alisson.sa.nascimento@gmail.com>
 * @date 2015-11-27
 * 
 */

namespace Phacil\HTML;

class HTML {

    use \Phacil\Common\Traits\InstanceTrait;

    public function __construct()
    {
        self::$instance = $this;
        return $this;
    }

    private static function _htmlElement($name, $arguments = [0 => ''])
    {
        $elementObject = new HTMLElement($name);
        call_user_func_array([$elementObject, 'content'], $arguments);
        return $elementObject;
    }

    public static function open($tag)
    {
        $elementObject = new HTMLElement($tag, true);
        $elementObject->set('text', '');
        return $elementObject;
    }

    public static function close($tag)
    {
        return '</' . self::escape($tag) . '>';
    }

    public static function escape($txt)
    {
        return htmlspecialchars($txt);
    }

    /*
      Tags Function
     */

    public static function a($content)
    {
        return self::_htmlElement('a', [$content]);
    }
    public static function abbr($content)
    {
        return self::_htmlElement('abbr', [$content]);
    }
    public static function address($content)
    {
        return self::_htmlElement('address', [$content]);
    }
    public static function area()
    {
        return self::_htmlElement('area');
    }
    public static function article($content)
    {
        return self::_htmlElement('article', [$content]);
    }
    public static function aside($content)
    {
        return self::_htmlElement('aside', [$content]);
    }
    public static function audio($content)
    {
        return self::_htmlElement('audio', [$content]);
    }

    public static function b($content)
    {
        return self::_htmlElement('b', [$content]);
    }
    public static function base()
    {
        return self::_htmlElement('base');
    }
    public static function bdi($content)
    {
        return self::_htmlElement('bdi', [$content]);
    }
    public static function bdo($content)
    {
        return self::_htmlElement('bdo', [$content]);
    }
    public static function blockquote($content)
    {
        return self::_htmlElement('blockquote', [$content]);
    }
    public static function body($content)
    {
        return self::_htmlElement('body', [$content]);
    }
    public static function br()
    {
        return self::_htmlElement('br');
    }
    public static function button($content)
    {
        return self::_htmlElement('button', [$content]);
    }
    
    public static function canvas($content)
    {
        return self::_htmlElement('canvas', [$content]);
    }
    public static function caption($content)
    {
        return self::_htmlElement('caption', [$content]);
    }
    public static function cite($content)
    {
        return self::_htmlElement('cite', [$content]);
    }
    public static function code($content)
    {
        return self::_htmlElement('code', [$content]);
    }
    public static function col()
    {
        return self::_htmlElement('col');
    }
    public static function colgroup($content)
    {
        return self::_htmlElement('colgroup', [$content]);
    }
    public static function command($content)
    {
        return self::_htmlElement('command', [$content]);
    }

    public static function data($content)
    {
        return self::_htmlElement('data', [$content]);
    }
    public static function datalist($content)
    {
        return self::_htmlElement('datalist', [$content]);
    }
    public static function dd($content)
    {
        return self::_htmlElement('dd', [$content]);
    }
    public static function del($content)
    {
        return self::_htmlElement('del', [$content]);
    }
    public static function details($content)
    {
        return self::_htmlElement('details', [$content]);
    }
    public static function dialog($content)
    {
        return self::_htmlElement('dialog', [$content]);
    }
    public static function dfn($content)
    {
        return self::_htmlElement('dfn', [$content]);
    }
    public static function div($content)
    {
        return self::_htmlElement('div', [$content]);
    }
    public static function dl($content)
    {
        return self::_htmlElement('dl', [$content]);
    }
    public static function dt($content)
    {
        return self::_htmlElement('dt', [$content]);
    }

    public static function em($content)
    {
        return self::_htmlElement('em', [$content]);
    }
    public static function embed()
    {
        return self::_htmlElement('embed');
    }

    public static function fieldset($content)
    {
        return self::_htmlElement('fieldset', [$content]);
    }
     public static function figcaption($content)
    {
        return self::_htmlElement('figcaption', [$content]);
    }
    public static function figure($content)
    {
        return self::_htmlElement('figure', [$content]);
    }
    public static function footer($content)
    {
        return self::_htmlElement('footer', [$content]);
    }
    public static function form($content)
    {
        return self::_htmlElement('form', [$content]);
    }

    public static function h1($content)
    {
        return self::_htmlElement('h1', [$content]);
    }
    public static function h2($content)
    {
        return self::_htmlElement('h2', [$content]);
    }
    public static function h3($content)
    {
        return self::_htmlElement('h3', [$content]);
    }
    public static function h4($content)
    {
        return self::_htmlElement('h4', [$content]);
    }
    public static function h5($content)
    {
        return self::_htmlElement('h5', [$content]);
    }
    public static function h6($content)
    {
        return self::_htmlElement('h6', [$content]);
    }
    public static function head($content)
    {
        return self::_htmlElement('head', [$content]);
    }
    public static function header($content)
    {
        return self::_htmlElement('header', [$content]);
    }
    public static function hr()
    {
        return self::_htmlElement('hr');
    }
    public static function html($content)
    {
        return self::_htmlElement('html', [$content]);
    }
    
    public static function i($content = '')
    {
        return self::_htmlElement('i', [$content]);
    }
    public static function iframe()
    {
        return self::_htmlElement('iframe');
    }
    public static function img()
    {
        return self::_htmlElement('input');
    }
    public static function input($campo)
    {
        return self::_htmlElement('input');
    }
    public static function ins($content)
    {
        return self::_htmlElement('ins', [$content]);
    }

    public static function kbd($content)
    {
        return self::_htmlElement('kbd', [$content]);
    }

    public static function label($content)
    {
        return self::_htmlElement('label', [$content]);
    }
    public static function legend($content)
    {
        return self::_htmlElement('legend', [$content]);
    }
    public static function li($content)
    {
        return self::_htmlElement('li', [$content]);
    }
    public static function link()
    {
        return self::_htmlElement('link');
    }

    public static function map($content = '')
    {
        return self::_htmlElement('map', [$content]);
    }
    public static function mark($content)
    {
        return self::_htmlElement('mark', [$content]);
    }
    public static function menu($content)
    {
        return self::_htmlElement('menu', [$content]);
    }
    public static function meta()
    {
        return self::_htmlElement('meta');
    }
    
    public static function nav($content)
    {
        return self::_htmlElement('nav', [$content]);
    }
    public static function noscript($content)
    {
        return self::_htmlElement('noscript', [$content]);
    }

    public static function object()
    {
        return self::_htmlElement('object');
    }
    public static function ol($content)
    {
        return self::_htmlElement('ol', [$content]);
    }
    public static function optgroup($content)
    {
        return self::_htmlElement('optgroup', [$content]);
    }
    public static function option($content)
    {
        return self::_htmlElement('option', [$content]);
    }
    public static function output()
    {
        return self::_htmlElement('output');
    }

    public static function p($content)
    {
        return self::_htmlElement('p', [$content]);
    }
    public static function param($content)
    {
        return self::_htmlElement('param', [$content]);
    }
    public static function pre($content)
    {
        return self::_htmlElement('pre', [$content]);
    }
    public static function progress()
    {
        return self::_htmlElement('progress');
    }
    
    public static function q($content)
    {
        return self::_htmlElement('q', [$content]);
    }

    public static function s($content)
    {
        return self::_htmlElement('s', [$content]);
    }
    public static function samp($content)
    {
        return self::_htmlElement('samp', [$content]);
    }
    public static function script($content)
    {
        return self::_htmlElement('script', [$content]);
    }
    public static function section($content)
    {
        return self::_htmlElement('section', [$content]);
    }
    public static function select($content)
    {
        return self::_htmlElement('select', [$content]);
    }
    public static function small($content)
    {
        return self::_htmlElement('small', [$content]);
    }
    public static function source()
    {
        return self::_htmlElement('source');
    }
    public static function span($content)
    {
        return self::_htmlElement('span', [$content]);
    }
    public static function strong($content)
    {
        return self::_htmlElement('strong', [$content]);
    }
    public static function style($styles = [], $style = "<style>\n", $close = true)
    {
        foreach ($styles as $tag => $attrs) {
            $style .= $tag . '{' . "\n";
            foreach ($attrs as $attr => $value) {
                if (!is_array($value)) {
                    $style .= "\t" . $attr . ':' . $value . ";\n";
                } else {
                    $v = array($tag . $attr => $value);
                    // print_r( $v);
                    $style .= '}' . "\n";
                    $style .= self::style($v, null, false);
                }
            }
            if ($close) {
                $style .= '}' . "\n";
            }
        }
        if ($close) {
            $style .= '</style>' . "\n";
        }
        return $style;
    }
    public static function sub($content)
    {
        return self::_htmlElement('sub', [$content]);
    }
    public static function summary($content)
    {
        return self::_htmlElement('summary', [$content]);
    }
    public static function sup($content)
    {
        return self::_htmlElement('sup', [$content]);
    }

    public static function table($content)
    {
        return self::_htmlElement('table', [$content]);
    }
    public static function tbody($content)
    {
        return self::_htmlElement('tbody', [$content]);
    }
    public static function td($content)
    {
        return self::_htmlElement('td', [$content]);
    }
    public static function textarea($content)
    {
        return self::_htmlElement('textarea', [$content]);
    }
    public static function tfoot($content)
    {
        return self::_htmlElement('tfoot', [$content]);
    }
    public static function thead($content)
    {
        return self::_htmlElement('thead', [$content]);
    }
    public static function th($content)
    {
        return self::_htmlElement('th', [$content]);
    }
    public static function time($content)
    {
        return self::_htmlElement('time', [$content]);
    }
    public static function title($content)
    {
        return self::_htmlElement('title', [$content]);
    }
    public static function tr($content)
    {
        return self::_htmlElement('tr', [$content]);
    }
    public static function track()
    {
        return self::_htmlElement('track');
    }
    
    public static function ul($content)
    {
        return self::_htmlElement('ul', [$content]);
    }
    
    public static function video($content)
    {
        return self::_htmlElement('video', [$content]);
    }
    
    public static function wbr()
    {
        return self::_htmlElement('wbr');
    }
//    public static function select($opcoes = null, $selected = null, $empty = false)
//    {
//
//        $selected = is_array($selected) ? $selected : [$selected];
//
//        $elementObject = new HTMLElement('select');
//        $elementObject->set('text', '');
//        if (!is_bool($empty)) {
//            $option = new HTMLElement('option');
//            $stringOption = $option->value('')->set('text', $empty);
//            $elementObject->inject($stringOption);
//        } else if ($empty) {
//            $option = new HTMLElement('option');
//            $stringOption = $option->value('')->set('text', '');
//            $elementObject->inject($stringOption);
//        }
//
//        foreach ($opcoes as $value => $text) {
//            if (is_array($text)) {
//                $optgroup = new HTMLElement('optgroup');
//                $stringOptionGroup = $optgroup->label($value)->text('');
//
//                foreach ($text as $key_value => $text_value) {
//
//                    if (!empty($selected) && (in_array($key_value, $selected))) {
//                        $option = new HTMLElement('option');
//                        $stringOption = $option->value($key_value)->set('text', $text_value)->set('selected', 'selected');
//                        $stringOptionGroup->inject($stringOption);
//                    } else {
//                        $option = new HTMLElement('option');
//                        $stringOption = $option->value($key_value)->set('text', $text_value);
//                        $stringOptionGroup->inject($stringOption);
//                    }
//                }
//                $elementObject->inject($stringOptionGroup);
//            } else {
//                if (!empty($selected) && (in_array($value, $selected))) {
//                    $option = new HTMLElement('option');
//                    $stringOption = $option->value($value)->set('text', $text)->set('selected', 'selected');
//                    $elementObject->inject($stringOption);
//                } else {
//                    $option = new HTMLElement('option');
//                    $stringOption = $option->value($value)->set('text', $text);
//                    $elementObject->inject($stringOption);
//                }
//            }
//        }
//
//        return $elementObject;
//    }
//
//    public static function radio($list = null, $checked = null, $aux = null)
//    {
//        $elementObject = new HTMLElement('radio');
//        $elementObject->list = $list;
//        $elementObject->listChecked = is_array($checked) ? $checked : [$checked];
//        return $elementObject;
//    }
//
//    public static function checkbox($list = null, $checked = null, $aux = null)
//    {
//        $elementObject = new HTMLElement('checkbox');
//        $elementObject->list = $list;
//        $elementObject->listChecked = is_array($checked) ? $checked : [$checked];
//        return $elementObject;
//    }



    public static function buffer($callback)
    {
        if (!extension_loaded('zlib')) {
            if (!ob_start('ob_gzhandler')) {
                ob_start();
            }
        } else {
            ob_start();
        }
        call_user_func($callback);
        $file_content = ob_get_contents();
        ob_end_clean();
        return $file_content;
    }

    /* Chamar via método mágico */

    public static function __callStatic($name, $arguments = [0 => ''])
    {
        return self::_htmlElement($name, $arguments);
    }

    public function __call($name, $arguments = [0 => ''])
    {
        return self::_htmlElement($name, $arguments);
    }

}
