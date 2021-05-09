<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TeachersMessage extends Model
{
    protected $table = 'teachers_messages';

    use Sortable;
    public $sortable = ['id'];
}
