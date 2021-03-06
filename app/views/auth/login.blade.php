@extends('layouts.master')

@section('html_head_content')
<title>Login</title>
@stop

@section('title_content')
<ul class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li class="active">Login</li>
</ul>
<div class="row">
  <div class="col-lg-4 col-lg-offset-4 col-md-8 col-md-offset-2">
    <h1>Please Login</h1>
    @stop

    @section('main_content')
    {{ Form::open() }}

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label for="email_field" class="control-label">Email Address:</label>
      {{ Form::text('email', null, array('id' => 'email_field', 'class' => 'form-control')) }}
      @if($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
    </div><!--form-group-->

    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
      <label for="password_field" class="control-label">Password:</label>
      <input type="password" name="password" class="form-control" id="password_field" />
      @if($errors->has('password')) <span class="help-block">{{ $errors->first('password') }}</span> @endif
    </div><!--form-group-->

    <a href="{{ route('auth.remind') }}" class="btn btn-link pull-right">Forgot Password</a>
    <button type="submit" class="btn btn-primary">Login</button>

  </form>
</div><!--col-->
</div><!--row-->
@stop
