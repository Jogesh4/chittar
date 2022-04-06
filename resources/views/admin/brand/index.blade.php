@extends('admin.layouts.dashboard')
@section('title', 'All Brands')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
                                          <h3 class="mb-2 main-heading">Brands</h3>

    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="table-responsive bg-white p-3">
                            <table class="table table-head-fixed text-nowrap" id="example">
                                <thead>
                                  <tr>
                                     <th>SNo</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @if($brands->count() > 0)
                                    @foreach($brands as $brand)
                                    <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td><a  style="text-decoration: underline;" href="{{ route('admin.brands.edit', $brand->id) }}">{{ $brand->name }}</a></td>
                                      <td>
                                                      @if($brand->is_active)
                                                              @php $statusBtn = '<a title="Deactivate" href="'. route('change_status', ['type' => 'brand', 'id' => $brand->id, 'status' => '0']) .'" class="btn btn-danger btn-sm"><i class="fa fa-user-times" aria-hidden="true"></i></a>' @endphp
                                                                  Active
                                                              @else
                                                                  @php $statusBtn = '<a title="Activate" href="'. route('change_status', ['type' => 'brand', 'id' => $brand->id, 'status' => '1']) .'" class="btn btn-success btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i></a>' @endphp
                                                                  Deactive
                                                              @endif
                                      </td>
                                      <td>
                                                              {!! $statusBtn !!}
                                                              {{-- <a style="text-decoration: underline;" href="{{ route('admin.categories.edit', $brand->id) }}"><span class="btn btn-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></a> --}}
                                                              <!-- <button class="btn btn-warning" ><i class="fa fa-plus" aria-hidden="true"></i></button> -->
                                      </td>
                                    </tr>
                                    @endforeach
                                  @else
                                    <tr>
                                      <td colspan="5">No Data</td>
                                    </tr>
                                  @endif
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content -->
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js" defer></script>

<script>



    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                 ''
            ]
        } );

} );

    
</script>