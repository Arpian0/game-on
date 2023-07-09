<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ApexcoinModel;
use App\Models\BorrowModel;
use App\Models\CrystalModel;
use App\Models\DcModel;
use App\Models\DiamondTopupModel;
use App\Models\GemModel;
use App\Models\ImageModel;
use App\Models\LoanModel;
use App\Models\PrimogemModel;
use App\Models\StellarModel;
use App\Models\ValorantModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function admin()
    {
        $model = new DiamondTopupModel();
        $data['diamonds'] = $model->findAll();

        $model = new PrimogemModel();
        $data['primogem'] = $model->findAll();

        $model = new StellarModel();
        $data['stellar'] = $model->findAll();

        $model = new CrystalModel();
        $data['crystal'] = $model->findAll();

        $model = new DcModel();
        $data['darkcrystal'] = $model->findAll();

        $model = new GemModel();
        $data['gem'] = $model->findAll();

        $model = new ValorantModel();
        $data['valorant'] = $model->findAll();

        $model = new ApexcoinModel();
        $data['apexcoin'] = $model->findAll();

        echo view('dashboard/admin', $data);
    }

    public function anggota()
    {
        $adminModel = new AdminModel();
        $data['admin'] = $adminModel->findAll();

        return view('dashboard/anggota', $data);
    }

    public function topup()
    {
        $model = new ImageModel();
        $data['images'] = $model->findAll();

        echo view('dashboard/topup', $data);
    }

    public function kategori()
    {
        echo view('dashboard/kategori');
    }

    public function peminjaman()
    {
        $model = new BorrowModel();
        $data['borrows'] = $model->findAll();

        echo view('dashboard/peminjaman', $data);
    }

    public function pengembalian()
    {
        $model = new LoanModel();
        $data['loans'] = $model->findAll();

        echo view('dashboard/pengembalian', $data);
    }
}
