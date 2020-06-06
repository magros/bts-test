<?php
require __DIR__ . '/vendor/autoload.php';

use App\InvoiceRepository;
use App\InvoiceService;

$router = new App\Router(new App\Request());
$invoiceRepository = new InvoiceRepository(new InvoiceService());

$router->get('/', function () {
    include_once 'app.html';
});
$router->get('/api/invoices', function () use ($invoiceRepository) {
    return json_encode($invoiceRepository->findAll());
});
$router->post('/api/invoices', function ($request) use ($invoiceRepository) {
    return json_encode($invoiceRepository->create($request->getBody()));
});