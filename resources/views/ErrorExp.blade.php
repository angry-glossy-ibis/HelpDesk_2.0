<!DOCTYPE html>
<style>
  .center {
    text-align: center;
  }
</style>
<div class = "center">

  <div class="content">
      <div class="title m-b-md">
          У ВАС НЕДАСТАТОЧНО ПРАВ ДЛЯ ПРОСМОТРА ДАННОЙ СТАНИЦЫ
      </div>
      <div class="button">
        <p><a style="font-size: 1.2em;" class="col-4 btn btn-success" href="{{ url('/') }}">{{__('Вернуться на свою страницу')}}</a></p>
        <p><a style="font-size: 1.2em;" class="col-4 btn btn-success" href="{{ route("login") }}">{{__('Войти')}}</a></p>
      </div>
  </div>

</div>
