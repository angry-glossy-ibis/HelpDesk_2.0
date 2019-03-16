<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Request as R; // Модель
use App\Client;
use App\State;
use App\Http\Resources\StateCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Request as X; // Валидатор
use App\Company;
use Mail;
use App\Http\Requests\ZajavkaRequest;
use App\Http\Requests\MailRequest;
use Webklex\IMAP\Client as IMAPCLIENT;
class WorkerController extends Controller
{
    //функция загрузки данных из бд таблицы заявки
    public function index(Request $request)
    {
      try {
        if ($request->user()->role_id === 2)
        {
          return view('WorkerPanel.index');
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
    public function parsing($folderPath = null, Request $request)
    {
      $oClient = new IMAPClient([
    'host'          => 'imap.yandex.ru',
    'port'          => 993,
    'encryption'    => 'ssl',
    'validate_cert' => true,
    'username'      => 'sergiuspubg',
    'password'      => '174630THD295',
    'protocol'      => 'imap'
    ]);
          $oClient->connect();
          $aFolder = $oClient->getFolders();
          $messages = [];
          foreach($aFolder as $oFolder){
            $messages[] = $oFolder->messages()->all()->get();
          }
          //var_dump($messages);
        return view('WorkerPanel.parsing')->withMessages($messages);
    }

    //
    public function store()
    {
        //
    }

    //функция просмотра заявки
    public function show(R $request1, Request $request)
    {
      try {
        if ($request->user()->role_id === 1 or $request->user()->role_id === 2)
        {
          return view('WorkerPanel.show')->withRequest1($request1);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //функция изменения заявки
    public function edit(R $request1, Request $request)
    {
      try {
        if ($request->user()->role_id === 2)
        {
          $state = State::orderBy('id')->pluck('name', 'id');
          return view('WorkerPanel.edit', compact('request1', 'state'));
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    //функция записи в бд изменений
    public function update(X $r,R $request1)
    {
          $atributrequest = $r->only(['name', 'summary', 'comm', 'state_id']);
          $atributclient = $r->only(['ClientSurname', 'ClientName', 'ClientPatronymic']);
          $request1->update($atributrequest);
          $request1 ->client->update($atributclient);
          return redirect(route('requests.index'));
    }

    //
    public function remove(R $request1, Request $request)
    {
      try {
        if ($request->user()->role_id === 2)
        {
          return view('WorkerPanel.remove')->withRequest1($request1);
        }
        else
        {
          return view('/ErrorExp');
        }
            } catch (\Exception $exception) {
          return view('/ErrorExp');
        }
    }

    public function destroy(R $request1)
    {
      //var_dump($request1->id);
      $request1->delete();
      return redirect(route('WorkerPanel.index'));
    }

    public function sendmail(MailRequest $request)
    {
      $attributes = $request->only('email', 'subject', 'description');
      $to = $attributes['email'];
      $subject = $attributes['subject'];
      $message = $attributes['description'];
      $result = mail($to, $subject, $message);
      echo $result ? 'OK' : 'Error';

    }

    public function CreateMail()
    {
      $workers = 0;
      return view('WorkerPanel.CreateMail')->withWorkers($workers);
    }

//======================================Users================================
    public function redirection()
    {
      $role = Auth::user()->role_id;
      if ($role == '1')
      {
        return redirect(route('AdminPanel.index'));
      } else
      {
         return redirect(route('WorkerPanel.index'));
      }
    }
    public function blackboard(Request $request)
    {
         return view('WorkerPanel.blackboard');

    }

    public function Errorprin()
    {
      return view('/ErrorExp');
    }

    public function agileaxiss()
    {
      $states = State::orderBy('id', 'ASC')->get();
      return StateCollection::collection($states);
    }
}
