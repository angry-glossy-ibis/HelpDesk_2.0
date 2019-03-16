<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;
use App\Company;

class AdminRequestController extends Controller
{
  //функция загрузки данных из бд таблицы заявки
  public function index(Request $requests)
  {
    try {
    if ($requests->user()->role_id === 1)
    {
      $requests = Requests::orderBy('id', 'ASC')->paginate(5);
      return view('AdminPanel.Request.index')->withRequests($requests);
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

  //функция просмотра заявки
  public function show(Requests $request1, Request $request)
  {
    try {
    if ($request->user()->role_id === 1)
    {
      //var_dump($request1->id);
      return view('AdminPanel/request/show')->withRequest1($request1);
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
}
