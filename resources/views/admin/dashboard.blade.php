@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
                <h2>Welcome back,</h2>
                <p class="mb-md-0">Your analytics dashboard template.</p>
              </div>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Analytics</p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
              <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                <i class="mdi mdi-download text-muted"></i>
              </button>
              <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                <i class="mdi mdi-clock-outline text-muted"></i>
              </button>
              <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                <i class="mdi mdi-plus text-muted"></i>
              </button>
              <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body dashboard-tabs p-0">
              <ul class="nav nav-tabs px-4" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                </li>
              </ul>
              <div class="tab-content py-0 px-0">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Start date</small>
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                            <a class="dropdown-item" href="#">12 Aug 2018</a>
                            <a class="dropdown-item" href="#">22 Sep 2018</a>
                            <a class="dropdown-item" href="#">21 Oct 2018</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Revenue</small>
                        <h5 class="me-2 mb-0">$577545</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Total views</small>
                        <h5 class="me-2 mb-0">9833550</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Downloads</small>
                        <h5 class="me-2 mb-0">2233783</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Flagged</small>
                        <h5 class="me-2 mb-0">3497843</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Start date</small>
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                            <a class="dropdown-item" href="#">12 Aug 2018</a>
                            <a class="dropdown-item" href="#">22 Sep 2018</a>
                            <a class="dropdown-item" href="#">21 Oct 2018</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Downloads</small>
                        <h5 class="me-2 mb-0">2233783</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Total views</small>
                        <h5 class="me-2 mb-0">9833550</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Revenue</small>
                        <h5 class="me-2 mb-0">$577545</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Flagged</small>
                        <h5 class="me-2 mb-0">3497843</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Start date</small>
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                            <a class="dropdown-item" href="#">12 Aug 2018</a>
                            <a class="dropdown-item" href="#">22 Sep 2018</a>
                            <a class="dropdown-item" href="#">21 Oct 2018</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Revenue</small>
                        <h5 class="me-2 mb-0">$577545</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Total views</small>
                        <h5 class="me-2 mb-0">9833550</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Downloads</small>
                        <h5 class="me-2 mb-0">2233783</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Flagged</small>
                        <h5 class="me-2 mb-0">3497843</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
          <div class="card">
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <p class="card-title">Cash deposits</p>
              <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
              <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"><ul class="dashboard-chart-legend"><li><span style="background-color: #ff4747 "></span>Returns</li><li><span style="background-color: #4d83ff "></span>Sales</li><li><span style="background-color: #ffc100 "></span>Loss</li></ul></div>
              <canvas id="cash-deposits-chart" style="display: block; height: 266px; width: 533px;" width="479" height="239" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
          <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="card-body">
              <p class="card-title">Total sales</p>
              <h1>$ 28835</h1>
              <h4>Gross sales over the years</h4>
              <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
              <div id="total-sales-chart-legend"><ul class="dashboard-chart-legend mb-0 mt-4"><li><span style="background-color: rgba(47,91,191,0.77) "></span>2019</li><li><span style="background-color: rgba(77,131,255,0.77) "></span>2018</li><li><span style="background-color: rgba(77,131,255,0.43) "></span>Past years</li></ul></div>                  
            </div>
            <canvas id="total-sales-chart" width="375" height="187" style="display: block; height: 208px; width: 417px;" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Recent Purchases</p>
              <div class="table-responsive">
                <div id="recent-purchases-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 278.056px;">Name</th><th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Status report: activate to sort column ascending" style="width: 349.41px;">Status report</th><th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 252.691px;">Office</th><th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 134.983px;">Price</th><th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 194.965px;">Date</th><th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Gross amount: activate to sort column ascending" style="width: 274.062px;">Gross amount</th></tr>
                  </thead>
                  <tbody>
                    
                    
                    
                    
                    
                    
                    
                    
                  <tr role="row" class="odd">
                        <td class="sorting_1">Alvin Fisher</td>
                        <td>Ui design completed</td>
                        <td>East Mayra</td>
                        <td>$23230</td>
                        <td>18 Jul 2018</td>
                        <td>$83127</td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Betty Hunt</td>
                        <td>Ui design not completed</td>
                        <td>Lake Sandrafort</td>
                        <td>$571</td>
                        <td>25 Jun 2018</td>
                        <td>$78952</td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Emily Cunningham</td>
                        <td>support</td>
                        <td>Makennaton</td>
                        <td>$939</td>
                        <td>16 Jul 2018</td>
                        <td>$29177</td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Ernest Wade</td>
                        <td>Levelled up</td>
                        <td>West Fidelmouth</td>
                        <td>$484</td>
                        <td>08 Sep 2018</td>
                        <td>$50862</td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Jacob Kennedy</td>
                        <td>New project</td>
                        <td>Cletaborough</td>
                        <td>$314</td>
                        <td>12 Jul 2018</td>
                        <td>$34167</td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Jeremy Ortega</td>
                        <td>Levelled up</td>
                        <td>Catalinaborough</td>
                        <td>$790</td>
                        <td>06 Jan 2018</td>
                        <td>$2274253</td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Minnie Farmer</td>
                        <td>support</td>
                        <td>Agustinaborough</td>
                        <td>$30</td>
                        <td>30 Apr 2018</td>
                        <td>$44617</td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Myrtie Lambert</td>
                        <td>Ui design completed</td>
                        <td>Cassinbury</td>
                        <td>$36</td>
                        <td>05 Nov 2018</td>
                        <td>$36422</td>
                    </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
    </div>
    </footer>
    <!-- partial -->
  </div>
@endsection