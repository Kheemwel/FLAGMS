<?php

if (!function_exists('debugMessage')) {
    function debugMessage($message)
    {
        dd(['helperMessage' => $message]);
    }
}

if (!function_exists('printMessage')) {
    function printMessage($message)
    {
        echo '<p style="color:green;">[PrintedMessage] => ' . $message . '</p>';
    }
}

if (!function_exists('defaultProfilePicture')) {
    function defaultProfilePicture() {
        return asset('images/default_profile.png'); // Update the path as needed
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
