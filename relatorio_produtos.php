<?php
$produtos=[
    [
        'nome'=>'Leite',
        'categoria'=>'laticinios',
        'preco'=>'15.90',
        'descricao'=>'leite longa vida integral semi-desnatado'
    ],
    [
        'nome'=>'Macarrão',
        'categoria'=>'massa',
        'preco'=>'20.90',
        'descricao'=>'macarrão dona benta integral'
    ],
    [
        'nome'=>'carne moida',
        'categoria'=>'frios',
        'preco'=>'30.70',
        'descricao'=>'carne moida do patinho'
    ],
    [
        'nome'=>'cebola',
        'categoria'=>'legumes',
        'preco'=>'5.90',
        'descricao'=>'cebola pequena'
    ],
    [
        'nome'=>'detergente',
        'categoria'=>'limpeza',
        'preco'=>'13.90',
        'descricao'=>'detergente ipê'
    ]
];

require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();


$html = '
<h1>Relatório de Produtos</h1>
<p>Data de geração: 31/10/24 </p>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';

foreach ($produtos as $produto) {
    echo $produto['nome']."<br/>";
    echo $produto['categoria']."<br/>";
    echo $produto['preco']."<br/>";
    echo $produto['descricao']."<br/>";

}


$mpdf->WriteHTML($html);
$mpdf->Output();

