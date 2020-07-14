<!DOCTYPE html>
<html lang="en">
  <head>
<?php $this->load->view("_partials/head.php") ?>
</head>
<body>

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
<?php $this->load->view("_partials/sidebar.php") ?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

     <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card">
           <div class="card-body">
              <h5 class="mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar gradient-deepblue" style="width:55%"></div>
                </div>
              <p class="mb-0 small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div> 
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card">
           <div class="card-body">
              <h5 class="mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar gradient-orange" style="width:55%"></div>
                </div>
              <p class="mb-0 small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body">
              <h5 class="mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar gradient-ohhappiness" style="width:55%"></div>
                </div>
              <p class="mb-0 small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body">
              <h5 class="mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar gradient-ibiza" style="width:55%"></div>
                </div>
              <p class="mb-0 small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
     </div><!--End Row-->

	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Site Traffic
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #14abef"></i>New Visitor</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #ade2f9"></i>Old Visitor</li>
			</ul>
			<div class="chart-container-1">
		      <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">45.87M</h5>
			   <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">15:48</h5>
			   <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">245.65</h5>
			   <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Weekly sales
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
              <div class="chart-container-2">
                 <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #14abef"></i> Direct</td>
                   <td>$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #02ba5a"></i>Affiliate</td>
                   <td>$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #d13adf"></i>E-mail</td>
                   <td>$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #fba540"></i>Other</td>
                   <td>$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
   <div class="row">
	<div class="col-12 col-lg-6 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart1" data-percent="60">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Facebook Followers</h6>
			   <small class="mb-0">22.14% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-facebook text-facebook text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-6 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart2" data-percent="65">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Twitter Tweets</h6>
			   <small class="mb-0">32.15% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-twitter text-twitter text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-12 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart3" data-percent="75">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Youtube Subscribers</h6>
			   <small class="mb-0">58.24% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-youtube text-youtube fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	</div><!--End Row-->


  <div class="row">
     <div class="col-12 col-lg-12 col-xl-6">
       <div class="card">
         <div class="card-header">World Selling Region
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
         <div class="card-body">
            <div id="dashboard-map" style="height: 275px;"></div>
         </div>
         <div class="table-responsive">
            <table class="table table-striped align-items-center">
               <thead>
                  <tr>
                      <th>Country</th>
                      <th>Income</th>
                      <th>Trend</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><i class="flag-icon flag-icon-ca mr-2"></i> USA</td>
                      <td>4,586$</td>
                      <td><span id="trendchart1"></span></td>
                  </tr>
                  <tr>
                      <td><i class="flag-icon flag-icon-us mr-2"></i>Canada</td>
                      <td>2,089$</td>
                      <td><span id="trendchart2"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-in mr-2"></i>India</td>
                      <td>3,039$</td>
                      <td><span id="trendchart3"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-gb mr-2"></i>UK</td>
                      <td>2,309$</td>
                      <td><span id="trendchart4"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-de mr-2"></i>Germany</td>
                      <td>7,209$</td>
                      <td><span id="trendchart5"></span></td>
                  </tr>
				  
              </tbody>
          </table>
          </div>
       </div>
     </div>
	 
	 <div class="col-12 col-lg-12 col-xl-6">
        <div class="row">
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Page Views</p>
				<h4 class="mb-0">8,293 <small class="small-font">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			   <canvas id="chart3"></canvas>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Total Clicks</p>
				<h4 class="mb-0">7,493 <small class="small-font">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			  <canvas id="chart4"></canvas>
			  </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body text-center">
				<p class="mb-4">Total Downloads</p>
				<input class="knob" data-width="175" data-height="175" data-readOnly="true" data-thickness=".2" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(255, 255, 255, 0.08)" data-fgcolor="#843cf7" data-max="15000" value="8550"/>
				<hr>
				<p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Device Storage</p>
				<h4 class="mb-3">42620/50000</h4>
				<hr>
				<div class="progress-wrapper mb-4">
				   <p>Documents <span class="float-right">12GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-success" style="width:80%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				   <p>Images <span class="float-right">10GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-danger" style="width:60%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				    <p>Mails <span class="float-right">5GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-primary" style="width:40%"></div>
                   </div>
                </div>
				
			 </div>
		   </div>
		  </div>
		</div>
	 </div>
	 
  </div><!--End Row-->


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
             <p>Total Earning</p>
             <h4 class="mb-0">287,493$</h4>
             <small>1.4% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <hr>
             <p>Total Sales</p>
             <h4 class="mb-0">87,493</h4>
             <small>5.43% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <div class="mt-5">
              <div class="chart-container-4">
               <canvas id="chart5"></canvas>
			  </div>
            </div>
           </div>
        </div>

      </div>

      <div class="col-12 col-lg-6 col-xl-8">
         <div class="card">
           <div class="card-header">Customer Review
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">iPhone X <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Sara Jhon : This i svery Nice phone in low budget.</p>
                </div>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Air Pod <small class="ml-4">05.26 PM</small></h6>
                  <p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                </div>
              </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Mackbook Pro <small class="ml-4">06.45 AM</small></h6>
                  <p class="mb-0 small-font">Jhon Doe : Excllent product and awsome quality</p>
                </div>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Air Pod <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Christine : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-warning"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Mackbook <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Michle : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-warning"></i>
                </div>
              </div>
              </li>
            </ul>
         </div>
      </div>
    </div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header border-0">Recent Order Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Photo</th>
                     <th>Product</th>
                     <th>Amount</th>
                     <th>Status</th>
                     <th>Completion</th>
                     <th>Date</th>
                   </tr>
                   </thead>
           <tbody><tr>
                    <td>
                      <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
          <td>Headphone GL</td>
                    <td>$1,840 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 60%"></div>
                       </div>
                    </td>
          <td>10 July 2018</td>
                   </tr>
           <tr>
                    <td>
                     <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
          <td>Clasic Shoes</td>
                    <td>$1,520 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
          <td>12 July 2018</td>
                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
                    <td>Hand Watch</td>
                    <td>$1,620 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-warning"></i> delayed
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                       </div>
                    </td>
          <td>14 July 2018</td>
                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
                    <td>Hand Camera</td>
                    <td>$2,220 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-info"></i> on schedule
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                       </div>
                    </td>
          <td>16 July 2018</td>
                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
                    <td>Iphone-X Pro</td>
                    <td>$9,890 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
          <td>17 July 2018</td>
                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                    </td>
                    <td>Ladies Purse</td>
                    <td>$3,420 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 80%"></div>
                       </div>
                    </td>
          <td>18 July 2018</td>
                   </tr>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
	
	
	 <p class="mb-0">Header Colors</p>
      <hr>
	  
	  <div class="mb-3">
	    <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
	  </div>
      
      <ul class="switcher">
        <li id="header1"></li>
        <li id="header2"></li>
        <li id="header3"></li>
        <li id="header4"></li>
        <li id="header5"></li>
        <li id="header6"></li>
      </ul>

      <p class="mb-0">Sidebar Colors</p>
      <hr>
	  
      <div class="mb-3">
	    <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Sidebar</button>
	  </div>
	  
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
  
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="<?php echo base_url(); ?>assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url(); ?>assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="<?php echo base_url(); ?>assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.js"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="<?php echo base_url(); ?>assets/js/index.js"></script>

  
</body>
</html>
