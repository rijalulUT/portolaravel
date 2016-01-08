<?php

namespace App\Http\Models;

use DB;

class Jabatan
{
    public static function TableJabatan()
    {
      $table = DB::select( DB::raw("SELECT * FROM m_pejabat"));
      return $table;
    }
}
