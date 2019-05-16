<?php

namespace App\Http\Controllers;

use App\roles;
use App\User;
use App\Problem;
use App\Request as R;
use Illuminate\Http\Request;
use App\Http\Resources\ProblemCollection;
use Carbon\Carbon;
class AdminStatisticController extends Controller
{

    //функция предъявления страницы администратора + проверка прав через костыль
    public function index(Request $request)
    {
      try {
        if ($request->user()->role_id === 1)
        {
          return view('AdminPanel/Statistics/index');
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
    public function create(Request $request)
    {
        try {
            if ($request->user()->role_id === 1) {
                $problems = Problem::orderBy('id')->pluck('name', 'id');
                $time_period = [
                    date('Y-m-d H:i:s', strtotime('-1 month')) => '1 месяц',
                    date('Y-m-d H:i:s', strtotime('-3 month')) => '3 месяц',
                    date('Y-m-d H:i:s', strtotime('-6 month')) => '6 месяцев',
                    date('Y-m-d H:i:s', strtotime('-1 year'))  => '1 год'
                ];
                $graff = [
                    'pie'   => 'Круговой',
                    'bar'   => 'Табличный',
                    'line'  => 'Линейный',
                    'radar' => 'Криволенейный',
                ];
                return view('AdminPanel/Statistics/create', [
                    'problems' => $problems,
                    'time_period' => $time_period,
                    'graff' => $graff
                ]);
            } else {
                return view('/ErrorExp');
            }
        } catch (\Exception $exception) {
            return view('/ErrorExp');
        }
    }
    public function y(Request $request)
    {
        $params = $request->only(['problem_id', 'from', 'to']);
        if (!isset($params['from'])) $params['from'] = date('Y-m-d H:i:s', 0);
        if (!isset($params['to']))   $params['to']   = date('Y-m-d H:i:s');
        //var_dump($params);

        /*
        $requests = R::where('problem_id', '=' , $params['problem_id'])
                     ->whereBetween('created_at', [$params['from'], $params['to']])
                     ->get();
        */

        $requests = R::select('problems.name')
                     ->selectRaw('COUNT(requests.id) AS request_count')
                     ->leftJoin('problems', 'problems.id', '=', 'requests.problem_id')
                     ->groupBy('requests.problem_id')
                     ->whereBetween('requests.created_at', [
                         $params['from'],
                         $params['to'],
                     ])
                     ->get()
                     //->toSql()
                     ;

        //var_dump($requests);
        //var_dump($requests->toArray());
        return ProblemCollection::collection($requests);
    }

}
