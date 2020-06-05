<?php

use App\InvoiceRepository;
use App\InvoiceService;

require __DIR__ . '/vendor/autoload.php';

$router = new App\Router(new App\Request());
$invoiceRepository = new InvoiceRepository(new InvoiceService());

$router->get('/', function () {
    include_once 'app.html';
});
$router->get('/api/invoices', function () use ($invoiceRepository) {
    return json_encode($invoiceRepository->findAll());
});
$router->get('/api/invoices-create', function () use ($invoiceRepository) {
    return json_encode($invoiceRepository->create(array()));
});
$router->post('/api/invoices', function ($request) {
//    return json_encode(\App\InvoiceRepository::create($request->getBody()));
});