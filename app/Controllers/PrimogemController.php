<?php

namespace App\Controllers;

use App\Models\PrimogemModel;

class PrimogemController extends BaseController
{
    public function index()
    {
        $model = new PrimogemModel();
        $data['primogem'] = $model->findAll();

        return view('primogem/index', $data);
    }

    public function create()
    {
        return view('primogem/create');
    }

    public function store()
    {
        $model = new PrimogemModel();

        $data = [
            'nick_gi' => $this->request->getPost('nick_gi'),
            'user_uid' => $this->request->getPost('user_uid'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->insert($data);

        return redirect()->to('topup');
    }

    public function edit($id)
    {
        $model = new PrimogemModel();
        $data['primogem'] = $model->find($id);

        return view('primogem/edit', $data);
    }

    public function update($id)
    {
        $model = new PrimogemModel();

        $data = [
            'nick_gi' => $this->request->getPost('nick_gi'),
            'user_uid' => $this->request->getPost('user_uid'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->update($id, $data);

        return redirect()->to('/primogem');
    }

    public function delete($id)
    {
        $model = new PrimogemModel();
        $model->delete($id);

        return redirect()->to('/primogem');
    }
}
