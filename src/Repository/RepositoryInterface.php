<?php

declare(strict_types=1);

namespace App\Repository;

interface RepositoryInterface
{
    public function findAll();

    public function countAll();
}
