<?php
namespace App\Repository\Contracts;

interface BaseInterface
{
    public function fetchPaginated();
    public function createModel(array $data);
    public function insertBulk(array $properties);
    public function findFirstWhere(array $columns);
    public function find($id);
}
