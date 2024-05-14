<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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

    public function tambah()
    {
        //function untuk menambah data menu
    }

    public function simpan()
    {

    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }

    public function DataMenu(Request $request)
    {
        //endpoint API untuk datatable serverside
        if($request->ajax()):
            $data = $this->menuModel->get();
            return DataTables::of($data)->toJson();
        endif;
    }
}
