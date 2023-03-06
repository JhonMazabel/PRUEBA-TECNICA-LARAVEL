<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_proceso extends Model
{
    public function documento()
    {
        return $this->hasMany(Doc_documento::class);
    }

    protected $table = 'pro_proceso';

    use HasFactory;
}
