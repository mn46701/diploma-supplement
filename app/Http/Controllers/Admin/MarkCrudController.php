<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MarkRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MarkCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MarkCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Mark');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/mark');
        $this->crud->setEntityNameStrings('Оцінку', 'Оцінки');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters



        $this->crud->addColumns([
            [
                'label' => 'Студент',
                'name' => 'student_id',
                'type' => 'closure',
                'function' => function($entry) {
                    return $entry->student->name;
                }
            ],
            [
                'label' => 'Предмет',
                'name' => 'subject_id',
                'type' => 'closure',
                'function' => function($entry) {
                    return $entry->subject->name;
                }
            ],
            [
                'label' => 'Оцінка',
                'name' => 'mark',
                'type' => 'number'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MarkRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
