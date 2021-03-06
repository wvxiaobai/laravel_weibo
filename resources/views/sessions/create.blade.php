@extends('layouts.default')
@section('title','登陆')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>登陆</h5>
            </div>

            <div class="card-body">
                @include('shared._errors')

                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('name') }}" />
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name=passwordemail" class="form-control" value="{{ old('password') }}" />
                    </div>

                    <button type="submit" class="btn btn-primary">登陆</button>
                </form>

                <hr>

                <p>还没有账号？<a href="{{ route('sigup') }}">现在注册！</a></p>
            </div>
        </div>
    </div>
@stop