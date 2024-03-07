<?php

   // app/Models/SeuModelo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConexaoExterna extends Model
{
    protected $connection = 'main_database';
    protected $table = 'users';
}

