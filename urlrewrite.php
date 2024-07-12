<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/news\\/(.*)\\/?#',
    'RULE' => 'newsCode=$1',
    'ID' => '',
    'PATH' => '/news/state.php',
    'SORT' => 100,
  ),
);
