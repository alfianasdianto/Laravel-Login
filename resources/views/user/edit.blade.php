@extends('admin.admin_template')
@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit User</h3>
  </div>

	{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'class' => 'form-horizontal', 'required' => 'required'] ) !!}

	{!! Form::token() !!}

	<div class="form-group">
		<label for="field-ta" class="col-sm-3 control-label">Name</label>
		
		<div class="col-sm-5">
			{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control autogrow', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group">
		<label for="field-ta" class="col-sm-3 control-label">Email</label>
		
		<div class="col-sm-5">
			{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control autogrow', 'required' => 'required')) !!}
		</div>
	</div>
	<div class="form-group">
		<label for="field-ta" class="col-sm-3 control-label">Passowrd</label>
		
		<div class="col-sm-5">
			{!! Form::text('password_change', null, array('placeholder' => 'Password','class' => 'form-control autogrow')) !!} *Isi jika ingin mengubah password
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-3"> </div>
		
		<div class="col-sm-5">
			<button type="submit" class="btn btn-green btn-icon icon-left" name="save">
			Save
			<i class="entypo-check"></i>
			</button>
		</div>
	</div>


	</form>
</div>

@endsection