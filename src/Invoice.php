<?php

namespace App;


class Invoice extends Model
{
    public $id, $client, $payment_method, $details, $article, $total;

    public function __construct($id = '', $client = '', $payment_method = '', $details = '', $article = '', $total = '')
    {
        $this->id = $id;
        $this->client = $client;
        $this->payment_method = $payment_method;
        $this->details = $details;
        $this->article = $article;
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function getId(): string
    {
        return $this->id;
    }
}