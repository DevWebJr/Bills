<?php

class DataBaseConnection
{
    private $host = "mysql:dbname=crud_bills";
    private $user = "root";
    private $password = "";

    private function getConnection()
    {
        try {
            return new PDO($this->host, $this->user, $this->password);
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    public function create(string $customer, string $cashier, int $amount, int $received, int $returned, string $state)
    {
        $q = $this->getConnection()->prepare("INSERT INTO bills (customer, cashier, amount, received, returned, state) VALUES (:customer, :cashier, :amount, :received, :returned, :state)");
        return $q->execute([
            'customer' => $customer,
            'cashier' => $cashier,
            'amount' => $amount,
            'received' => $received,
            'returned' => $returned,
            'state' => $state
        ]);
    }
}