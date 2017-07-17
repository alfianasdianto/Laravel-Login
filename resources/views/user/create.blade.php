@extends('admin.admin_template')
@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add User</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('users.store') }}">
    {{ csrf_field() }}
    <div class="box-body">
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">

        @if ($errors->has('password'))
            <span class="help-block"x>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection