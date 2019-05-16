<?php

namespace App\Http\Controllers;

use App\Request as R;
use App\Client;
use App\State;
use App\Company;
use App\Problem;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\MailRequest;

class RequestController extends Controller
{
    //
    public function index(Request $request)
    {

        $requests1 = R::orderBy('id', 'ASC')->paginate(20);
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
          $problems = Problem::orderBy('id')->pluck('name', 'id');
          return view('requests.create', compact('requests', 'companies', 'compan', 'problems'));
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
    {   $attributes = $requests->only(['ClientSurname', 'ClientName', 'ClientPatronymic', 'ClientMail', 'ClientPhone', 'company_id', 'summary', 'problem_id', 'user_id', 'state_id']);
        $dbmail = Client::where('ClientMail', '=', $attributes['ClientMail'])->first();
        //var_dump($attributes);
        //var_dump($dbmail);
        if (empty($dbmail)) {
          $client = new Client();
          $attributes1 = $requests->only(['summary', 'name', 'state_id']);
          $client = Client::create($attributes);
          $attributes['client_id'] = $client->id;
          //var_dump($attributes1);
        } else {

        }
      //  var_dump($attributes);
        $attributes['user_id'] = $requests->user()->id;
        //var_dump($attributes1);
        $req = R::create($attributes);
        return redirect(route('requests.storereq'));
    }
    //функция возврата на началную страницу сотрудника после успешного создания заявки
    public function storereq()
    {
      $requests1 = R::orderBy('id', 'ASC')->paginate(20);
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
    public function find(Request $request)
    {
      //var_dump($request->get('q'));
        return Problem::where('name', 'LIKE', '%'.$request->get('q') . '%')->get();
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
