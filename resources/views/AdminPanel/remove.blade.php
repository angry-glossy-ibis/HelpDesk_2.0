{{-- Это шаблон формы удаления товара из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Edit product --}}
@section('title', __(''))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

@endsection


<td>{!! Html::linkRoute('AdminPanel/Users/edit', '<img style=' height: 25px; width: 25px;
object-fit: contain' src="'. url('images/1.jpg').'"/>') !!}</td>
