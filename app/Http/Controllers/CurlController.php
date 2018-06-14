<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CurlController extends Controller {

    public function index() {
        $cSession = curl_init();
        curl_setopt($cSession, CURLOPT_URL, "http://www.google.com/search?q=curl");
        curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cSession, CURLOPT_HEADER, false);
        $result = curl_exec($cSession);
        curl_close($cSession);
//        echo $result;exit;
    }

}
