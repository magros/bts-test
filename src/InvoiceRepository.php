<?php

namespace App;

class InvoiceRepository
{
    private $service;

    public function __construct(DBService $service)
    {
        $this->service = $service;
    }

    public function create($request)
    {
        return $this->service->create($request);
    }

    public function findAll(): array
    {
        return $this->service->findAll();
    }

}