@extends('layout.app')

@section('title', 'Remitter')

@section('content')
  <div class="showRemittersModule">
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
                          <li class="breadcrumb-item active" aria-current="page">Remitter</li>
                        </ol>
                      </nav>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                        <div class="row">
                          <div class="col-md-6">
                            <button class="btn btn-crm btn-primary">
                                <i class="fas fa-plus-circle"></i> Add New Remitter
                            </button>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search Remitter" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class=" btn btn-crm btn-primary ml-1" >search</button>
                            </div>
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

              <div class="row">
                  <div class="col-md-12">
                      <div class="box-default">
                       
                           <h6 class="box-header">Remitter Result</h6>
                              <br/>
                              <table class="table table-bordered RemittersListTbl">
                                <thead>
                                  <tr class="fxc-primary">
                                    <th scope="col">#</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    <td scope="row">1XJI21415</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Ipsum</td>
                                     <td>
                                        <button class="btn btn-sm btn-crm viewBtn">
                                          <i class="far fa-eye"></i> View
                                        </button>
                                        <a href="{{URL::to('/show-remitter-info')}}" class="btn btn-sm btn-crm btn-primary useBtn">
                                          <i class="far fa-hand-pointer"></i> Use
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