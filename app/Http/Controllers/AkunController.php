<?php

namespace App\Http\Controllers;

use App\Models\AkunModel;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    //
    protected $id_akun;
    protected $alamat;
    protected $no_handphone;
    protected $akunModel;

    public function __construct(){
        $this->akunModel = new AkunModel(); 
    }
    public function LoginAkun(){
        /**menampilkan halaman login pada web
         */
        return view ('akun.login');
    }
}
