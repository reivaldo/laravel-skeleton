<?php

namespace Modules\V1\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractRepository
 * @package Modules\V1\Repositories
 */
abstract class AbstractRepository extends Model
{
    public function findAll(array $params=[]):Collection
    {
        return $this->all($params);
    }
}