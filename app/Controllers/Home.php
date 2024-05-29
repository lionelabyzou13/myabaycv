<?php

namespace App\Controllers;

use App\Models\Abay;

class Home extends BaseController
{
    public function index()
    {
        $model = new Abay();
        $data['about'] = $model->first();
        return view('welcome_message', $data);
    }
}