<?php

declare(strict_types=1);

namespace App;
use SplDoublyLinkedList;
use App\Arquivo;

class ListaArquivos
{
    use Traits\Debuggable;

    private SplDoublyLinkedList $arquivos;

    public function __construct(){
        $this->arquivos = new SplDoublyLinkedList();
    }

   public function addFile(Arquivo $arquivo) {
        $this->arquivos->push($arquivo);
   }

   public function removeFile(Arquivo $arquivo) {
        $this->arquivos->pop();
   }

   public function getArquivos():SplDoublyLinkedList {
        return $this->arquivos;
   }
}
