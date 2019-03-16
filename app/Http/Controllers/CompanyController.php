<?php

namespace App\Http\Controllers;

use App\client;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\StoreModalCompanyRequest;

class CompanyController extends Controller
{
    //функция загрузки данных из бд таблицы компании
    public function index(Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        $compan = Company::orderBy('id', 'ASC')->paginate(5);
        return view('AdminPanel/Companis.index')->withCompan($compan);
      }
      else
      {
        return view('/ErrorExp');
      }
        }catch (\Exception $exception) {
        return view('/ErrorExp');
  }
    }

    //функция создания компании
    public function create(Company $compan, Request $request)
    {
      try {
      if ($request->user()->role_id === 1 or $request->user()->role_id === 2)
      {
        return view('AdminPanel/Companis.create')->withCompan($compan, $request);
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
    public function store(StoreCompanyRequest $request)
    {
      $attributes = $request->only(['CompName', 'CompMail', 'CompPhone']);
      //var_dump($attributes);
      $compan1 = Company::create($attributes);
      return redirect(route('AdminPanel/Companis/index'));
    }

    public function storemodal(StoreModalCompanyRequest $request)
    {
      $attributes = $request->only(['CompName', 'CompMail', 'CompPhone']);
      //var_dump($attributes);
      $compan1 = Company::create($attributes);
      return redirect(route('requests.create'));
    }

    //функция просмотра компании
    public function show(Company $company1, Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        //var_dump($company1->id);
           return view('AdminPanel/Companis.show')->withCompany1($company1);
      }
      else
      {
        return view('/ErrorExp');
      }
    }catch (\Exception $exception) {
      return view('/ErrorExp');
  }

    }

    //функция изменения компании
    public function edit(Company $company1, Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        return view('AdminPanel/Companis.edit')->withCompany1($company1);
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
    public function update(StoreCompanyRequest $comp, Company $company1)
    {
        $atributcomp = $comp->only(['CompName', 'CompMail', 'CompPhone']);
        $company1 -> update($atributcomp);
        return redirect(route('AdminPanel/Companis.index'));
    }

    //
    public function remove(Company $company1, Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        //var_dump($company1->id);
          return view('AdminPanel/Companis.remove')->withCompany1($company1);
      }
      else
      {
        return view('/ErrorExp');
      }
    }catch (\Exception $exception) {
    return view('/ErrorExp');
}
    }
}
