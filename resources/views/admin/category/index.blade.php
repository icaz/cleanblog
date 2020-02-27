@extends('admin.layouts.app')
@section('style')
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection


@section('content')
          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper text-white bg-dark ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Spisak kategorija</h1>
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
            <div class="card text-white bg-dark text-center">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-dark table-hover table-sm" style="width:100%">
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
                @foreach ($categories as $category)
                  <tr> 
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><a href="{{ route('category.edit',$category->id) }}"><span class="fas fa-edit"></span></a></td>
                    <td><form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy',$category->id) }}" style="display: none">
                      @csrf
                      @method('DELETE')
                          </form>
                            <a href="" onclick="
                                if(confirm('Da li ste sigrini?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $category->id }}').submit();
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

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- DataTables -->
        <div class="row">
          <div class="col-12">
            
              <!-- /.card-header -->
              
                
                <div class="card text-white bg-dark card-success card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Dodajte novu kategoriju</h5>
                  </div>
                  <div class="card-body">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Kategorija...">
                      <div class="input-group-append">
                        <button class="btn btn-success" type="button">Dodaj novu kategoriju</button>
                      </div>
                    </div>
    
                  </div>
                </div>
                    
              </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->


@endsection
@section('js')



    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "pagingType": "simple_numbers",
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "language": {
            "paginate": {
              "first":      "<<",
              "last":       ">>",
              "next":       ">",
              "previous":   "<"
            },
          }
        });
      });
    </script>
        
@endsection
