<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function store()
    {
        $contactModel = new ContactModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        $contactModel->save($data);

        return redirect()->to('/contact')->with('status', 'Your message has been sent. Thank you!');
    }
}
