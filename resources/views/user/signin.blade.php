@extends('layouts.master')
@section('title', 'Laravelログイン学習用') {{-- サイトタイトル定義 --}}
@section('content')
<div id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <h1>Sign In</h1>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <form action="" method="post">
                <div class="mb-3">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">ログイン</button>
                {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection