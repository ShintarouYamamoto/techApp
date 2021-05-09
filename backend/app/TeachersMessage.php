<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TeachersMessage extends Model
{

    use Sortable;
    public $sortable = ['id'];
}
