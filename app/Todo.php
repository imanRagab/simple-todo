<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Todo extends Eloquent
{
    protected $collection = 'todos';

}
