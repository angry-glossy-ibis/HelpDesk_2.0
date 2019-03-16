<?php

namespace App\Http\Controllers;

use App\Request as R;
use App\Client;
use App\State;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\MailRequest;

class RequestController extends Controller
{
    //
    public function index(Request $request)
    {

        $requests1 = R::orderBy('id', 'ASC')->paginate(10);
        return view('requests.index')->withRequests1($requests1);

    }

    //функция создания заявки
    public function create(Request $request, Company $compan)
    {
      try {
        if ($request->user()->role_id === 2)
        {
          $requests = new R();
          $companies = Company::orderBy('id')->pluck('CompName', 'id');
          return view('requests.create', compact('requests', 'companies', 'compan'));
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //функция записи в бд данных о клиенте и заявки
    public function store(StoreRequest $requests, Client $client)
    {
        $client = new Client();
        $attributes = $requests->only(['ClientSurname', 'ClientName', 'ClientPatronymic', 'ClientMail', 'ClientPhone', 'company_id', 'summary', 'name', 'user_id', 'state_id']);
        $attributes1 = $requests->only(['summary', 'name', 'state_id']);
        $attributes1['user_id'] = $requests->user()->id;
        $client = Client::create($attributes);
        $attributes1['client_id'] = $client->id;
        $req = R::create($attributes1);
        return redirect(route('requests.storereq'));
    }
    //функция возврата на началную страницу сотрудника после успешного создания заявки
    public function storereq()
    {
      $requests1 = R::orderBy('id', 'ASC')->paginate(5);
      return view('requests.index')->withRequests1($requests1);
    }

    //
    public function show(request $request)
    {
        //
    }

    //
    public function edit(R $request1)
    {
    //  var_dump($request1->state->name);
    }

    //
    public function update(Request $request, R $request1)
    {
      $request1->state_id = 3;
      $request1->save();
      return redirect(route('requests.index'));
    }

    //
    public function destroy(request $request)
    {
        //
    }

    public function blackboardmove(request $input)
    {
      $attributes = $input->only(['state_id','request_id']);
      $state = State::find($attributes['state_id']);
      $request = R::find($attributes['request_id']);
      $request->state_id = $state -> id;
      $request->save();
    }
}
