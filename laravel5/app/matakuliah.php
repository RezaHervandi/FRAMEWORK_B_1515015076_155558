<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['title','keterangan'];

    public function dosen_matakuliah()
	{
		return $this->hasMany(dosen_matakuliah::class,'foreign_key');
	}

	//pada tabel relasi terlihat bahwasan nya tabel matakuliah berelasi dengan tabel dosen_matakuliah dengan kardinalitas 1 to many jadi dari tabel matakuliah kita panggil fungsi function dosen_matakuliah agar kita dapat mengakses model dosen_matakuliah dari model matakuliah. dan juga menggunakan fungsi this->hasMany. pada parameter nya pun jgn lupa menyertakan foreign_key karena 1 to many
}
