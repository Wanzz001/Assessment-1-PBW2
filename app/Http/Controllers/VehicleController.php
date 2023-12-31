<?php
// Nama : Wandi Ridwansyah
// NIM : 6706220080

namespace App\Http\Controllers;

use App\DataTables\VehicleDataTable;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VehicleDataTable $dataTable)
    {
        return $dataTable->render('kendaraan.daftarKendaraan');
    }

}
