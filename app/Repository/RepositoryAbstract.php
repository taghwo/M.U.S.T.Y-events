<?php

namespace App\Repository;

use App\Repository\Contracts\BaseInterface;
use App\Repository\RepositoryTraits;
use App\Repository\Exceptions\NoEntityDefined;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class RepositoryAbstract implements BaseInterface
{
    use RepositoryTraits;

    protected $entity;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    public function fetchPaginated($page=10)
    {
        return $this->entity->latest()->paginate($page);
    }

    public function createModel(array $properties)
    {
        return $this->entity->create($properties);
    }

    public function insertBulk(array $properties)
    {
        return $this->entity->insert($properties);
    }

    public function findFirstWhere(array $columns)
    {
        return $this->entity->where($columns)->first();
    }

    public function find($id)
    {
        $data =  $this->entity->findOrFail($id);

        return $data;
    }

    private function resolveEntity()
    {
        if (!method_exists($this, 'entity')) {
            throw new NoEntityDefined();
        }
        return app()->make($this->entity());
    }
}
