<?php

namespace Modules\V1\Repositories;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface RepositoryInterface
 * @package Modules\V1\Repositories
 */
interface RepositoryInterface
{
    /**
     * @param array $params
     * @return Collection
     */
    public function findAll(array $params = []): Collection;
}