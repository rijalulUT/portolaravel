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

    public static function ShowJabatan($kode_pejabat,$status_aktif)
    {
      $select = DB::select( DB::raw("SELECT * FROM m_pejabat WHERE kode_pejabat = :kode_pejabat AND status_aktif = :status_aktif "), array(
       'kode_pejabat' =>$kode_pejabat,
       'status_aktif' => $status_aktif,
       ));
       return $select;
    }

    public static function IsiJabatan($kode_pejabat,$kode_fakultas,$nama_pejabat,$keterangan_jabatan,$status_aktif,$kode_jabatan,$nip,$nip18)
    {
      $insert = DB::insert( DB::raw("INSERT into m_pejabat (kode_pejabat, kode_fakultas,nama_pejabat,keterangan_jabatan,status_aktif,kode_jabatan,nip,nip18) values (:kode_pejabat, :kode_fakultas,:nama_pejabat,:keterangan_jabatan,:status_aktif,:kode_jabatan,:nip,:nip18)"), array(
       'kode_pejabat' =>$kode_pejabat,
       'kode_fakultas' => $kode_fakultas,
       'nama_pejabat' => $nama_pejabat,
       'keterangan_jabatan' => $keterangan_jabatan,
       'status_aktif' => $status_aktif,
       'kode_jabatan' => $kode_jabatan,
       'nip' => $nip,
       'nip18'=> $nip18,
       ));
       return $insert;
    }
}
