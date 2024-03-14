<?php

   // app/Models/SeuModelo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConexaoExterna extends Model
{
    protected $connection = 'main_database';
    protected $tables = [
        'users',
        'assinaturas_asaas',
    ];

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }
}

