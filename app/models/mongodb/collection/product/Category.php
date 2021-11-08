<?php

declare(strict_types=1);

namespace app\models\mongodb\collection\product;

use app\core\database\mongodb\MongoDb;

class Category extends MongoDb
{

    public function collection(): string
    {
        return 'product_categories';
    }

    public array $filter = [];
    public array $option = [];

    public function filter(): array
    {
        return $this->filter;
    }
    public function option(): array
    {
        return $this->option;
    }
}
