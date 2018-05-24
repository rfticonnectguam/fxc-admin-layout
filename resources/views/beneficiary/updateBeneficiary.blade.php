@extends('layout.app')

@section('title', 'Remitter')

@section('content')
  <div class="updateRemitterModule">
      <div class="row">
          <div class="col-md-12">
            <div class="content-header">
                <div class="row">
                    <div class="col-md-6">
                       <h4> <i class="fa fa-user" aria-hidden="true"></i> Remitter</h4>
                    </div>
                </div>
              </div>
          </div>
      </div>

      <hr/>
      <div class="row">
          <div class="col-md-8">
              <!-- <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                          <div class="row dashboardBtn">

                                <div class="col-md-4">
                                  <div class="alert alert-btn" role="alert">
                                 
                                    <p class="alert-heading">Remittance  <span class="badge badge-danger pull-right">2</span></p>
                                    <hr>
                                         <button class="btn btn-sm btn-primary ">
                                                  New Remittance
                                         </button>
                                        <div>
                                    </div>
                                  </div> 
                              </div> 

                          </div>
                      </div> 
                  </div>
              </div> 
              
              <br/> -->

              <div class="row">
                  <div class="col-md-12">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item" aria-current="page">
                              <a href="{{URL::to('/remitter')}}">Remitter
                              </a></li>
                          <li class="breadcrumb-item" aria-current="page">
                              <a href="{{URL::to('/show-remitter-info')}}"> Remitter Info</a></li>
                              <li class="breadcrumb-item" aria-current="page">
                              <a href="{{URL::to('/show-remitter-beneficiaries')}}"> Beneficiaries</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Update Beneficiary</li>
                        </ol>
                      </nav>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                        <div class="row">
                            <div class="col-md-6">
                              
                            </div>
                         </div>

                         <br/>
                          
                        <form>
                           <div class="row">

                                <div class="col-md-12">
                                   <h6 class="box-header">Personal Information</h6>
                                   <br/>
                                </div>

                                 <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Middle Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-md-12">
                                    <hr/>
                                  </div>

                                   <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Date</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                   <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Place</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                   <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Contact</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-md-12">
                                    <br/>
                                     <h6 class="box-header">Address</h6>
                                     <hr/>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Room No./Bldg.</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Street</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">District</label>
                                        <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Sate</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>

                                   <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Country Code</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>

                                 <div class="col-md-12 updateInfoBtnDiv">
                                    <br/>
                                      <button  class="btn btn-crm btn-primary">UPDATE</button>
                                       <br/>
                                        <br/>
                                  </div> 
                           </div>
                        </form>


                         {{-- <div class="col-md-6">
                            <button class="btn btn-crm btn-primary">
                                <i class="fas fa-plus-circle"></i> Add New Remitter
                            </button>
                          </div> --}}
                      </div> <!--box-default-->
                  </div> <!--col-md-12-->
              </div> <!--row -->
              
              <br/>

          </div>{{--  col-md-8 --}}

          
           @include('layout.rates')
           
      </div>



  </div> <!--showRemittersModule-->
@endsection

@section('script')
   
@endsection