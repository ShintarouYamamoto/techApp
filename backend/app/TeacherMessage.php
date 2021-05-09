<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TeacherMessage extends Model
{
    use Sortable;
    public $sortable = ['id'];
}
