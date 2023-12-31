<?php

namespace App\Controllers;

use App\Models\ApexcoinModel;

class ApexcoinController extends BaseController
{
    public function index()
    {
        $model = new ApexcoinModel();
        $data['apexcoin'] = $model->findAll();

        return view('apexcoin/index', $data);
    }

    public function create()
    {
        return view('apexcoin/create');
    }

    public function store()
    {
        $model = new ApexcoinModel();

        $data = [
            'uid' => $this->request->getPost('uid'),
            'nickname' => $this->request->getPost('nickname'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount'),
            'status' => $this->request->getPost('status')
        ];

        $model->insert($data);

        return redirect()->to('image');
    }

    public function edit($id)
    {
        $model = new ApexcoinModel();
        $data['apexcoin'] = $model->find($id);

        return view('apexcoin/edit', $data);
    }

    public function update($id)
    {
        $model = new ApexcoinModel();

        $data = [
            'uid' => $this->request->getPost('uid'),
            'nickname' => $this->request->getPost('nickname'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount'),
            'status' => $this->request->getPost('status')
        ];

        $model->update($id, $data);

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new ApexcoinModel();
        $model->delete($id);

        return redirect()->to('/apexcoin');
    }
}
