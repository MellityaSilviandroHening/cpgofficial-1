<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    //
    public function index() {
        return view("assesmentPage");
    }

    public function detailAssesmentPage() {
        return view('assesmentDetailPage');
    }
}
