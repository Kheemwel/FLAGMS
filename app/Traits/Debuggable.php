<?php
namespace App\Traits;

trait Debuggable
{
    public function debugMessage($message)
    {
        dd(['debugMessage' => $message]);
    }
}
