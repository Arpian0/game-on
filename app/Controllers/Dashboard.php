<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BookModel;
use App\Models\BorrowModel;
use App\Models\DiamondTopupModel;
use App\Models\ImageModel;
use App\Models\LoanModel;
use App\Models\MemberModel;
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
