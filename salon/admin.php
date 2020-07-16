<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<script type="text/javascript" src="js/Chart.min.js"></script>

 <?php include 'admin-header.php';  ?>
 <?php include 'admin-side-nav.php';  ?>

</head>

<body>

<div class="container" style="margin-left: 350px;">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect" style="background: #4d4dff">
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Today's Appointments</div>
                   <div style="color:white;">20</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect" style="background: orange">
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Confirmed Total bookings</div>
                    <div style="color:white;">20</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect" style="background: #ff3333">
                <div class="icon">
                    <i class="fa fa-question"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Pending Appointments</div>
                    <div style="color:white;">20</div>               
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect" style="background: #cc00cc">
                <div class="icon">
                    <i class="fa fa-minus-circle"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Cancelled Appointments</div>
                    <div class="number count-to" data-from="0" data-to="87" data-speed="1000" data-fresh-interval="20" style="color:white;"></div>
                    7
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect" style="background: #4da6ff">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Registered Customers</div>
                   <div style="color:white;">20</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect" style="background: #00cc44">
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Total Revenue</div>
                    <div style="color:white;">20</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect" style="background: #ffd633">
                <div class="icon">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Low Stock Items</div>               
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect" style="background: #ff471a">
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <div class="content">
                    <div class="text" style="margin-top:2px;">Total Sales</div>               
                </div>
            </div>
        </div>
</div>

    <div class="row clearfix">
        <div class="col-md-5">
            <h4 class="text-center">Scheduled Appointments</h4>
            <button class="btn btna btn-danger">Print</button>
            <div id="divChart">
                <canvas id="myChart"></canvas>
            </div>            
        </div>

        <div class="col-md-6" style="margin-left: 90px;">
            <h4 class="text-center">Today's Appointments</h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="table-danger">Name</th>
                    <th class="table-danger">Beauticean</th>
                    <th class="table-danger">Time Slot</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Iresha Samarasinghe</td>
                    <td>Nishie</td>
                    <td>9.30 - 10.30 am</td>
                </tr>
                <tr>
                    <td>Chamee Peieris</td>
                    <td>Manori</td>
                    <td>12.00 - 1.00 pm</td>
                </tr>
                <tr>
                    <td>Sadunika Wimalasiri</td>
                    <td>Nishie</td>
                    <td>1.00 - 2.00 pm</td>
                </tr>
                <tr>
                    <td>Naduni Hettiarachchi</td>
                    <td>Roshana</td>
                    <td>2.30 - 3.30 pm</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: -40%;">
        <div class="col-md-5" style="margin-right: 80px;">
            <h4 class="text-center">Sales </h4>
            <div class="filter-section">
                <div class="input-group input-groupa">
                    <label class="label labela control-label">Year :</label>
                    <select class="form-control">
                     
                      <option value="1">2018</option>
                      <option value="2">2019</option>
                      <option value="3">2020</option>
                      <option value="4">2021</option>
                      <option value="5">2022</option>
                      <option value="6">2023</option>
                      <option value="7">2024</option>
                      <option value="8">2025</option>
                    </select>
                </div>
                <div class="input-group input-groupa">
                    <label class="label labela control-label">Month :</label>
                    <select class="form-control">
                      <option selected>Select an option</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="5">September</option>
                      <option value="6">Octomber</option>
                      <option value="7">November</option>
                      <option value="8">December</option>
                    </select>
                </div>
                 <button class="btn btna btn-danger">Print</button>
            </div>
            <div id="divChart2">
                <canvas id="myChart2"></canvas>
            </div>            
        </div>
        <div class="col-md-5">
            <h4 class="text-center">Appointment Bookings</h4>
            <div class="filter-section">
                <div class="input-group input-groupa">
                    <label class="label labela control-label">Year :</label>
                    <select class="form-control">
                    
                      <option value="1">2018</option>
                      <option value="2">2019</option>
                      <option value="3">2020</option>
                      <option value="4">2021</option>
                      <option value="5">2022</option>
                      <option value="6">2023</option>
                      <option value="7">2024</option>
                      <option value="8">2025</option>
                    </select>
                </div>
                <div class="input-group input-groupa">
                    <label class="label labela control-label">Bookings</label>
                    <select class="form-control">
                      <option selected>Select an option</option>
                      <option value="1">A+</option>
                      <option value="2">A-</option>
                      <option value="3">B+</option>
                      <option value="4">B-</option>
                      <option value="5">AB+</option>
                      <option value="6">AB-</option>
                      <option value="7">O+</option>
                      <option value="8">O-</option>
                    </select>
                </div>
                 <button class="btn btna btn-danger">Print</button>
            </div>
            <div id="divChart3">
                <canvas id="myChart3"></canvas>
            </div>            
        </div>
    </div>
</div>



<script type="text/javascript">
	var myChart = new Chart("myChart", {
        type: 'doughnut',
        data: {
            labels: ['Confirmed Appointments', 'Cancelled Appointments', 'Pending Appointments'],
            datasets: [{
                label: 'Appointments',
                data: [12, 19, 3],
                backgroundColor: [
                    'red',
                    'green',
                    'blue',
                    'Blue',
                    'Purple',
                    'Orange',
                    'Cyan',
                    'Grey'
                ],
                borderColor: [
                    'black',
                    'black',
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black',      
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var myChart = new Chart("myChart2", {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September','October','November','December'],
            datasets: [{
                label: 'Sales',
                data: [50, 60, 70, 40, 10, 20, 90, 100, 30, 40, 10, 40],
                backgroundColor: [
                    'red',
                    'Green',
                    'Yellow',
                    'Blue',
                    'Purple',
                    'Orange',
                    'Cyan',
                    'Grey',
                    'Brown',
                    'Black',
                    'green',
                    'yellow'
                ],
                borderColor: [
                    'black',
                    'black',
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black',      
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var myChart = new Chart("myChart3", {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September','October','November','December'],
            datasets: [{
                label: 'Appointment Bookings',
                data: [20, 60, 50, 40, 10, 30, 90, 100, 30, 10, 10, 90],
                backgroundColor: [
                    'red',
                    'Green',
                    'Yellow',
                    'Blue',
                    'Purple',
                    'Orange',
                    'Cyan',
                    'Grey',
                    'Brown',
                    'Black',
                    'green',
                    'yellow'
                ],
                borderColor: [
                    'black',
                    'black',
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black', 
                    'black',      
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>