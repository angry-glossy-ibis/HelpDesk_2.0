@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("redirection") }}">{{__('назад')}}</a>
</div>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
