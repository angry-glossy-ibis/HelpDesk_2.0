<?php

namespace App\Http\Controllers;

use App\roles;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Rating;
class AdminRatingController extends Controller
{

    //функция предъявления страницы администратора + проверка прав через костыль
    public function index(Request $request)
    { try {
      if ($request->user()->role_id === 1)
      {
        return view('AdminPanel/Rating/index');
      }
      else
      {
        return view('/ErrorExp');
      }
    }catch (\Exception $exception) {
    return view('/ErrorExp');
  }
    }

    //
    public function create()
    {
        //
    }

    //
    public function store()
    {
        //
    }

    //
    public function show()
    {
    }

    //
    public function edit()
    {
        //
    }

    //
    public function update()
    {
        //
    }

    //
    public function destroy()
    {
        //
    }
    public function jsindex(User $user)
    {
      return new Rating($user);
    }

}
