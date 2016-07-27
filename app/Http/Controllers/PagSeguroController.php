<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagSeguroController extends Controller
{
      public function getSessionId () {
    $credentials = \PagSeguroConfig::getAccountCredentials();
      return [
        'sessionid' => \PagSeguroSessionService::getSession($credentials)
      ];
    }
}
