<?php

namespace App\Controllers;

use App\Models\CrystalModel;

class CrystalController extends BaseController
{
    public function index()
    {
        $model = new CrystalModel();
        $data['crystal'] = $model->findAll();

        return view('crystal/index', $data);
    }

    public function create()
    {
        return view('crystal/create');
    }

    public function store()
    {
        $model = new CrystalModel();

        $data = [
            'uid' => $this->request->getPost('uid'),
            'nickname' => $this->request->getPost('nickname'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->insert($data);

        return redirect()->to('topup');
    }

    public function edit($id)
    {
        $model = new CrystalModel();
        $data['crystal'] = $model->find($id);

        return view('crystal/edit', $data);
    }

    public function update($id)
    {
        $model = new CrystalModel();

        $data = [
            'uid' => $this->request->getPost('uid'),
            'nickname' => $this->request->getPost('nickname'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->update($id, $data);

        return redirect()->to('/crystal');
    }

    public function delete($id)
    {
        $model = new CrystalModel();
        $model->delete($id);

        return redirect()->to('/crystal');
    }
}
