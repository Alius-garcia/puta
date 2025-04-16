<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ropa', function () {
    $stock= [[
        "nombre" =>'vestidos',
        "cantidad"=>20
    ],
    [
        "nombre"=>'zapatos',
        "cantidad"=>50
    ],
    [
        "nombre"=>'tops',
        "cantidad"=>24
    ],
    [
        "nombre"=>'pantalones',
        "cantidad"=>70
    ]

];
    return view('ropa/listado_de_stock')->with('ropita', $stock);
    // return  view ('ropa/listado_de_stock')->with("ropa", $stock)
});

?>

