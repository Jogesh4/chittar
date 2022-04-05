@extends('admin.layouts.dashboard')
@section('title', 'All Users')
@section('content')
<div class="container-fluid">         
                                          <h3 class="mb-2 main-heading">Costumers</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="table-responsive bg-white p-3">
                            <table class=" table table-justified" id="example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                         <th>Name</th> 
                                         <th>Email</th> 
                                         <th>Phone</th> 
                                         <th>Publish</th> 
                                        <th></th>
                                    </tr>
                                 </thead>
                                   @if(!empty($users))
                                   @foreach($users as $user)
                                      <tr>
                                          <td scope="row">{{ $loop->iteration }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td> 
                                          <td>9876768543</td> 
                                          <td> <div class="form-check form-switch">
                                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>                                   
                                            </div></td> 
                                          
                                          <td>
                                              <div class="actions">
                                              <a href="#" title="Delete"><i class="fas faslli fa-trash-alt"></i></a>
                                              <span> <a href="#" title="Profile"><i class="fas faslli fa-user"></i></a> </span>
                                              <span> <a href="{{ route('admin.users.edit', $user->id) }}" title="Edit"><i class="fas faslli fa-pen"></i></a> </span>
                                              <span> <a href="#" title="Mail"><i class="fas faslli fa-mail-bulk"></i></a> </span>
                                              </div>
                                              </td>
                                      </tr>
                                      @endforeach
                                      @else
                                         <div class="text-center">
                                              <h3>No User Found</h3>
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
