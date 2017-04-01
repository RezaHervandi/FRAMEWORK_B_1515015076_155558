<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
	}

	 public function jadwal_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class,'foreign_key');
	}

	//pada tabel relasi terlihat bahwasan nya tabel mahasiswa berelasi dengan tabel jadwal_matakuliah dan juga tabel pengguna dengan masing-masing kardinalitasnya 1 to many dan 1 to 1 jadi dari tabel mahasiswa kita panggil fungsi function jadwal_matakuliah dan pengguna agar dapat saling berelasi. dan juga menggunakan fungsi this->hasMany dan juga fungsi this->belongsTo karena kebalikan dari hasOne di model pengguna. pada parameter nya pun jgn lupa menyertakan foreign_key karena 1 to many
}