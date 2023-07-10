<?php

namespace App\Controllers;

use App\Models\TransactionModel;

class PaymentController extends BaseController
{
    public function index()
    {
        // Tampilkan halaman pembayaran
        return view('payment_form');
    }

    public function processPayment()
    {
        // Validasi inputan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'customer_name' => 'required',
            'bank_name' => 'required',
            'account_number' => 'required',
            'amount' => 'required|numeric',
            'payment_date' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data pembayaran ke database
        $transactionModel = new TransactionModel();
        $transactionModel->save([
            'customer_name' => $this->request->getPost('customer_name'),
            'bank_name' => $this->request->getPost('bank_name'),
            'account_number' => $this->request->getPost('account_number'),
            'amount' => $this->request->getPost('amount'),
            'payment_date' => $this->request->getPost('payment_date'),
        ]);

        return redirect()->to('topup');
    }

    public function success()
    {
        // Tampilkan halaman sukses pembayaran
        return view('payment_success');
    }
}
