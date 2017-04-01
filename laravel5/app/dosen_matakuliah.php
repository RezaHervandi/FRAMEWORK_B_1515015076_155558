<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
     protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function matakuliah()
	{
		return $this->belongsTo(matakuliah::class);
	}
	public function dosen()
	{
		return $this->belongsTo(dosen::class);

	public function jadwal_matakuliah(){
	return $this->hasMany(jadwal_matakuliah::class);
	}
	}

	//pada tabel relasi terlihat bahwasan nya tabel dosen_matakuliah berelasi dengan tabel matakuliah, tabel jadwal_matakuliah, dan juga tabel dosen dengan masing-masing kardinalitasnya many to 1, 1 to many, dan many to 1 jadi dari tabel dosen_matakuliah kita panggil fungsi function matakuliah, jadwal_matakuliah dan dosen agar dapat saling berelasi. dan juga menggunakan fungsi this->belongsTo karena kebalikan dari hasMany, dan fungsi this->hasMany
}
