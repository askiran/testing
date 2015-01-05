<?php
include("application/conn.php");
$idstudent=1;
$academicsql = mysql_query("Select * from tbl_academicproject where idstudent='$idstudent'");
$i=0;
while($row = mysql_fetch_assoc($academicsql))
{
    $academicArray[$i]['project_title'] = $row['project_title'];
    $academicArray[$i]['college_name'] = $row['college_name'];
    $academicArray[$i]['role'] = $row['role'];
    $academicArray[$i]['tools_used'] = $row['tools_used'];
    $academicArray[$i]['idacademicproject'] = $row['idacademicproject'];
    $i++;
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
               <li><a href="">academic qualification</a></li>
               <li class="active"><a href="">academic projects</a></li>
               <li><a href="">work experience</a></li>
               <li><a href="">career details</a></li>
           </ul>
       </nav>
    </div><!--/Main Nav Ends-->
    <div class="container mar-t30">
    <div class="clearfix brd-btm pad-b20">
        <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add-project">+ ADD PROJECT</button>                     
    </div>    
    <table class="table table-striped">
      <thead>
        <tr>
          <th>College / Institute / College</th>
          <th>Title</th>
          <th>Role</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php for($i=0;$i<count($academicArray);$i++){?>
              <tr>
          <td><?php echo $academicArray[$i]['college_name'];?></td>
          <td><?php echo $academicArray[$i]['project_title'];?></td>
          <td><?php echo $academicArray[$i]['role'];?></td>
          <td><?php echo $academicArray[$i]['tools_used'];?></td>
          <td><a href="editAcademicProject.php?idacademicproject=<?php echo $academicArray[$i]['idacademicproject'];?>" class="icon icon--edit" >Edit</a></td>
        </tr> 
              
          <?php } ?>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit" data-toggle="modal" data-target="#add-project">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit" data-toggle="modal" data-target="#add-project">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet</td>
          <td>Sed ut justo</td>
          <td>Nunc gravida</td>
          <td>Maecenas bibendum diam vitae sem elementum, sit amet sollicitudin risus ullamcorper.</td>
          <td><a href="#" class="icon icon--edit">Edit</a><a href="#" class="icon icon--delete mar-l20">Delete</a></td>
        </tr>                                                                
      </tbody>
    </table>                
    <div class="clearfix brd-top pad-t20">
        <button type="submit" class="btn btn-primary pull-right">NEXT</button>                      
    </div>                   
    </div> 
    
    <footer class="home-footer">
          <div class="container">            
            <p class="pad-t5 pad-xs-t20">Copyrights &copy; 2015 Nanochipsolutions</p>               
          </div>          
    </footer>  
 
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
