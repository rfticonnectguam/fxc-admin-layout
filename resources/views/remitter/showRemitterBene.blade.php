@extends('layout.app')

@section('title', 'Remitter')

@section('content')
  <div class="showRemittersBeneModule">
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
                           <li class="breadcrumb-item active" aria-current="page">Beneficiaries</li>
                        </ol>
                      </nav>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                        <div class="row">
                          <div class="col-md-6">
                             <h6 class="box-header"><i class="fas fa-users"></i> Beneficiaries</h6>
                          </div>
                          <div class="col-md-6">
                            
                            <!-- <a href="{{URL::to('/show-remitter-beneficiaries')}}" class="btn btn-crm actionBtn btn-primary float-right ">
                                 <i class="fas fa-users"></i> BENEFICIARIES
                            </a>-->

                            <button class="btn btn-crm actionBtn btn-primary float-right mr-1">
                                <i class="fas fa-plus-circle"></i> ADD
                            </button>
                          </div>
                         </div>

                         <br/>
                         
                         <div class="row">
                            <div class="col-md-12">
                             
                              <table class="table table-bordered RemittersListTbl">
                                <thead>
                                <col width="30%">
                                 <col width="30%">
                                 <col width="40%">
                                  <tr class="fxc-primary">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="actionHead">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    <td scope="row">1XJI21415</td>
                                    <td>Lorem, Ipsum dolor</td>
                                     <td class="TblActionBtn">
                                        <button class="btn btn-sm btn-crm viewBtn">
                                          <i class="far fa-eye"></i> View
                                        </button>
                                        <button class="btn btn-sm btn-crm btn-warning viewBtn">
                                          <i class="far fa-eye"></i> Edit
                                        </button>
                                        <a href="{{URL::to('/remitter-payment')}}" class="btn btn-sm btn-crm btn-primary useBtn">
                                          <i class="far fa-money-bill-alt"></i> Remit
                                        </a>
                                     </td>
                                  </tr> 
                                </tbody>
                              </table>

                           <!-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav>  -->
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



  </div> <!--showRemittersModule-->
@endsection

@section('script')
   
@endsection