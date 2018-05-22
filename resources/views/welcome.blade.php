<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FXC | @yield('title')</title>
    <link rel="favicon icon" href="{{ URL::to('') }}">
    <!-- fontawesome core CSS-->
   {{--  <link href="includes/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- Custom fonts for this template-->
    <link href="{{URL::to('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('plugins/fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav bg-violet-x1 AppMdule" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-violet-x1 fixed-top" id="mainNav">
    {{-- <a class="navbar-brand" href="index.html"><img src="{{URL::to('/images/iconnect-logo.png')}}"></a> --}}
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav">
        <li class="nav-item Active" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
           <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
         <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="contacts.html">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="nav-link-text">Remitter</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="leads.html">
           <i class="fa fa-user" aria-hidden="true"></i>
            <span class="nav-link-text">Beneficiary</span>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="opportunities.html">
            <i class="fa fa-address-book" aria-hidden="true"></i>
            <span class="nav-link-text">Opportunities</span>
          </a>
        </li>
        <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="cases.html">
            <i class="fa fa-address-book" aria-hidden="true"></i>
            <span class="nav-link-text">Cases</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="nav-link-text">Emails</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Lorem ipsum</a>
            </li>
            <li>
               <a href="#">Lorem ipsum</a>
            </li>
            <li>
               <a href="#">Lorem ipsum</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Lorem ipsum</a>
                </li>
                <li>
                   <a href="#">Lorem ipsum</a>
                </li>
                <li>
                   <a href="#">Lorem ipsum</a>
                </li>
              </ul>
            </li>
          </ul>
        </li> -->
       <!--  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="nav-link-text">Calandear</span>
          </a>
        </li> -->
      </ul>    

       
       <ul class="navbar-nav">
        <form class="form-inline searchForm">
          <div class="input-group mr-sm-2">
            <input type="text" class="form-control"  placeholder="Search..">
          </div>

          <div class="dropdown mr-sm-2">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>


          <button type="submit" class="btn btn-default ">Search</button>
        </form> 

       </ul>

      <ul class="navbar-nav ml-auto">

       

        <li class="nav-item">
            <a class="nav-link">
              <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa  fa-fw fa-user-circle" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">Settings</h6>
                <div class="dropdown-divider"></div>
             {{--  <a class="dropdown-header" href="{{URL::to('/logout')}}">Logout</a> --}}
              <a class="dropdown-item" href="{{ URL::to('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
              <form id="logout-form" action="{{ URL::to('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li> -->
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">

       <div id="app">
         <!-- @yield('content') -->
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

       </div>

    </div>  <!-- /.container-fluid-->
  </div><!-- /.content-wrapper-->

</body>
    <script type="text/javascript" src="{{URL::to('js/app.js')}}"></script>
  
    @section('script')

    @show
</html>
