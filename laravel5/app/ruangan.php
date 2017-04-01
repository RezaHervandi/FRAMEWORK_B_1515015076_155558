<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['title'];

     public function jadwal_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class,'foreign_key');
	}

	//pada tabel relasi terlihat bahwasan nya tabel ruangan berelasi dengan tabel jadwal_matakuliah dengan kardinalitas 1 to many jadi dari tabel ruangan kita panggil fungsi function jadwal_matakuliah agar kita dapat mengakses model jadwal_matakuliah dari model ruangan. dan juga menggunakan fungsi this->hasMany. pada parameter nya pun jgn lupa menyertakan foreign_key karena 1 to many
}
