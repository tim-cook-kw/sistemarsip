<?php

namespace Modules\Surat\Entities;

use Illuminate\Database\Eloquent\Model;

class SuratModel extends Model
{
    protected $fillable = [];
    protected $table = 'tbl_surat_masuk';
    protected $primaryKey = 'id_surat';
    public $timestamps = false;
}
