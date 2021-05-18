<?php namespace OnlineStore\Schema\Behaviors;

use OnlineStore\Schema\Models\Entity;
use October\Rain\Extension\ExtensionBase;

class ModelBehavior extends ExtensionBase
{
    public $model;

    /**
     * __construct
     */
    public function __construct($model)
    {
        $this->model = $model;

        $this->model->morphToMany += [
            'schemas' => [
                'OnlineStore\Schema\Models\Schema',
                'name' => 'entity',
                'table' => 'onlinestore_schema_schemas_entities',
                'order' => 'name asc'
            ]
        ];

        // after delete model, delete entity
        $this->model->bindEvent('model.afterDelete', function () {
            $this->deleteEntity();
        });
    }

    /**
     * deleteEntity
     */
    protected function deleteEntity()
    {
        return Entity::where('entity_id', $this->model->id)
            ->where('entity_type', get_class($this->model))
            ->delete();
    }
}
