<?php

namespace App\Controllers;

use App\Models\DiamondTopupModel;

class DiamondTopupController extends BaseController
{
    public function index()
    {
        $model = new DiamondTopupModel();
        $data['diamonds'] = $model->findAll();

        return view('diamonds/index', $data);
    }

    public function create()
    {
        return view('diamonds/create');
    }

    public function store()
    {
        $model = new DiamondTopupModel();

        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->insert($data);

        return redirect()->to('/diamonds');
    }

    public function edit($id)
    {
        $model = new DiamondTopupModel();
        $data['diamond'] = $model->find($id);

        return view('diamonds/edit', $data);
    }

    public function update($id)
    {
        $model = new DiamondTopupModel();

        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'amount' => $this->request->getPost('amount')
        ];

        $model->update($id, $data);

        return redirect()->to('/diamonds');
    }

    public function delete($id)
    {
        $model = new DiamondTopupModel();
        $model->delete($id);

        return redirect()->to('/diamonds');
    }
}
