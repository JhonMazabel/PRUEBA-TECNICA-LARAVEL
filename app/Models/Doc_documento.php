<?php

namespace App\Models;
use App\Models\Tip_tipo_doc;
use App\Models\Pro_proceso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_documento extends Model
{
    protected $table = "doc_documento";

    public function tipo_documento()
    {
        return $this->belongsTo(Tip_tipo_doc::class);
    }

    public function proceso_documento()
    {
        return $this->belongsTo(Pro_proceso::class);
    }

    use HasFactory;
}
