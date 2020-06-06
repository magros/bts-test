<?php

namespace App;

use JsonSerializable;

class Model implements JsonSerializable
{
    public function jsonSerialize(): array
    {
        return (array)$this;
    }
}