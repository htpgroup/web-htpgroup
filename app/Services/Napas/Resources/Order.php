<?php

namespace App\Services\Napas\Resources;

class Order extends ApiResource
{
    public int $id;

    public string $name;

    public string $created_at;

    public string $updated_at;
}
