<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlgorithmController extends Controller
{
    // Question 1:

    // Write a function called getMaxSum that takes an array of integers as input and returns the maximum sum of any contiguous subarray of the given array. If the array is empty or contains only negative integers, the function should return 0.
    public function getMaxSum($arr)
    {
        $arr = explode(',', $arr);

        $negativeIntegers = true;

        foreach ($arr as $num) {
            if ($num >= 0) {
                $negativeIntegers = false;
                break;
            }
        }

        if (count($arr) === 0 ||  $negativeIntegers) {
            return 0;
        }

        $maxSum = $arr[0];
        $currentSum = $arr[0];

        $length = count($arr);

        for ($i = 1; $i < $length; $i++) {
            $currentSum = max($arr[$i], $currentSum + $arr[$i]);
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum;
    }

    // Question 2:

    // Write a function called uniqueChars that takes a string as input and returns a new string containing only the unique characters in the input string, in the order that they first appear. If the input string is empty or contains only whitespaces, the function should return an empty string.

    // For example, if the input string is "hello world", the function should return "helo wrd".

    public function uniqueChars($str)
    {
        if (empty($str) || ctype_space($str)) {
            return '';
        }

        $unique_chars = [];

        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (!in_array($char, $unique_chars)) {
                $unique_chars[] = $char;
            }
        }

        return '"' . implode('', $unique_chars) . '"';
    }
}
