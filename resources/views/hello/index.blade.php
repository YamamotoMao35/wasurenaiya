@extends('layouts.helloapp')
<style>
  .pagination{font-size:10px;}
  .pagination li{display:inline-block}
  tr th a:link{color: white;}
  tr th a:visited{color: white;}
  tr th a:hover{ color: white;}
  tr th a:active{color: white;}
</style>

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<!-- ミドルウェアの説明 -->
<p>これは、<middleware>localhost:8000/hello/add</middleware>へのリンクです。</p>
<p>これは、<middleware>localhost:8000/wasurenaiya</middleware>へのリンクです。</p>
<p>これは、<middleware>localhost:8000/home</middleware>へのリンクです。</p>
<!-- ログイン認証 -->
@if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">新規登録</a>)</p>
@endif
<!-- データの説明 -->
<table>
  <tr>
    <th><a href="/hello?sort=name">Name</a></th>
    <th><a href="/hello?sort=mail">Mail</a></th>
    <th><a href="/hello?sort=age">Age</a></th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
  @endforeach
</table>
<div class="mt-3">
{{$items->appends(['sort' => $sort])->links()}}
</div>
@endsection

@section('footer')
copyright 2019 wasurenaiya.
@endsection