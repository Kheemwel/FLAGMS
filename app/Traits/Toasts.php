<?php
namespace App\Traits;

trait Toasts
{
    public function showToast($type, $message)
    {
        $this->dispatch('showToast', $type, $message);
    }
}
