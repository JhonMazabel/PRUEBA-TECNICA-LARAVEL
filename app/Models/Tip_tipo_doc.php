<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip_tipo_doc extends Model
{
    protected $table = "tip_tipo_doc";
    public function documento()
    {
        return $this->hasMany(Doc_documento::class);
    }

    use HasFactory;
}
