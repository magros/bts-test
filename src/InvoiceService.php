<?php

namespace App;

class InvoiceService extends DBService
{
    function create(array $data): Model
    {
        $sql = "insert into invoices values(null, 'bts', 'card', 'fkjajnasf', 'article', '564654');";

        if ($this->connection()->query($sql)) {
            $lastId = $this->connection()->insert_id;
            $result = $this->connection()->query("SELECT * FROM invoices WHERE id = {$lastId}");
            return $this->mapInvoice($result->fetch_assoc());
        }
    }

    function findAll(): array
    {
        $result = $this->connection()->query("SELECT * FROM invoices");
        $results = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $this->mapInvoice($row);
            }
        }

        $this->connection()->close();

        return $results;
    }

    private function mapInvoice($row)
    {
        return new Invoice($row["id"], $row["client"], $row["payment_method"], $row["details"], $row["article"], $row["total"]);
    }
}