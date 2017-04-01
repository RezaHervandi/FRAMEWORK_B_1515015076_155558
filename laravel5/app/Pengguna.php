<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username', 'password'];

    public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
	}
	public function mahasiswa()
	{
		return $this->hasOne(mahasiswa::class);
	}
	public function peran()
	{
		return $this->belongsToMany(peran::class);
	}
    
}
