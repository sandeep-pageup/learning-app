<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function show(){
        return QrCode::generate("https://www.instagram.com");
    }
}
