<?php

namespace App\Traits;

trait Debuggable
{
    public function debug($property): void {
        echo  "<pre>"; 
        print_r($property);
        echo "</pre>";
    }
}
