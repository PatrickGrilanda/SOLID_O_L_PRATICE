<?php

declare(strict_types=1);

namespace App;
use App\Interface\Readable;
use App\Interface\Processable;

class ArquivoPDF extends Arquivo implements Readable, Processable
{
    public function __construct(
        private string $name,
        private string $path,
        private int $size 
    ){}

    public function gerar(): void {
        echo "Gerando Arquivo PDF" . PHP_EOL;
    }

    public function ler(): void {
        echo "Lendo arquivo PDF" . PHP_EOL;
    }

    public function processar() {
        $this->gerar();
        $this->ler();
    }
}
