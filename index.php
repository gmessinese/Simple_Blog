<?php
  session_start();
  #Create an object for the dbms handlings
  if(!$_SESSION['authenticated'])
  {
    header("Location: login.html");
    exit;
  }  
?>
<!DOCTYPE html>
<html lang='en'>
  <title> Dashboard </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycss.css">
  
</head>
<body>
  <div class='container'>
    <div class='page-header'>
      <h1><b> My Simple Blog </b></h1>
    </div>
    
    <div class='row'>
      <div class="col-lg-8">  
        <!-- A panel who contains items for insert new post-->
        <img class='adder-img' src='img/add.png' id='add'>
        <img class='adder-img' src='img/add-picture.png'>
      </div> 
      
      <div class='col-lg-4 user-panel' >
        <div class='row'>
          <div class='col-lg-2'>
            <img src='img/user.jpg' class='img-rounded user-img'>
          </div>
          
          <div class='col-lg-8' >
            <p><?php echo $_SESSION['name']. ' ' . $_SESSION['surname']; ?></p>
          </div>

          <div class='dropdown col-lg-2'>
            <button class='btn btn-default dropdown-toggle' type='button' 
            data-toggle='dropdown'>
              <span class='caret'></span>
            </button>
            <ul class='dropdown-menu dropdown-menu-right' >
              <li><a tabindex='-1' href='logout.php'>Log out</a></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- A row for new posts -->
    <div class='row'>
      <div class="form-group col-lg-8" id='add-post'>
        <form action='post.php' method='post'>
          <label style='color:white'>New post:</label>
          <textarea class='form-control' style='resize: none' 
          rows='2' name='description'></textarea>
          <input style='float:right; margin-top:5px;' 
          class='btn btn-default' type='submit'>
        </form>
      </div>  
    </div>
    
    
  </div>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/myjs.js"></script>
  </body>
</html> 

