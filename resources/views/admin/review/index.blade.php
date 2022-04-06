@extends('admin.layouts.dashboard')
@section('title', 'All Reviews')
@section('content')
<div class="container-fluid">         
                                          <h3 class="mb-2 main-heading">Reviews</h3>

                    <div class="row">
                    <div class="col-lg-12">

                            <div class="table-responsive bg-white p-3">
                            <table class="table table-justified" id="example">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Review</th>
                                        <th>Images</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                    </tr>
                                 </thead>
                                @if($reviews->count() > 0)  
                                     @foreach($reviews as $review)                              
                                      <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $review->description }}</td>
                                            <td>
																							<div class="row mt-2">
																										<div class="col-md-12 col-lg-12 form-outline mb-2">
																												@if(!empty($review->image))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image) ? asset('storage/'.$review->image) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image1))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image1) ? asset('storage/'.$review->image1) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image2))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image2) ? asset('storage/'.$review->image2) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image3))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image3) ? asset('storage/'.$review->image3) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																													
																										</div>
																						</div>
																						</td>

                                            <td>
                                                      @if($review->status)
                                                              @php $statusBtn = '<a title="Deactivate" href="'. route('change_status', ['type' => 'review', 'id' => $review->id, 'status' => '0']) .'" class="btn btn-danger btn-sm"><i class="fa fa-user-times" aria-hidden="true"></i></a>' @endphp
                                                                  Active
                                                              @else
                                                                  @php $statusBtn = '<a title="Activate" href="'. route('change_status', ['type' => 'review', 'id' => $review->id, 'status' => '1']) .'" class="btn btn-success btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i></a>' @endphp
                                                                  Deactive
                                                              @endif
                                            </td>
                                             <td>
                                                              {!! $statusBtn !!}
                                                              {{-- <a style="text-decoration: underline;" href="{{ route('admin.categories.edit', $review->id) }}"><span class="btn btn-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i></span></a> --}}
                                               </td>
                                            
                                      </tr>
                                      @endforeach
                                  @else
                                         <div class="text-center">
                                              <h3>No Order Found</h3>
                                         </div>
                                      @endif
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
