<?php 

require __DIR__."/vendor/autoload.php";

use App\GerenciadorArquivos;
use App\ArquivoPDF;
use App\ArquivoTXT;
use App\ListaArquivos;

$listaArquivos = new ListaArquivos();
$listaArquivos->addFile(new ArquivoPDF("joana_dark_ebook.pdf", "/joana_dark_Ebook.pdf", 2048));
$listaArquivos->addFile(new ArquivoTXT("pele_history.txt", "/pele_history.txt", 1024));

//debuga vendo se os arquivos entraram
$listaArquivos->debug($listaArquivos->getArquivos());

$gerenciadorDeArquivos = new GerenciadorArquivos();

$gerenciadorDeArquivos->processar($listaArquivos);