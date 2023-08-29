<?php

// app/View/Components/CustomTable.php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomTable extends Component
{
    public $tableName;
    public $columns;

    public function __construct($tableName, $columns)
    {
        $this->tableName = $tableName;
        $this->columns = $columns;
    }

    public function render()
    {
        return view('components.custom-table');
    }
}

