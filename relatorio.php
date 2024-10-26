<?php
//faz a requisicao com o vendor
require_once 'vendor/autoload.php';
//chama a classe Mpdf
$mpdf= new \Mpdf\Mpdf();
//escreve direto em HTML WriteHTML('<h1>Minha primeira pagina HTML em PDF</h1>');
$mpdf->
//faz o envio
$mpdf->Output();