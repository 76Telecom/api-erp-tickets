<?php

/*
 * Copyright: Caio Agiani 2016-2019
 * Website: https://76telecom.com.br
 * Description: Automatic API for extracting ERP tickets
 */

header('Content-Type: application/json');

date_default_timezone_set('America/Sao_Paulo');

set_time_limit(0);

$_SERVER['REQUEST_METHOD'] == 'POST' ? extract($_POST) : extract($_GET);

require "src/index.php";
