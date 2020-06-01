<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StudentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StudentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Student');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/student');
        $this->crud->setEntityNameStrings('Студента', 'Студенти');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'label' => '№',
                'name' => 'id',
                'type' => 'number'
            ],
            [
                'label' => 'П.І.П',
                'name' => 'name',
                'type' => 'string'
            ],
            [
                'label' => 'Назва дипломної роботи',
                'name' => 'diploma_title',
                'type' => 'string'
            ],
            [
                'label' => 'Скорочена форма навчання',
                'name' => 'short',
                'type' => 'boolean'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addFields([
            [
                'label' => 'П.І.П',
                'name' => 'name',
                'type' => 'text'
            ],
            [
                'label' => 'Назва дипломної роботи',
                'name' => 'diploma_title',
                'type' => 'text'
            ],
            [
                'label' => 'Скорочена форма навчання',
                'name' => 'short',
                'type' => 'boolean'
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
