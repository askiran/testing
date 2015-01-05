<?php
include('application/conn.php');
include('include/year.php');
include('include/department.php');
$idstudent =1;
if($_POST)
{
       $sslcpassoutyear = $_POST['sslc-passoutyear'];
    $sslcpercentagetype = $_POST['sslc-percentagetype'];
    $sslcpercentage = $_POST['sslc-percentage'];
    $sslcschoolname = $_POST['sslc-schoolname'];
    
    $pucpassoutyear = $_POST['puc-passoutyear'];
    $pucpercentagetype = $_POST['puc-percentagetype'];
    $pucpercentage = $_POST['puc-percentage'];
    $pucschoolname = $_POST['puc-schoolname'];
    
    $degpassoutyear = $_POST['deg-passoutyear'];
    $degpercentagetype = $_POST['deg-percentagetype'];
    $degpercentage = $_POST['deg-percentage'];
    $degschoolname = $_POST['deg-schoolname'];
     $degboard = $_POST['deg-board'];
     $degdepartment = $_POST['deg-department'];
     
    $pgpassoutyear = $_POST['pg-passoutyear'];
    $pgpercentagetype = $_POST['pg-percentagetype'];
    $pgpercentage = $_POST['pg-percentage'];
    $pgschoolname = $_POST['pg-schoolname'];
    $pgboard = $_POST['pg-board'];
     $pgdepartment = $_POST['pg-department'];
     
     
    $pgdippassoutyear = $_POST['pgdip-passoutyear'];
    $pgdippercentagetype = $_POST['pgdip-percentagetype'];
    $pgdippercentage = $_POST['pgdip-percentage'];
    $pgdipschoolname = $_POST['pgdip-schoolname'];
    $pgdipboard = $_POST['pgdip-board'];

    echo "Update tbl_student set sslc_passoutyear = '$sslcpassoutyear', 
                             sslc_percentagetype = '$sslcpercentagetype',
                             sslc_percentage = '$sslcpercentage',
                             sslc_schoolname = '$sslcschoolname',
                             puc_passoutyear = '$pucpassoutyear', 
                             puc_percentagetype = '$sslcpercentagetype',
                             puc_percentage = '$pucpercentagetype',
                             puc_schoolname = '$pucschoolname',
                             deg_passoutyear = '$degpassoutyear', 
                             deg_percentagetype = '$degpercentagetype',
                             deg_percentage = '$degpercentage',
                             deg_schoolname = '$degschoolname',
                             deg_university = '$degboard',
                             deg_department = '$degdepartment',
                             pg_passoutyear = '$pgpassoutyear', 
                             pg_percentagetype = '$pgpercentagetype',
                             pg_percentage = '$pgpercentage',
                             pg_schoolname = '$pgschoolname',
                             pg_university = '$degboard', 
                             pg_department = '$pgdepartment',
                             pgdip_passoutyear = '$pgdippassoutyear', 
                             pgdip_percentagetype = '$pgdippercentagetype',
                             pgdip_percentage = '$pgdippercentage',
                             pgdip_schoolname = '$pgdipschoolname',
                             pgdip_university = '$pgdipboard'
                        where idstudent = '$idstudent'";
    exit;
mysql_query("Update tbl_student set sslc_passoutyear = '$sslcpassoutyear', 
                             sslc_percentagetype = '$sslcpercentagetype',
                             sslc_percentage = '$sslcpercentage',
                             sslc_schoolname = '$sslcschoolname',
                             puc_passoutyear = '$pucpassoutyear', 
                             puc_percentagetype = '$sslcpercentagetype',
                             puc_percentage = '$pucpercentagetype',
                             puc_schoolname = '$pucschoolname',
                             deg_passoutyear = '$degpassoutyear', 
                             deg_percentagetype = '$degpercentagetype',
                             deg_percentage = '$degpercentage',
                             deg_schoolname = '$degschoolname',
                             deg_university = '$degboard',
                             deg_department = '$degdepartment',
                             pg_passoutyear = '$pgpassoutyear', 
                             pg_percentagetype = '$pgpercentagetype',
                             pg_percentage = '$pgpercentage',
                             pg_schoolname = '$pgschoolname',
                             pg_university = '$degboard', 
                             pg_department = '$pgdepartment',
                             pgdip_passoutyear = '$pgdippassoutyear', 
                             pgdip_percentagetype = '$pgdippercentagetype',
                             pgdip_percentage = '$pgdippercentage',
                             pgdip_schoolname = '$pgdipschoolname',
                             pgdip_university = '$pgdipboard'
                        where idstudent = '$idstudent'");
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanochip Solutions</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <form action="" method="POST">
    <header>
        <div class="navbar navbar-inverse top--header" role="navigation">
          <div class="container">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>             
              <a href="#" class="navbar-brand logo logo--small mar-t10 mar-b10">Nanochip Solutions</a>              
            </div> 
            <div class="row">
            <div class="navbar-right">
            <div id="navbar" class="navbar-collapse collapse">  
               <div class="clearfix">
                <ul class="nav navbar-nav header-nav">
                  <li>Welcome Kiran Kumar</li>
                  <li><a href="#" class="pad-sm-t13 pad-sm-b12">Edit Resume</a></li>
                  <li class=""><a href="#" class="pad-sm-t13 pad-sm-b12">View Resume</a></li>
                  <li class=""><a href="#" class="pad-sm-t13 pad-sm-b12">Logout</a></li>                                  
                </ul>                   
               </div>                                            
            </div>    
            </div>                  
            </div>                           
          </div>
        </div>      
    </header> <!--/Header Ends-->
    <div class="main-nav-wrapper">
       <nav class="container">
           <ul class="main-nav clearfix">
               <li><a href="">Personal Information</a></li>
               <li class="active"><a href="">academic qualification</a></li>
               <li><a href="">academic projects</a></li>
               <li><a href="">work experience</a></li>
               <li><a href="">career details</a></li>
           </ul>
       </nav>
    </div><!--/Main Nav Ends-->
    <div class="container mar-t10">
          <div class="row">
           <div class="col-sm-6">
           <h3 class="brd-btm mar-b20">S.S.L.C Details</h3>
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-5 control-label">Passed Out <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <select class="form-control" id="sslc-passoutyear" name="sslc-passoutyear">
                      <?php for($i=0;$i<count($yeararray);$i++){?>
                      <option value="<?php echo $yeararray[$i]['years'];?>"><?php echo $yeararray[$i]['years'];?></option>
                      <?php }?>
                      
                  </select>
                </div>        
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Aggregate Marks <span class="error-text">*</span></label>
                <div class="col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" name="sslc-percentagetype" id="sslc-percentagetype" checked="checked"> Percentage
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sslc-percentagetype" id="sslc-percentagetype"> CGPA(out of 10 points)
                    </label>        
                    <input type="text" class="form-control mar-t10" placeholder="" id="sslc-percentage" name="sslc-percentage">                                                      
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">School / College <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="sslc-schoolname" name="sslc-schoolname">
                </div>               
              </div> 
                                              
            </div>
            </div>
           <div class="clearfix col-sm-6">
           <h3 class="brd-btm mar-b20">Higher Secondary</h3>
            <div class="form-horizontal">
             <div class="form-group">
                <label class="col-sm-5 control-label">Passed Out <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <select class="form-control" id="puc-passoutyear" name="puc-passoutyear">
                      <?php for($i=0;$i<count($yeararray);$i++){?>
                      <option value="<?php echo $yeararray[$i]['years'];?>"><?php echo $yeararray[$i]['years'];?></option>
                      <?php }?>
                      
                  </select>
                </div>        
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Aggregate Marks <span class="error-text">*</span></label>
                <div class="col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" name="puc-percentagetype" id="puc-percentagetype" checked="checked"> Percentage
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="puc-percentagetype" id="puc-percentagetype"> CGPA(out of 10 points)
                    </label>        
                    <input type="text" class="form-control mar-t10" placeholder="" id="puc-percentage" name="puc-percentage">                                                      
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-5 control-label">School / College <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="puc-schoolname" name="puc-schoolname">
                </div>               
              </div> 
                                                                    
            </div>
            </div> 
           <div class="col-sm-6">
           <h3 class="brd-btm mar-b20">Graduation</h3>
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-5 control-label">Passed Out <span class="error-text">*</span></label>
                <div class="col-sm-7">
                 <select class="form-control" id="deg-passoutyear" name="deg-passoutyear">
                      <?php for($i=0;$i<count($yeararray);$i++){?>
                      <option value="<?php echo $yeararray[$i]['years'];?>"><?php echo $yeararray[$i]['years'];?></option>
                      <?php }?>
                      
                  </select>
                </div>        
              </div> 
                 <div class="form-group">
            <label class="col-sm-5 control-label">Department<span class="error-text">*</span></label>
            <div class="col-sm-7">
                <select class="form-control" id="deg-department" name="deg-department">
                  <?php for($i=0;$i<count($departmentarray);$i++){?>
                  <option value="<?php echo $departmentarray[$i]['iddepartment'];?>"><?php echo $departmentarray[$i]['department'];?></option>
                  <?php }?>

              </select>
            </div>        
              </div> 
               <div class="form-group">
                <label class="col-sm-5 control-label">Aggregate Marks <span class="error-text">*</span></label>
                <div class="col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" name="deg-percentagetype" id="deg-percentagetype" checked="checked"> Percentage
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="deg-percentagetype" id="deg-percentagetype"> CGPA(out of 10 points)
                    </label>        
                    <input type="text" class="form-control mar-t10" placeholder="" id="deg-percentage" name="deg-percentage">                                                      
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-5 control-label">School / College <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="deg-schoolname" name="deg-schoolname">
                </div>               
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Board <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="deg-board" name="deg-board">
                </div>        
              </div>                                           
            </div>
            </div>
           <div class="clearfix col-sm-6">
           <h3 class="brd-btm mar-b20">Post Graduation</h3>
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-5 control-label">Passed Out <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <select class="form-control" id="pg-passoutyear" name="pg-passoutyear">
                      <?php for($i=0;$i<count($yeararray);$i++){?>
                      <option value="<?php echo $yeararray[$i]['years'];?>"><?php echo $yeararray[$i]['years'];?></option>
                      <?php }?>
                      
                  </select>
                </div>        
              </div> 
            <div class="form-group">
            <label class="col-sm-5 control-label">Department<span class="error-text">*</span></label>
            <div class="col-sm-7">
              <select class="form-control" id="pg-department" name="pg-department">
                  <?php for($i=0;$i<count($departmentarray);$i++){?>
                  <option value="<?php echo $departmentarray[$i]['iddepartment'];?>"><?php echo $departmentarray[$i]['department'];?></option>
                  <?php }?>

              </select>
            </div>        
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Aggregate Marks <span class="error-text">*</span></label>
                <div class="col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" name="pg-percentagetype" id="pg-percentagetype" checked="checked"> Percentage
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="pg-percentagetype" id="pg-percentagetype"> CGPA(out of 10 points)
                    </label>        
                    <input type="text" class="form-control mar-t10" placeholder="" id="pg-percentage" name="pg-percentage">                                                      
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-5 control-label">School / College <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="pg-schoolname" name="pg-schoolname">
                </div>               
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Board <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="pg-board" name="pg-board">
                </div>        
              </div>         
              </div>                                           
            </div>
        <div class="clearfix col-sm-6">
           <h3 class="brd-btm mar-b20">PG Diploma & Certificate Courses</h3>
                <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-5 control-label">Passed Out <span class="error-text">*</span></label>
                <div class="col-sm-7">
                   <select class="form-control" id="pgdip-passoutyear" name="pgdip-passoutyear">
                      <?php for($i=0;$i<count($yeararray);$i++){?>
                      <option value="<?php echo $yeararray[$i]['years'];?>"><?php echo $yeararray[$i]['years'];?></option>
                      <?php }?>
                      
                  </select>
                </div>        
              </div> 
             <div class="form-group">
                <label class="col-sm-5 control-label">Aggregate Marks <span class="error-text">*</span></label>
                <div class="col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" name="pgdip-percentagetype" id="pgdip-percentagetype" checked="checked"> Percentage
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="pgdip-percentagetype" id="pgdip-percentagetype"> CGPA(out of 10 points)
                    </label>        
                    <input type="text" class="form-control mar-t10" placeholder="" id="pgdip-percentage" name="pgdip-percentage">                                                      
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-5 control-label">School / College <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="pgdip-schoolname" name="pgdip-schoolname">
                </div>               
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Board <span class="error-text">*</span></label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" placeholder="" id="pgdip-board" name="pgdip-board">
                </div>        
              </div>                                            
            </form>
            </div>                        
            </div> 
            </div>
                     
            <div class="clearfix brd-top pad-t20">
                <button type="submit" class="btn btn-primary pull-right">NEXT</button>       
                <button type="submit" class="btn btn-default pull-right mar-r20">RESET</button>        
            </div>                   
     

    <footer class="home-footer">
          <div class="container">            
            <p class="pad-t5 pad-xs-t20">Copyrights &copy; 2015 Nanochipsolutions</p>               
          </div>          
    </footer>  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
      </form>
  </body>
</html>
