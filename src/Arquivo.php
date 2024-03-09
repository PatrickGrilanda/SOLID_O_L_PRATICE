<?php

namespace App;

abstract class Arquivo
{
    private string $name;
    private string $path;
    private int $size;

    public function gerar():void {}
}
