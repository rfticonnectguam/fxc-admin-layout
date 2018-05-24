@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
      <div class="row">
          <div class="col-md-12">
              <div class="content-header">
                  <div class="col-sm-6">
                     <h4><i class="fas fa-tachometer-alt"></i> Dashboard</h4>
                  </div>
              </div>
          </div>
      </div>

      <hr/>
      <br/>
      
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
                      <div class="box-default">
                       
                              <h6 class="box-header">Remittance request</h6>
                              <br/>
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Date Created</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td scope="row">1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Ipsum</td>
                                    <td>12/04/18</td>
                                  </tr>
                                  <tr>
                                    <td scope="row">2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Ipsum</td>
                                    <td>04/01/18</td>
                                  </tr>
                                  <tr>
                                    <td scope="row">3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>04/01/18</td>
                                  </tr>
                                </tbody>
                              </table>

                            <nav aria-label="Page navigation example">
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
                              </nav>  
                                  
                      </div>
                  </div>
              </div>
             
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
@endsection

@section('script')
   
@endsection