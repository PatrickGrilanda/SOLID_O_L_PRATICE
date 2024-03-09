<?php

declare(strict_types=1);

namespace App;
use App\Interface\Processable;

class GerenciadorArquivos
{
    public function processar(ListaArquivos $lista): void{
        echo "Processamento Iniciado ....." . PHP_EOL;

        foreach($lista->getArquivos() as $arquivo) {
            if($arquivo instanceof Processable) {
                $arquivo->processar();
            }
        }

        echo "Fim do Processamento ....." . PHP_EOL;
    }
}
