<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        $success = 'Dữ liệu đã được xác thực';
        return view('welcome',compact('success'));
    }
}
