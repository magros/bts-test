<?php

namespace App\Tests;

use App\DBService;
use App\Invoice;
use App\InvoiceRepository;
use App\InvoiceService;
use Mockery;
use PHPUnit\Framework\TestCase;

class InvoicesTest extends Mockery\Adapter\Phpunit\MockeryTestCase
{

    public function testThatICanListInvoices()
    {
        $service = Mockery::mock(DBService::class);

        $service->shouldReceive('findAll')->andReturn([
            new Invoice(123, 'BTS'),
            new Invoice(1234, 'Another Client')
        ]);

        $repository = new InvoiceRepository($service);
        $res = $repository->findAll();

        $this->assertEquals($res[0]->getId(), 123);
        $this->assertEquals($res[1]->getId(), 1234);
    }

    public function testThatICanCreateAnInvoice()
    {
        $service = Mockery::mock(DBService::class);

        $service->shouldReceive('create')->andReturn(
            new Invoice(null, 'test')
        );

        $repository = new InvoiceRepository($service);

        $res = $repository->create(['client' => 'test']);

        $this->assertEquals($res->getClient(), 'test');
    }
}