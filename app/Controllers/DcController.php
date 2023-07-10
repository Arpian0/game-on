<?php

namespace App\Controllers;

use App\Models\DcModel;

class DcController extends BaseController
{
    public function index()
    {
        $model = new DcModel();
        $data['darkcrystal'] = $model->findAll();

        return view('darkcrystal/index', $data);
    }

    public function create()
    {
        return view('darkcrystal/create');
    }

    public function store()
    {
        $model = new DcModel();

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
        $model = new DcModel();
        $data['darkcrystal'] = $model->find($id);

        return view('darkcrystal/edit', $data);
    }

    public function update($id)
    {
        $model = new DcModel();

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
        $model = new DcModel();
        $model->delete($id);

        return redirect()->to('/darkcrystal');
    }
}
