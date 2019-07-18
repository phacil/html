<?php

namespace phacil\html {

    function tag($name, $arguments = [0 => ''])
    {
        $elementObject = new \Phacil\HTML\HTMLElement($name);
        call_user_func_array([$elementObject, 'content'], [$arguments]);
        return $elementObject;
    }

    function open($tag)
    {
        $elementObject = new \Phacil\HTML\HTMLElement($tag, true);
        $elementObject->set('text', '');
        return $elementObject;
    }

    function close($tag)
    {
        return '</' . escape($tag) . '>';
    }

    function escape($txt)
    {
        return htmlspecialchars($txt);
    }

    /*
      Tags Function
     */

    function a($content = null)
    {
        return tag('a', $content);
    }
    function abbr($content = null)
    {
        return tag('abbr', $content);
    }
    function address($content = null)
    {
        return tag('address', $content);
    }
    function area()
    {
        return tag('area');
    }
    function article($content = null)
    {
        return tag('article', $content);
    }
    function aside($content = null)
    {
        return tag('aside', $content);
    }
    function audio($content = null)
    {
        return tag('audio', $content);
    }

    function b($content = null)
    {
        return tag('b', $content);
    }
    function base()
    {
        return tag('base');
    }
    function bdi($content = null)
    {
        return tag('bdi', $content);
    }
    function bdo($content = null)
    {
        return tag('bdo', $content);
    }
    function blockquote($content = null)
    {
        return tag('blockquote', $content);
    }
    function body($content = null)
    {
        return tag('body', $content);
    }
    function br()
    {
        return tag('br');
    }
    function button($content = null)
    {
        return tag('button', $content);
    }
    
    function canvas($content = null)
    {
        return tag('canvas', $content);
    }
    function caption($content = null)
    {
        return tag('caption', $content);
    }
    function cite($content = null)
    {
        return tag('cite', $content);
    }
    function code($content = null)
    {
        return tag('code', $content);
    }
    function col()
    {
        return tag('col');
    }
    function colgroup($content = null)
    {
        return tag('colgroup', $content);
    }
    function command($content = null)
    {
        return tag('command', $content);
    }

    function data($content = null)
    {
        return tag('data', $content);
    }
    function datalist($content = null)
    {
        return tag('datalist', $content);
    }
    function dd($content = null)
    {
        return tag('dd', $content);
    }
    function del($content = null)
    {
        return tag('del', $content);
    }
    function details($content = null)
    {
        return tag('details', $content);
    }
    function dialog($content = null)
    {
        return tag('dialog', $content);
    }
    function dfn($content = null)
    {
        return tag('dfn', $content);
    }
    function div($content = null)
    {
        return tag('div', $content);
    }
    function dl($content = null)
    {
        return tag('dl', $content);
    }
    function dt($content = null)
    {
        return tag('dt', $content);
    }

    function em($content = null)
    {
        return tag('em', $content);
    }
    function embed()
    {
        return tag('embed');
    }

    function fieldset($content = null)
    {
        return tag('fieldset', $content);
    }
     function figcaption($content = null)
    {
        return tag('figcaption', $content);
    }
    function figure($content = null)
    {
        return tag('figure', $content);
    }
    function footer($content = null)
    {
        return tag('footer', $content);
    }
    function form($content = null)
    {
        return tag('form', $content);
    }

    function h1($content = null)
    {
        return tag('h1', $content);
    }
    function h2($content = null)
    {
        return tag('h2', $content);
    }
    function h3($content = null)
    {
        return tag('h3', $content);
    }
    function h4($content = null)
    {
        return tag('h4', $content);
    }
    function h5($content = null)
    {
        return tag('h5', $content);
    }
    function h6($content = null)
    {
        return tag('h6', $content);
    }
    function head($content = null)
    {
        return tag('head', $content);
    }
    function header($content = null)
    {
        return tag('header', $content);
    }
    function hr()
    {
        return tag('hr');
    }
    function html($content = null)
    {
        return tag('html', $content);
    }
    
    function i($content = '')
    {
        return tag('i', $content);
    }
    function iframe()
    {
        return tag('iframe');
    }
    function img()
    {
        return tag('img');
    }
    function input($campo)
    {
        return tag('input');
    }
    function ins($content = null)
    {
        return tag('ins', $content);
    }

    function kbd($content = null)
    {
        return tag('kbd', $content);
    }

    function label($content = null)
    {
        return tag('label', $content);
    }
    function legend($content = null)
    {
        return tag('legend', $content);
    }
    function li($content = null)
    {
        return tag('li', $content);
    }
    function link()
    {
        return tag('link');
    }

    function map($content = '')
    {
        return tag('map', $content);
    }
    function mark($content = null)
    {
        return tag('mark', $content);
    }
    function menu($content = null)
    {
        return tag('menu', $content);
    }
    function meta()
    {
        return tag('meta');
    }
    
    function nav($content = null)
    {
        return tag('nav', $content);
    }
    function noscript($content = null)
    {
        return tag('noscript', $content);
    }

    function object()
    {
        return tag('object');
    }
    function ol($content = null)
    {
        return tag('ol', $content);
    }
    function optgroup($content = null)
    {
        return tag('optgroup', $content);
    }
    function option($content = null)
    {
        return tag('option', $content);
    }
    function output()
    {
        return tag('output');
    }

    function p($content = null)
    {
        return tag('p', $content);
    }
    function param($content = null)
    {
        return tag('param', $content);
    }
    function pre($content = null)
    {
        return tag('pre', $content);
    }
    function progress()
    {
        return tag('progress');
    }
    
    function q($content = null)
    {
        return tag('q', $content);
    }

    function s($content = null)
    {
        return tag('s', $content);
    }
    function samp($content = null)
    {
        return tag('samp', $content);
    }
    function script($content = null)
    {
        return tag('script', $content);
    }
    function section($content = null)
    {
        return tag('section', $content);
    }
    function select($content = null)
    {
        return tag('select', $content);
    }
    function small($content = null)
    {
        return tag('small', $content);
    }
    function source()
    {
        return tag('source');
    }
    function span($content = null)
    {
        return tag('span', $content);
    }
    function strong($content = null)
    {
        return tag('strong', $content);
    }
    function style($styles = [], $style = "<style>\n", $close = true)
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
                    $style .= phacil\html\style($v, null, false);
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
    function sub($content = null)
    {
        return tag('sub', $content);
    }
    function summary($content = null)
    {
        return tag('summary', $content);
    }
    function sup($content = null)
    {
        return tag('sup', $content);
    }

    function table($content = null)
    {
        return tag('table', $content);
    }
    function tbody($content = null)
    {
        return tag('tbody', $content);
    }
    function td($content = null)
    {
        return tag('td', $content);
    }
    function textarea($content = null)
    {
        return tag('textarea', $content);
    }
    function tfoot($content = null)
    {
        return tag('tfoot', $content);
    }
    function thead($content = null)
    {
        return tag('thead', $content);
    }
    function th($content = null)
    {
        return tag('th', $content);
    }
    function time($content = null)
    {
        return tag('time', $content);
    }
    function title($content = null)
    {
        return tag('title', $content);
    }
    function tr($content = null)
    {
        return tag('tr', $content);
    }
    function track()
    {
        return tag('track');
    }
    
    function ul($content = null)
    {
        return tag('ul', $content);
    }
    
    function video($content = null)
    {
        return tag('video', $content);
    }
    
    function wbr()
    {
        return tag('wbr');
    }
//    function select($opcoes = null, $selected = null, $empty = false)
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
//    function radio($list = null, $checked = null, $aux = null)
//    {
//        $elementObject = new HTMLElement('radio');
//        $elementObject->list = $list;
//        $elementObject->listChecked = is_array($checked) ? $checked : [$checked];
//        return $elementObject;
//    }
//
//    function checkbox($list = null, $checked = null, $aux = null)
//    {
//        $elementObject = new HTMLElement('checkbox');
//        $elementObject->list = $list;
//        $elementObject->listChecked = is_array($checked) ? $checked : [$checked];
//        return $elementObject;
//    }



    function buffer($callback)
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
}
