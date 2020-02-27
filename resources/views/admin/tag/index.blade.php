@extends('admin.layouts.app')
@section('style')
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection


@section('content')
          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Spisak tagova</h1>
          </div>
          
<!-- BreadCrumbs 

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Početna</a></li>
              <li class="breadcrumb-item active">Info</li>
            </ol>
          </div>
-->          
          
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- DataTables -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tag</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
              <tbody>
                @foreach ($tags as $tag)
                  <tr> 
                    <td>{{ $tag->id}}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td><a href="{{ route('tag.edit',$tag->id) }}"><span class="fas fa-edit"></span></a></td>
                    <td><form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('tag.destroy',$tag->id) }}" style="display: none">
                      @csrf
                      @method('DELETE')
                          </form>
                            <a href="" onclick="
                                if(confirm('Da li ste sigrini?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $tag->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="text-danger fas fa-trash"></span></a></td>
                  </tr>
                @endforeach
              </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Tag</th>
                      <th>Slug</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  
          </div>
          <!-- /.col -->
        </div>
          <!-- /.DataTables -->


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('js')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

@endsection

