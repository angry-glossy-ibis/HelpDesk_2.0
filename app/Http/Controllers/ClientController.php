<?php

namespace App\Http\Controllers;

use App\client;
use App\Company;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //функция загрузки данных из бд таблицы клиентов + проверка доступа
    public function index(Request $request)
    { try {
      if ($request->user()->role_id === 1)
      {
        $clien = Client::orderBy('id', 'ASC')->paginate(5);
        return view('AdminPanel/Cliens.index')->withClien($clien);
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
    public function create()
    {
        //
    }

    //
    public function store()
    {
        //
    }

    //просмотр клиента + проверка доступа
    public function show(Client $cliens1, Request $request)
    { try {
      if ($request->user()->role_id === 1)
      {
        //var_dump($cliens1->id);
         return view('AdminPanel/Cliens.show')->withCliens1($cliens1);
      }
      else
      {
        return view('/ErrorExp');
      }
          } catch (\Exception $exception) {
        return view('/ErrorExp');
      }
    }

    //редактирование клиента + проверка доступа
    public function edit(Client $cliens1, Request $request)
    { try {
      if ($request->user()->role_id === 1)
      {
        return view('AdminPanel/Cliens.edit')->withCliens1($cliens1);
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
    public function update()
    {
        //
    }
    // удаление клиента + проверка
    public function remove(Client $cliens1, Request $request)
    { try {
      if ($request->user()->role_id === 1)
      {
        //var_dump($cliens1->id);
          return view('AdminPanel/Cliens.remove')->withCliens1($cliens1);
      }
      else
      {
        return view('/ErrorExp');
      }
    }catch (\Exception $exception) {
    return view('/ErrorExp');
}
    }
    // функция удаления из бд клиента
    public function destroy(Client $cliens1)
    {
        //$cliens1->delete();
        //return redirect(route('AdminPanel/Cliens.index'));
    }
}
