<?php include('db_connect.php'); ?>
<div class="content container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/booking_count.php' ?></h3>
                                                <h6 class="text-muted">Total Bookings</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> <span class="opacity-7 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                                    </svg></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/room_count.php' ?></h3>
                                                <h6 class="text-muted">Available Rooms</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> 
                                                <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14">
                                                        </path><polyline points="22 4 12 14.01 9 11.01">
                                                        </polyline></svg></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/checkin_count.php' ?></h3>
                                                <h6 class="text-muted">Checked In</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"><span class="opacity-7 text-muted"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                        <polyline points="10 17 15 12 10 7"></polyline>
                                                        <line x1="15" y1="12" x2="3" y2="12"></line>
                                                    </svg></span>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/checkout_count.php' ?></h3>
                                                <h6 class="text-muted">Checked Out</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                </svg> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="content container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/totalroom.php' ?></h3>
                                                <h6 class="text-muted">Total Rooms</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> <span class="opacity-7 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                    </svg></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/totalroomcategories.php' ?></h3>
                                                <h6 class="text-muted">Total Room Categories</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> <span class="opacity-7 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                                    </svg>
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div>
                                                <h3 class="card_widget_header"><?php include 'counters/customer_count.php' ?></h3>
                                                <h6 class="text-muted">Total customers</h6> </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: right;"> <span class="opacity-7 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: center;"><span class="opacity-7 text-muted"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                                    </svg>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="text-muted">Total Payment</h6> </div>
                                            <h3 class="card_widget_header text-center"><?php echo '$';include 'counters/payment_count.php'?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="card board1 fill">
                                    <div class="card-body">
                                        <div class="dash-widget-header">
                                            <div class="ml-auto mt-md-3 mt-lg-0" style="text-align: center;"><span class="opacity-7 text-muted"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg></span>  
                                            </div>
                                            <div class="text-center">
                                                <h6 class="text-muted">Total Users</h6> </div>
                                                <h3 class="card_widget_header text-center"><?php include 'counters/user_count.php' ?></h3>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
