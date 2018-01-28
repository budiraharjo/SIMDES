<?php
include('ceklecturer.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
				<?php
				$nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
				?> 
				<div class="pull-left">
				<p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
				</div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="http://ilmu-detil.blogspot.co.id/.php">Tutorial Android</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin-top:60px">	

<h2>Tutorial</h2>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td><i class="pull-right glyphicon glyphicon-eye-open"></i>
					  <a href ="http://ilmu-detil.blogspot.com/2015/10/tutorial-bootstrap-cara-membuat.html">
					  Membuat Dropdown Menu pada Bootstrap</a></td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-edit"></i> 
					  <a href ="http://ilmu-detil.blogspot.co.id/2015/09/membuat-headline-news-dinamis-dari.html">
					  Membuat Headlinew News dari Database</a></td>
                    </tr>
					<tr>
                      <td><i class="pull-right fa fa-edit"></i> 
					  <a href ="http://ilmu-detil.blogspot.co.id/2015/07/install-android-studio-pada-windows.html">
					  Install Android Studio pada Windows</a></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
</div>			  
</div>	
</body>
</html>