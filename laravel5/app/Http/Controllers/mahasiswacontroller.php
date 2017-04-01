<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function mahasiswa(){
    $mahasiswa = mahasiswa::all();
    //dd($mahasiswa);
    foreach ($mahasiswa as $mhs) {
    
    echo "Nama: ".$mhs->nama;;
    echo "<br>";
    echo "Username: ".$mhs->pengguna->username;
    echo "<br>";
    }
}
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = "Reza Hervandi";
    	$mahasiswa->nim = "1515015076";
    	$mahasiswa->alamat = "Jalan. Slamet Riyadi";
    	$mahasiswa->pengguna_id = 2;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
    }

}
