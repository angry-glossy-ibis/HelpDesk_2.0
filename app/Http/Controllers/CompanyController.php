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
        $compan = Company::orderBy('id', 'ASC')->paginate(20);
        return view('AdminPanel/Companies.index')->withCompan($compan);
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
        return view('AdminPanel/Companies.create')->withCompan($compan, $request);
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
      return redirect(route('AdminPanel/Companies/index'));
    }

    public function storemodal(StoreModalCompanyRequest $request)
    {
      $attributes = $request->only(['CompName', 'CompMail', 'CompPhone']);
      //var_dump($attributes);
      $compan1 = Company::create($attributes);
      return redirect(route('requests.create'));
    }

    //функция просмотра компании
    public function show(Company $company, Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        //var_dump($company1->id);
           return view('AdminPanel/Companies.show')->withCompany($company);
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
    public function edit(Company $company, Request $request)
    {
      try {
      if ($request->user()->role_id === 1)
      {
        return view('AdminPanel/Companies.edit')->withCompany($company);
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
    public function update(StoreCompanyRequest $comp, Company $company)
    {
        $atributcomp = $comp->only(['CompName', 'CompMail', 'CompPhone']);
        $company->update($atributcomp);
        return redirect(route('AdminPanel/Companies/index'));
    }

    //
    public function remove(Company $company, Request $request)
    {
        try {
            if ($request->user()->role_id === 1) {
                return view('AdminPanel/Companies.remove')->withCompany($company);
            } else {
                return view('/ErrorExp');
            }
        } catch (\Exception $exception) {
            return view('/ErrorExp');
        }
    }

    public function destroy(Company $company, Request $request)
    {
        $company->delete();
        return redirect(route('AdminPanel/Companies/index'));
    }
}
