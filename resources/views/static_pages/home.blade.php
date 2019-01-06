@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在所看到的是<a href="https://plugs.google.com">Laravel Admin Banckend</a>
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">Sign</a>
    </p>
  </div>
@stop
