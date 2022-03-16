<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'これは、laravelではありません。',
        ];
        return view('me.index', $data);
    }
}
