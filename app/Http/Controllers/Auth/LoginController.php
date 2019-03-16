<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Audit;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    //
    protected $maxAttempts = 3;
    protected $decayMinutes = 5;
    //
    public function redirectTo()
    {
      $role = Auth::user()->role_id;
      if ($role == '1')
      {
        return route('AdminPanel.index');
      } else
      {
         return route('WorkerPanel.index');
      }
    }

    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
