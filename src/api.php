<?php

require "config/setup.php";
require 'class/request.php';

use Telecom76\onCurl;

$result = [
  'total' => 0,
  'chamados' => [],
];

$rows = [
  ['cod' => 1, 'fila' => 'SUPORTE - NIVEL 1'],
  ['cod' => 201, 'fila' => 'SUPORTE - BLOQUEIO / DESBLOQUEIO'],
  ['cod' => 640, 'fila' => 'SUPORTE - CANCELAMENTO'],
  ['cod' => 676, 'fila' => 'SUPORTE - CIRCUITO / POP'],
  ['cod' => 672, 'fila' => 'SUPORTE - COORPORATIVO'],
  ['cod' => 661, 'fila' => 'SUPORTE - ATIVAÇÃO'],
  ['cod' => 501, 'fila' => 'SUPORTE - PRO ATIVO'],
  ['cod' => 521, 'fila' => 'SUPORTE - RESIDENCIAL'],
];

$open = new onCurl(CONFIG);

foreach ($rows as $id => $value) {
  $request = $open->Acess(
    CONFIG["ERP"] . '/chamadocontroller/pesquisar',
    'numero=&fila=' . $value['cod'] . '&meuChamado=0&cliente=&assunto=&page=1&rows=30'
  );

  $json = json_decode($request, true);

  $total =  $result['total'] += isset($json['total']) ?  $json['total'] : 0;

  array_push($result['chamados'], ['fila' => $value['fila'], 'value' => $total]);
}

die(json_encode($result));
