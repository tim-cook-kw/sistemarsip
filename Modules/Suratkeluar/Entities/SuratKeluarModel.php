<?php

namespace Modules\Suratkeluar\Entities;

use Illuminate\Database\Eloquent\Model;

class SuratKeluarModel extends Model
{
    protected $fillable = [];
    protected $table="tbl_surat_keluar";
    protected $primaryKey = "id_surat";
    public $timestamps = false;
}
