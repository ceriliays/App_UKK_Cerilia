<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller{

    public function tampil()
    {
        return view('dashboard');
    }

}