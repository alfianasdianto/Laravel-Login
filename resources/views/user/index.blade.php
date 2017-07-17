@extends('admin.admin_template')
@section('content')
  @if(session('message'))
    <div class="alert alert-success">{{session('message')}}<button class="close" data-dismiss="alert" type="button">×</button></div>
  @endif

    <div class="row">
      <div class="col-md-2">
        <a href="{{ route('users.create') }}"><button class="btn btn-block btn-info">Add User</button></a>
      </div>
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1; ?>
              @foreach ($list_user as $row)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>
                    <a href="{{ route('users.edit', $row->id) }}" class="btn btn-sm btn-primary" href="" title="Edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a href="{{ route('users.delete', $row->id) }}" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda benar ingin menghapus ini?');"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                  </td>
                </tr>
              <?php $no++; ?>
              @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->


@endsection

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "searching" : true,
    });
  });
</script>