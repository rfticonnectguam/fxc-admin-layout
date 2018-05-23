@extends('layout.app')

@section('title', 'Remitter')

@section('content')
  <div class="showRemittersInfoModule">
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
                          <li class="breadcrumb-item active" aria-current="page">
                              <a href="{{URL::to('/show-remitter-info')}}"> Remitter Info</a></li>
                        </ol>
                      </nav>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                        <div class="row">
                          
                          <div class="col-md-12">
                            
                             <button  class="btn btn-crm actionBtn btn-primary float-right mr-1">
                               <i class="fas fa-edit"></i> UPDATE
                            </button>
                            <a href="{{URL::to('/show-remitter-beneficiaries')}}" class="btn btn-crm actionBtn btn-primary float-right mr-1 ">
                                 <i class="fas fa-users"></i> BENEFICIARIES
                            </a>

                            <button  data-toggle="modal" data-target="#UseExistingBeneModal" class="btn btn-crm actionBtn btn-primary float-right mr-1">
                                <i class="far fa-money-bill-alt"></i> REMIT
                            </button>

                           
                          </div>
                         </div>

                         <br/>
                         
                         <div class="row">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead>
                                     <col width="50%">
                                     <col width="50%">
                                    <tr class="bg-primary">
                                      <td scope="col" colspan="2" class="fxc-primary" >
                                       Personal Information
                                      </td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td scope="row">First Name</td>
                                      <td scope="row">Lorem</td>
                                    </tr>
                                     <tr>
                                      <td scope="row">Middle Name</td>
                                      <td scope="row">Dolor</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Last Name</td>
                                      <td scope="row">Ipsum</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Birth date</td>
                                      <td scope="row">01/02/1996</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Birth Place</td>
                                      <td scope="row">New York</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Email</td>
                                      <td scope="row">lorem.impus@gmail.com</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Mobile</td>
                                      <td scope="row">+1 0290 131 123</td>
                                    </tr>
                                    
                                    <tr>
                                     <td scope="row">Contact</td>
                                      <td scope="row">759 900 193</td>
                                    </tr>

                                    <tr>
                                     <td scope="col" colspan="2" class="fxc-primary" >
                                        Address
                                      </td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Room No./Bldg.</td>
                                      <td scope="row">#23 Blk 2 Lot 2</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Street</td>
                                      <td scope="row">#23 Blk 2 Lot 2</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Distric</td>
                                      <td scope="row">Lorem</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Sate</td>
                                      <td scope="row">USA</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">City</td>
                                      <td scope="row">Ipsum </td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Country Code</td>
                                      <td scope="row">USA</td>
                                    </tr>


                                    <tr>
                                     <td scope="col" colspan="2" class="fxc-primary">
                                        Other Information
                                      </td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Occupation</td>
                                      <td scope="row">Software Engineer</td>
                                    </tr>
                                    <tr>
                                     <td scope="row">ID 1</td>
                                      <td scope="row"></td>
                                    </tr>
                                    <tr>
                                     <td scope="row">ID 2</td>
                                      <td scope="row"></td>
                                    </tr>
                                    <tr>
                                     <td scope="row">Mabuhay Miles</td>
                                      <td scope="row"></td>
                                    </tr>
                                   
                                  </tbody>
                                </table>
                            </div>
                         </div>



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

          
           <div class="col-md-4 ratesDiv">
              <div class="box-default">
                  <table class="table table-bordered">
                    <thead>
                       <col width="50%">
                       <col width="50%">
                      <tr>
                        <td scope="col" colspan="2" class="bg-primary">
                        <i class="fas fa-money-bill-alt"></i> FEES</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">Service Fee(US)</td>
                        <td scope="row">$2.00</td>
                      </tr>
                      <tr>
                       <td scope="row">Service Fee(SGD)</td>
                        <td scope="row">$2.62</td>
                      </tr>
                      <tr>
                        <td scope="row">Service Fee(HKD)</td>
                        <td scope="row">$15.17</td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-bordered">
                    <thead >
                       <col width="50%">
                       <col width="50%">
                      <tr>
                        <td scope="col" colspan="2" class="bg-primary">
                        <i class="fas fa-chart-line"></i> RATES</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">USD</td>
                        <td scope="row">$52.13</td>
                      </tr>
                      <tr>
                        <td scope="row">SGD</td>
                        <td scope="row">$39.59</td>
                      </tr>
                      <tr>
                        <td scope="row">HKD</td>
                        <td scope="row">$6.64</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>

       @include('remitter.modals.remitterInfoModal');

  </div> <!--showRemittersModule-->
@endsection

@section('script')
   
@endsection