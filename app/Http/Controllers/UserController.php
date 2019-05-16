<?php

namespace App\Http\Controllers;

use App\client;
use App\User;
use App\Role;
use App\Position;
use App\Company;
use Illuminate\Http\Request;
Use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    // функция загрузки данных из бд
    public function index(Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          $users = User::orderBy('id', 'ASC')->paginate(5);
          return view('AdminPanel/Users.index')->withUsers($users);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

     //функция создания пользователя
    public function create(Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          $user = new User();
          $roles = Role::orderBy('id')->pluck('name', 'id');
          $positions = Position::orderBy('id')->pluck('name', 'id');
          return view ('AdminPanel/Users.create', compact('roles', 'positions', 'user'));
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //
    public function store(UserRequest $ru)
    {
      //var_dump($user);
      $rating = 50;
      $attributesuser = $ru->only(['login', 'password', 'email', 'name', 'surname', 'patronymic', 'phone', 'telename', 'role_id', 'position_id']);
      $attributesuser['rating'] = $rating;
      $newuser = User::create($attributesuser);
      return redirect(route('AdminPanel/Users/index'));
    }

    //функция просмотра пользователя
    public function show(User $user1, Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          // var_dump($user1->id);
          return view('AdminPanel/users.show')->withUser1($user1);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //функция изменения пользователя
    public function edit(User $user1, Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          //var_dump($user1->id);
          return view('AdminPanel/Users/edit')->withUser1($user1);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //
    public function update()
    {
        $atributrequest = $r->only(['name', 'summary', 'comm']);
        $request1->update($atributrequest);
        return redirect(route('WorkerPanel.index'));
    }

    // функция удаления пользователя
    public function remove(User $user1, Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          //var_dump($user1->id);
          return view('AdminPanel/Users/remove')->withUser1($user1);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }
}
