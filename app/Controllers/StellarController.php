<?php

namespace App\Controllers;

use App\Models\StellarModel;

class StellarController extends BaseController
{
    public function index()
    {
        $model = new StellarModel();
        $data['stellar'] = $model->findAll();

        return view('stellar/index', $data);
    }

    public function create()
    {
        return view('stellar/create');
    }

    public function store()
    {
        $model = new StellarModel();

        $data = [
            'nickname' => $this->request->getPost('nickname'),
            'uid' => $this->request->getPost('uid'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount'),
            'status' => $this->request->getPost('status')
        ];

        $model->insert($data);

        return redirect()->to('image');
    }

    public function edit($id)
    {
        $model = new StellarModel();
        $data['stellar'] = $model->find($id);

        return view('stellar/edit', $data);
    }

    public function update($id)
    {
        $model = new StellarModel();

        $data = [
            'nickname' => $this->request->getPost('nickname'),
            'uid' => $this->request->getPost('uid'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount'),
            'status' => $this->request->getPost('status')
        ];

        $model->update($id, $data);

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new StellarModel();
        $model->delete($id);

        return redirect()->to('/stellar');
    }
}
