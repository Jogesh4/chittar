@extends('admin.layouts.dashboard')
@section('title', 'All Items')
@section('content')
<div class="container-fluid">         
                                                              <h3 class="mb-2 main-heading">Products</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="table-responsive bg-white p-3">
                            <table class="table table-head-fixed text-nowrap" id="example">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @if($items->count() > 0)
                                    @foreach($items as $item)
                                    <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td><a style="text-decoration: underline;" href="{{ route('admin.items.edit', $item->id) }}">{{ $item->name }}</a></td>
                                      <td>{{ $item->category->name }}</td>
                                      <td>Rs.{{ $item->price }}</td>
                                      <td>@if($item->is_active)
                                                              @php $statusBtn = '<a title="Deactivate" href="'. route('change_status', ['type' => 'item', 'id' => $item->id, 'status' => '0']) .'" class="btn btn-danger btn-sm"><i class="fa fa-user-times" aria-hidden="true"></i></a>' @endphp
                                                                  Active
                                                              @else
                                                                  @php $statusBtn = '<a title="Activate" href="'. route('change_status', ['type' => 'item', 'id' => $item->id, 'status' => '1']) .'" class="btn btn-success btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i></a>' @endphp
                                                                  Deactive
                                                              @endif</td>
                                      <td>
                                                              {!! $statusBtn !!}
                                                              <a style="text-decoration: underline;" href="{{ route('admin.items.edit', $item->id) }}"><span class="btn btn-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></a>
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
                </div>
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
