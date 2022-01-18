<?php
require_once './src/DataBaseConnection.php';

$db = DataBaseConnection();
//Création des factures
if(isset($_POST['action']) && $_POST['action'] == 'create') {
    extract($_POST);
    $returned = (int)$received - (int)$amount;
    $db->create($customer, $cashier, (int)$amount, (int)$received, (int)$returned, $state);
    echo 'Good Job!';
}