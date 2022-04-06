@extends('admin.layouts.dashboard')
@section('title', 'All Users')
@section('content')

<div class="row">
<!------------------------- left section  ---------------------------->
<div class="col-lg-7 col-sm-12  ">
    <div class="row p-1"> 
        <div class="card">
            <p class="text-attive">
                <span class="text-acttive"> All </span> 
                <span class="text-attive"> Active</span>
                <span class="text-attive">Scheduled</span>
                <span class="text-attive"> Expired</span>                
            </p>
        </div>
    </div>
        
    <div class="row mt-2 p-1">           
        <input type="text" placeholder="Search" id="generalSearch" class="form-control p-2">               
    </div>

    <div class="row mt-2 p-2 bg-white">           
        <div class="p2 ">   
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Sno.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Publish</th>
                        <th scope="col">Date/Time</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td scope="row" class="sorting_1">1</td>
                        <td>BRIDAL JUTTI FEARL</td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt"></i></a>                                              
                                <span> <a href="http://127.0.0.1:8000/admin/users/1/edit" title="Edit"><i class="fas faslli fa-pen"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">2</td>
                        <td>MOM KI CHAPPAL  </td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt"></i></a>                                              
                                <span> <a href="http://127.0.0.1:8000/admin/users/1/edit" title="Edit"><i class="fas faslli fa-pen"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">3</td>
                        <td>BRIDAL JUTTI</td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt"></i></a>                                              
                                <span> <a href="http://127.0.0.1:8000/admin/users/1/edit" title="Edit"><i class="fas faslli fa-pen"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">4</td>
                        <td>BRIDAL JUTTI FEARL</td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt"></i></a>                                              
                                <span> <a href="http://127.0.0.1:8000/admin/users/1/edit" title="Edit"><i class="fas faslli fa-pen"></i></a> </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>  
        </div>      
    </div>
       
    
</div>
<!------------------------- left section end  ---------------------------->
<!------------------------- Right section  ---------------------------->
<div class="col-lg-5 col-sm-12 ">
    <div class="row p-1">
    <div class="card H-100"></div>
    </div>
</div>
<!------------------------- Right section end ---------------------------->
</div>



@endsection