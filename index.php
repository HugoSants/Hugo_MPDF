<?php
require_once "./vendor/autoload.php";


$produtos = [
    [
    'nome' => 'Caderno Universitário',
    'categoria' => 'Papelaria',
    'preco' => 19.90,
    'descricao' => 'Caderno universitário com 200 folhas pautadas.'
    ],
    [
    'nome' => 'Teclado',
    'categoria' => 'eletônico',
    'preco' => 200.00,
    'descricao' => 'Teclado mecanico RGB swicth blue'
    ],
    [
    'nome' => 'Mouse',
    'categoria' => 'eletrônico',
    'preco' => 60.00,
    'descricao' => 'Mouse gamer RGB '
    ],
    [
    'nome' => 'Monitor',
    'categoria' => 'Eletrônicos',
    'preco' => 2400.00,
    'descricao' => 'Monitor Led Hd 19 Widescreen 60hz Com Entrada Hdmi E Vga Cor Preto 110V/220V.'
    ],
    [
    'nome' => 'Fone Hadset',
    'categoria' => 'Eletrônicos',
    'preco' => 160.90,
    'descricao' => 'Headset Gamer Havit, Drivers 53mm, Microfone Plugável.'
    ]
    ];

    foreach ($produtos as $produto) {
        echo $produto['nome']."<br/>";
        echo $produto['categoria']."<br/>";
        echo $produto['preco']."<br/>";
        echo $produto['descricao']."<br/>";
        }



?>