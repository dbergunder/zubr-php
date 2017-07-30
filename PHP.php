<?php
namespace PHP;

function class_exists($class_name, $autoload = false) {
    return class_exists($class_name, $autoload);
}

function extension_loaded($name) {
    return extension_loaded($name);
}

function function_exists($function_name) {
    return function_exists($function_name);
}

function get_defined_functions($exclude_disabled = false) {
    return get_defined_functions($exclude_disabled);
}

function method_exists($method_name, $object) {
    return method_exists($object, $method_name);
}

function parse_url($url, $component=-1) {
    return parse_url($url, $component);
}

function str_i_str($needle, $haystack, $before_needle = false) {
    return stristr($haystack, $needle, $before_needle);
}

function str_str($needle, $haystack, $before_needle = false) {
    return strstr($haystack, $needle, $before_needle);
}

function str_i_pos($needle, $haystack, $offset = 0) {
    return strpos($haystack, $needle, $offset);
}

function str_pos($needle, $haystack, $offset = 0) {
    return strpos($haystack, $needle, $offset);
}

function url_encode($str) {
    return urlencode($str);
}
