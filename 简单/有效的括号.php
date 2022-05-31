<?php

class Solution
{
    function isValid($string)
    {
        $length = strlen($string);
        if ($length == 0) {
            return true;
        }

        if ($length % 2 != 0) {
            return false;
        }

        $checkArray = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];
        $stack = [];

        /**
         * array_push 压入数组末尾
         * array_pop 从数组末尾弹出一个
         * array_unshift 从数组头部压入
         * array_shift 从数组头部弹出一个
         */
        for ($i = 0; $i < $length; $i++) {
            if (in_array($string[$i], ['(', '[', '{'])) {
                array_push($stack, $string[$i]);
            } else {
                if ($string[$i] == $checkArray[end($stack)]) {
                    array_pop($stack);
                } else {
                    return false;
                }
            }
        }
        return empty($stack) ? true : false;
    }
}

$string = '({}[)]';
$fd = new Solution();
$ret = $fd->isValid($string);
var_dump($ret);