<?php

namespace App\Controllers;

use App\Models\ValorantModel;

class ValorantController extends BaseController
{
    public function index()
    {
        $model = new ValorantModel();
        $data['valorant'] = $model->findAll();

        return view('valorant/index', $data);
    }

    public function create()
    {
        return view('valorant/create');
    }

    public function store()
    {
        $model = new ValorantModel();

        $data = [
            'nickname' => $this->request->getPost('nickname'),
            'uid' => $this->request->getPost('uid'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->insert($data);

        return redirect()->to('topup');
    }

    public function edit($id)
    {
        $model = new ValorantModel();
        $data['valorant'] = $model->find($id);

        return view('valorant/edit', $data);
    }

    public function update($id)
    {
        $model = new ValorantModel();

        $data = [
            'nickname' => $this->request->getPost('nickname'),
            'uid' => $this->request->getPost('uid'),
            'server' => $this->request->getPost('server'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->update($id, $data);

        return redirect()->to('/valorant');
    }

    public function delete($id)
    {
        $model = new ValorantModel();
        $model->delete($id);

        return redirect()->to('/valorant');
    }
}
