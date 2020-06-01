<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SubjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Subject');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/subject');
        $this->crud->setEntityNameStrings('Навчальну дисципліну', 'Навчальні дисципліни');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'label'=> '№',
                'name' => 'id',
                'type' => 'string'
            ],
            [
                'label'=> 'Назва дисципліни',
                'name' => 'name',
                'type' => 'string',
                'searchLogic' => function ($query, $column, $searchTerm) {
                    $query->orWhere('name', 'like', '%'.$searchTerm.'%');
                }
            ],
            [
                'label'=> 'Кредити',
                'name' => 'credits',
                'type' => 'string'
            ],
            [
                'label'=> 'Кредити(скорочена форма)',
                'name' => 'credits_short',
                'type' => 'string'
            ],
            [
                'label'=> 'Враховувати в середній бал',
                'name' => 'in_avg',
                'type' => 'boolean'
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addFields([
            [
                'label'=> 'Назва дисципліни',
                'name' => 'name',
                'type' => 'text'
            ],
            [
                'label'=> 'Кредити',
                'name' => 'credits',
                'type' => 'text'
            ],
            [
                'label'=> 'Кредити(скорочена форма)',
                'name' => 'credits_short',
                'type' => 'text'
            ],
            [
                'label'=> 'Враховувати в середній бал',
                'name' => 'in_avg',
                'type' => 'boolean'
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }
}
