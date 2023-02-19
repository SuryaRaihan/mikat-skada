<?php

namespace App\Models;
use CodeIgniter\Model;
class UsersModel extends Model
{
    
	// connect ke table database
	protected $table = 'users';
	// field mana yang boleh di isi
	protected $allowedFields = [

		'email',
		'password',
		'nama_pengguna'

	];


	public function Getnama($nama = false)
    
    {
        // method getkomik bisa jalani 2 , ada parameter dan tidak ada parameter

        // jalani tidak ada slug
        if ($nama == false) {
            return $this->findAll();
        }

        // jalani ada slug

        return $this->where(['nama_pengguna' => $nama])->first();
    }


}