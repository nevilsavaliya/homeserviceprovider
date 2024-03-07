<?php include"connection.php";
 session_start();
 $email=$_SESSION['ProviderEmail'];


?>

<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from truelysell-admin.dreamguystech.com/template/service-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 09:04:39 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Service  | Provider</title>

        <link rel="shortcut icon" href="assets/img/logo-icon.png">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

        <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

        <link rel="stylesheet" href="assets/css/animate.min.css">

        <link rel="stylesheet" href="assets/css/admin.css">
    </head>
    <body>
        <div class="main-wrapper">

            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo logo-small">
                        <img src="assets/img/logo-icon.png" alt="Logo" width="30" height="30">
                    </a>
                </div>
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-align-left"></i>
                </a>
                <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                    <i class="fas fa-align-left"></i>
                </a>
                <ul class="nav user-menu">

                    <li class="nav-item dropdown noti-dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <i class="far fa-bell"></i> <span class="badge badge-pill"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt src="assets/img/provider/provider-01.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Thomas Herzberg have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt src="assets/img/provider/provider-02.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Matthew Garcia have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">13 Sep 2020 03:56 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt src="assets/img/provider/provider-03.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Yolanda Potter have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">12 Sep 2020 09:25 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Ricardo Flemings have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">11 Sep 2020 06:36 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-05.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Maritza Wasson have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">10 Sep 2020 08:42 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-06.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Marya Ruiz have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">9 Sep 2020 11:01 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-07.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Richard Hughes have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">8 Sep 2020 06:23 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="admin-notification.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="admin-profile.html">Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="sidebar" id="sidebar">
                <div class="sidebar-logo">
                    <a href="index.html">
                        <img src="assets/img/logo-icon.png" class="img-fluid" alt>
                    </a>
                </div>
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="subcategories.php"><i class="fab fa-buffer"></i> <span>View Complain</span></a>
                            </li>
                            <li class="active">
                                <a href="service-list.php"><i class="fas fa-bullhorn"></i> <span>View Service Detail</span></a>
                            </li>
                            <li>
                                <a href="emergencyservice.php"><i class="fab fa-buffer"></i> <span>View Emergency Service</span></a>
                            </li>
                            <li>
                                <a href="review-reports.php"><i class="fas fa-star"></i> <span>Ratings</span></a>
                            </li>
                            <li>
                                <a href="admin-profile.php"><i class="fas fa-user-plus"></i> <span>Profile</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-wrapper">
                <div class="content container-fluid">

                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Services</h3>
                            </div>
                            <div class="col-auto text-right">
                                <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                                    <i class="fas fa-filter"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <form action="#" method="post" id="filter_inputs">
                        <div class="card filter-card">
                            <div class="card-body pb-0">
                                <div class="row filter-row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Service</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>From Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>To Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable">
                                                <?php
                                                
                                                    $sql ="SELECT customer_service.* FROM assign_success INNER JOIN service_provider ON assign_success.SerProv_Id = service_provider.SerProv_Id INNER JOIN customer_service ON assign_success.Cust_id = customer_service.Cust_id WHERE service_provider.SerProv_Email = '$email' AND status=1 AND accept_status=0;";
                                                    $res = mysqli_query($conn, $sql);
                                                ?>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Address</th>
                                                    <th>Category</th>
                                                    <th>Services</th>
                                                    <th>Accept</th>
                                                    <th>Reject</th>
                                                   
                                                </tr>
                                                
                                                <?php
                                                $i = 1;
                                                     while ($row = mysqli_fetch_assoc($res)) {
                                                          echo '<tr>';
                                                            echo '<td>' . $i . '</td>';
                                                            echo '<td>' . $row['Cust_Name'] . '</td>';
                                                            echo '<td>' . $row['Cust_Email'] . '</td>';
                                                            echo '<td>' . $row['Cust_Contact'] . '</td>';
                                                            echo '<td>' . $row['Address'] . '</td>';
                                                            echo '<td>' . $row['Category'] . '</td>';
                                                            echo '<td>' . $row['Services'] . '</td>';
                                                            echo " <td>.<a href='accept.php?id=$row[Cust_id]'>Accept</a>.</td>";
                                                            echo " <td>.<a href='reject.php?id=$row[Cust_id]'>Reject</a>.</td>";
                                                          echo'</tr>';
                                                          $i++;
                                                     
                                                     }
                                                
                                                ?>
                                                
<!--                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-01.jpg" alt> Toughened Glass Fitting Services
                                                        </a>
                                                    </td>
                                                    <td>Wayne, New Jersey</td>
                                                    <td>Cleaning</td>
                                                    <td>$25</td>
                                                    <td>13 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_1" class="check" type="checkbox">
                                                            <label for="service_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>-->
<!--                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-02.jpg" alt> Car Repair Services
                                                        </a>
                                                    </td>
                                                    <td>Hanover, Maryland</td>
                                                    <td>Automobile</td>
                                                    <td>$50</td>
                                                    <td>12 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_2" class="check" type="checkbox" checked>
                                                            <label for="service_2" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-03.jpg" alt> Electric Panel Repairing Service
                                                        </a>
                                                    </td>
                                                    <td>Kalispell, Montana</td>
                                                    <td>Electrical</td>
                                                    <td>$45</td>
                                                    <td>11 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_3" class="check" type="checkbox">
                                                            <label for="service_3" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-04.jpg" alt> Steam Car Wash
                                                        </a>
                                                    </td>
                                                    <td>Electra, Texas</td>
                                                    <td>Car Wash</td>
                                                    <td>$14</td>
                                                    <td>10 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_4" class="check" type="checkbox" checked>
                                                            <label for="service_4" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-05.jpg" alt> House Cleaning Service
                                                        </a>
                                                    </td>
                                                    <td>Sylvester, Georgia</td>
                                                    <td>Cleaning</td>
                                                    <td>$100</td>
                                                    <td>9 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_5" class="check" type="checkbox" checked>
                                                            <label for="service_5" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-06.jpg" alt> Computer & Server AMC Service
                                                        </a>
                                                    </td>
                                                    <td>Los Angeles, California</td>
                                                    <td>Computer</td>
                                                    <td>$80</td>
                                                    <td>8 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_6" class="check" type="checkbox">
                                                            <label for="service_6" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-07.jpg" alt> Interior Designing
                                                        </a>
                                                    </td>
                                                    <td>Hanover, Maryland</td>
                                                    <td>Interior</td>
                                                    <td>$5</td>
                                                    <td>7 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_7" class="check" type="checkbox" checked>
                                                            <label for="service_7" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-08.jpg" alt> Building Construction Services
                                                        </a>
                                                    </td>
                                                    <td>Burr Ridge, Illinois</td>
                                                    <td>Construction</td>
                                                    <td>$75</td>
                                                    <td>6 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_8" class="check" type="checkbox" checked>
                                                            <label for="service_8" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>-->
<!--                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-09.jpg" alt> Commercial Painting Services
                                                        </a>
                                                    </td>
                                                    <td>Huntsville, Alabama</td>
                                                    <td>Painting</td>
                                                    <td>$500</td>
                                                    <td>5 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_9" class="check" type="checkbox" checked>
                                                            <label for="service_9" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>-->
<!--                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-10.jpg" alt> Plumbing Services
                                                        </a>
                                                    </td>
                                                    <td>Richmond, Virginia</td>
                                                    <td>Plumbing</td>
                                                    <td>$150</td>
                                                    <td>4 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_10" class="check" type="checkbox" checked>
                                                            <label for="service_10" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-11.jpg" alt> Wooden Carpentry Work
                                                        </a>
                                                    </td>
                                                    <td>Columbus, Alabama</td>
                                                    <td>Carpentry</td>
                                                    <td>$32</td>
                                                    <td>3 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_11" class="check" type="checkbox" checked>
                                                            <label for="service_11" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>-->
<!--                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <a href="service-details.html">
                                                            <img class="rounded service-img mr-1" src="assets/img/services/service-12.jpg" alt> Air Conditioner Service
                                                        </a>
                                                    </td>
                                                    <td>Vancouver, Washington</td>
                                                    <td>Appliance</td>
                                                    <td>$54</td>
                                                    <td>2 Sep 2020</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="service_12" class="check" type="checkbox" checked>
                                                            <label for="service_12" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="service-details.html" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye mr-1"></i> View
                                                        </a>
                                                    </td>
                                                </tr>-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/datatables/datatables.min.js"></script>

        <script src="assets/js/admin.js"></script>
    </body>

    <!-- Mirrored from truelysell-admin.dreamguystech.com/template/service-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 09:04:42 GMT -->
</html>