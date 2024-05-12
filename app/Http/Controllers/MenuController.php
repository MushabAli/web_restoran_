<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    protected $id_menu;
    protected $nama_menu;
    protected $harga;
    protected $status_menu;
    protected $menuModel;

   public function __construct()
   {
        $this->menuModel = new MenuModel();
   }
    public function index()
    {
        return view('menu.index');
    }
}
