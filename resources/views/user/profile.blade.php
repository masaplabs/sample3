@extends('layouts.master')
@section('title', 'Laravelログイン学習用') {{-- サイトタイトル定義 --}}
@section('content')
<div id="page-content">
  <div style="margin-top: 30px; text-align: center;"><h3>プロフィール</h3></div>
    <div style="margin-top: 30px;">
      <table class="table table-striped">  
        <tr>
          <th>氏名</th>
          <td>{{ Auth::user()->name }}</td>
        </tr>  
        <tr>
          <th>メールアドレス</th>
          <td>{{ Auth::user()->email }}</td>
        </tr>  
        <tr>
          <th>住所（エリア）</th>
          <td>{{ Auth::user()->area }}</td>
        </tr>
        <tr>
          <th>プログラム経験年数</th>
          <td>{{ Auth::user()->experience }}</td>
        </tr>
      </table>
    </div>
</div>
@endsection