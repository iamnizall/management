<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Popper & JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Chart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <title>Report</title>

    <!-- Chart JS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body>


    <div id="mySidenav" class="sidenav">
        <div class="container">
            <div class="row justify-content-center" style="border-bottom: solid #FFFFFF;">
                <div class="col-5 text">
                    <img src="asset/img/profil.jpg" alt="" class="rounded-circle profil" style="height: 80px; width: 80px;">
                    <p>Marvin McKinney</p>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../beranda/beranda.php"><i class="fas fa-house-user"></i> Dashboard</a>
        <a class="active" href="report.php"><i class="fas fa-file-alt fa-lg"></i> Report</a>
        <a href="../project/project.php"><i class="fas fa-tasks"></i> Project</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="main">
        <div id="main" class="content row" style="text-align: left;">
            <span class="d-inline col-sm-1" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            <div class="d-inline col-sm-11 py-1" style="padding: 0; margin: 0;">
                <h2>Report</h2>
                <p>Untuk 1 tahun terkakhir</p>
            </div>
        </div>
        <div class="btn" style="padding-left: 79%;">
            <button type="button" id="btn" class="btn btn-primary  mx-5"><i class="fas fa-print fa-lg"></i></button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-4" style="width: 1000px;">
                    <div id="container"></div>
                    <script>
                        Highcharts.chart('container', {

                            title: {
                                text: ''
                            },

                            yAxis: {
                                title: {
                                    text: 'Number of Employees'
                                }
                            },

                            xAxis: {
                                accessibility: {
                                    rangeDescription: 'Range: 2010 to 2017'
                                }
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                    pointStart: 2010
                                }
                            },

                            series: [{
                                name: '',
                                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                            }, ],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                    </script>

                </div>

                <div class="col-lg-10 py-5 mx-4" style="width: 1000px; margin-top: 50px;">

                    <div id="grafik"></div>
                    <script>
                        Highcharts.chart('grafik', {

                            title: {
                                text: ''
                            },

                            yAxis: {
                                title: {
                                    text: 'Number of Employees'
                                }
                            },

                            xAxis: {
                                accessibility: {
                                    rangeDescription: 'Range: 2010 to 2017'
                                }
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                    pointStart: 2010
                                }
                            },

                            series: [{
                                name: '',
                                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                            }, ],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                    </script>

                </div>
            </div>
        </div>


    </div>


    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "#ffff";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>


</body>

</html>