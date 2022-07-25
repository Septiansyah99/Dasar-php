<?php

$data = [
    'action' => 'Dasep Septian'
];

if(isset($data['action'])) {
    $action = $data['action'];
}else {
    $action = 'nothing';
}

echo $action;