<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

public function mahasiswa(){
	return $this->belongsTo(mahasiswa::class);
}
	public function ruangan(){
	return $this->belongsTo(ruangan::class);
	}	
	public function dosen_matakuliah(){
	return $this->belongsTo(dosen_matakuliah::class);
	}
	//pada tabel relasi terlihat bahwasan nya tabel jadwal_matakuliah berelasi dengan tabel mahasiswa, tabel dosen_matakuliah, dan juga tabel ruangan dengan masing-masing kardinalitasnya many to 1, many to 1, dan many to 1 jadi dari tabel jadwal_matakuliah kita panggil fungsi function mahasiswa, dosen_matakuliah dan ruangan agar dapat saling berelasi. dan juga menggunakan fungsi this->belongsTo karena kebalikan dari hasMany.
}
