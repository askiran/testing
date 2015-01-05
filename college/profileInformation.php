<?php
$idstudent = 1;
if($_POST)
{
  
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $country = $_POST['country'];
    $languages = $_POST['languages'];
    $mobileNumber = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $nationality = $_POST['nationality'];
    $datepicker = $_POST['datepicker'];
     $gender = $_POST['gender'];
      $fatherName = $_POST['fatherName'];

    mysql_query("Update tbl_student set firstname='$firstName', lastname='$lastName',gender='$gender',
        mobile='$mobileNumber',city='$city',pincode='$pincode',country='$country',fathername='$fatherName',
            state='$state',dob='$datepicker', address='$address', languages='$languages',
            nationality='$nationality' where idstudent='$idstudent'");
    
    
    
    
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
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
 
   <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  });
  </script>
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
               <li class="active"><a href="">Personal Information</a></li>
               <li><a href="">academic qualification</a></li>
               <li><a href="">academic projects</a></li>
               <li><a href="">work experience</a></li>
               <li><a href="">career details</a></li>
           </ul>
       </nav>
    </div><!--/Main Nav Ends-->
    <div class="container mar-t30">
    <div class="row">
    <div class="form-horizontal col-sm-6">
      <div class="form-group">
        <label class="col-sm-5 control-label">First Name <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="firstName" name="firstName" value="">
        </div>        
      </div> 
      <div class="form-group">
        <label class="col-sm-5 control-label">Email <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <p class="form-control-static">email@example.com</p>
        </div>
      </div>
     
      <div class="form-group">
        <label class="col-sm-5 control-label">City <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="city" name="city">
        </div>        
      </div>  
      <div class="form-group">
        <label class="col-sm-5 control-label">Pincode <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="pincode" name="pincode">
        </div>        
      </div> 
      <div class="form-group">
        <label class="col-sm-5 control-label">Country <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <select class="form-control" id="country" name="country">
              <option value="India">India</option>
          </select>
        </div>        
      </div> 
      <div class="form-group">
        <label class="col-sm-5 control-label">Date Of Birth <span class="error-text">*</span></label>
        <div class="col-sm-7">
        <input type="text" class="form-control" placeholder="" id="datepicker" name="datepicker">
        </div>        
                      
      </div>                                                   
      <div class="form-group">
        <label class="col-sm-5 control-label">Father Name</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="fatherName" name="fatherName">
        </div>        
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label">Languages Known</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="languages" name="languages">
          <p class="help-block">eg. English, Kannada, Hindi, etc...</p>
        </div>        
      </div>            
    </div>
    <div class="form-horizontal col-sm-6">
      <div class="form-group">
        <label class="col-sm-5 control-label">Last Name <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="lastName" name="lastName">
        </div>        
      </div> 
      <div class="form-group">
        <label class="col-sm-5 control-label">Mobile Number <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="mobileNumber" name="mobileNumber">
        </div>        
      </div>  
      <div class="form-group">
        <label class="col-sm-5 control-label">Address for Communication <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <textarea class="form-control" rows="9" id="address" name="address"></textarea>
        </div>        
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label">State <span class="error-text">*</span></label>
        <div class="col-sm-7">
          <select class="form-control" id="state" name="state">
              <option value="Karnataka">Karnataka</option>
          </select>
        </div>        
      </div> 
      <div class="form-group">
        <label class="col-sm-5 control-label">Gender <span class="error-text">*</span></label>
        <div class="col-sm-7">
            <label class="radio-inline">
              <input type="radio" name="gender" id="male" value="Male"> Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" id="female" value="Female"> Female
            </label>
        </div>        
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label">Nationality</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="" id="nationality" name="nationality">
        </div>        
      </div>                                                
    </div>    
    </div> 
    <div class="clearfix brd-top pad-t20">
        <button type="submit" class="btn btn-primary pull-right">SAVE & CONTINUE</button>       
        <button type="submit" class="btn btn-default pull-right mar-r20">RESET</button>        
    </div>       
    </div> 
      </form>   
    <footer class="home-footer">
          <div class="container">            
            <p class="pad-t5 pad-xs-t20">Copyrights &copy; 2015 Nanochipsolutions</p>               
          </div>          
    </footer>  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
