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

    public static function ShowJabatan($id)
    {
      $select = DB::select( DB::raw("SELECT * FROM m_pejabat WHERE kode_pejabat = :id"), array(
       'id' => $id,
       ));

       return $select;
    }
}
