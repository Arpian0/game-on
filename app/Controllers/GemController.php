<?php

namespace App\Controllers;

use App\Models\GemModel;

class GemController extends BaseController
{
    public function index()
    {
        $model = new GemModel();
        $data['gem'] = $model->findAll();

        return view('gem/index', $data);
    }

    public function create()
    {
        return view('gem/create');
    }

    public function store()
    {
        $model = new GemModel();

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
        $model = new GemModel();
        $data['gem'] = $model->find($id);

        return view('gem/edit', $data);
    }

    public function update($id)
    {
        $model = new GemModel();

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
        $model = new GemModel();
        $model->delete($id);

        return redirect()->to('/gem');
    }
}
