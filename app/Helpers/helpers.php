<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('debugMessage')) {
    function debugMessage($message)
    {
        dd($message);
    }
}

if (!function_exists('printMessage')) {
    function printMessage($message)
    {
        echo '<p style="color:green;">[PrintedMessage] => ' . $message . '</p>';
    }
}

if (!function_exists('defaultProfilePicture')) {
    function defaultProfilePicture()
    {
        return asset('images/default_profile.jpg'); // Update the path as needed
    }
}

if (!function_exists('blankSignature')) {
    function blankSignature()
    {
        return asset('images/blank-signature.jpg'); // Update the path as needed
    }
}

if (!function_exists('imageBinaryToSRC')) {
    function imageBinaryToSRC($binary_content)
    {
        return 'data:image/jpeg;base64,' . base64_encode($binary_content);
    }
}

if (!function_exists('generateUsername')) {
    function generateUsername($first_name, $last_name)
    {
        $suffix = '#' . str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return str_replace(' ', '', strtolower($first_name . '_' . $last_name . $suffix));
    }
}

if (!function_exists('generatePassword')) {
    function generatePassword()
    {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        $password = '';
        for ($i = 0; $i < 4; $i++) {
            $password .= $letters[mt_rand(0, strlen($letters) - 1)];
        }
        for ($i = 0; $i < 4; $i++) {
            $password .= $numbers[mt_rand(0, strlen($numbers) - 1)];
        }

        return $password;
    }
}

if (!function_exists('setActiveLink')) {
    function setActiveLink($page)
    {
        return Route::is($page) ? 'active' : '';
    }
}

if (!function_exists('wordsExistInArray')) {
    function wordsExistInArray($words, $array)
    {
        foreach ($array as $arr) {
            $found = true;
            foreach ($words as $word) {
                if (strpos($arr, $word) === false) {
                    $found = false;
                    break;
                }
            }
            if ($found) {
                return true; // Return true as soon as all words are found in the current array element
            }
        }
        return false; // Return false if no match is found
    }
}

if (!function_exists('wordsExistInString')) {
    function wordsExistInString($words, $string)
    {
        foreach ($words as $word) {
            if (strpos($string, $word) !== false) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('checkFileType')) {
    function checkFileType($binaryData)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $binaryData);
        finfo_close($finfo);
        
        return $mimeType;
    }
}

if (!function_exists('pdfBinaryToSRC')) {
    function pdfBinaryToSRC($binary_content)
    {
        return 'data:application/pdf;base64,' . base64_encode($binary_content);
    }
}
