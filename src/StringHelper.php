<?php
namespace me\helpers;
/**
 * 
 */
class StringHelper extends Helper {
    public static function name2id($name) {

        return;
    }
    public static function id2name($id) {
        $words = explode('-', $id);
        $names = [];
        foreach ($words as $word) {
            $names[] = ucfirst($word);
        }
        return implode('', $names);
    }
}