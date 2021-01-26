<?php
namespace App\Repository;

trait RepositoryTraits
{
    /**
     * @param array $selected ['name','email]
     * @return $this
     */
    public function selectedFields(array $selectedFields)
    {
        $this->entity = $this->entity->select($selectedFields);

        return $this;
    }

    /**
    * fetch related models with $this->entity,
    * pass single model or multiple models to eagerloaded
    * ['firstmodel','secondmodel'], can also select fields ['firstmodel:name,age','secondmodel:id,age']
    * @param array $models
    * @return $this
    */
    public function withModels(array $models)
    {
        $this->entity = $this->entity->with($models);

        return $this;
    }
}
