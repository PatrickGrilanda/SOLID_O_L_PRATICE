<?php

declare(strict_types=1);

namespace App;
use App\Interface\Readable;
use App\Interface\Writable;
use App\Interface\Processable;

class ArquivoTXT extends Arquivo implements Readable, Writable, Processable
{
   public function __construct(
    private string $name,
    private string $path,
    private int $size 
   ) {}
    
    public function gerar(): void {
        echo "Gerando Arquivo TXT" . PHP_EOL;
    }   

    public function ler(): void {
        echo "Lendo arquivo TXT" . PHP_EOL;
    }

    public function escrever(): void {
        echo "Escrevendo no arquivo TXT" . PHP_EOL;
    }

    public function processar() {
        $this->gerar();
        $this->escrever();
        $this->ler();
    }
}
