<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
    <title>Hello, world!</title>
  </head>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


    <!---Our CSS Style------------->


      <!-----PHP CONNECTING---->
      <?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('421 database');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }


?>
<body>



<style>

#header {
    background: url(assets/img/hero/h1_hero.jpg);
    height: 100vh;
}

</style>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="#">HOTEL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#title">About Us</a>
                </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>

            </ul>
          </div>
        </nav>



            <!-- id in section given header for meaning, to make more meaningful -->
    <section id="header" class="jumbotron text-center">
      <div class="center">



     <form method="post">
                    <!-- select in date -->
                   
                        <!-- select out date -->
                       <div>
                            <span> Check In Date:</span>
                       
                     
                            <input id="datepicker1" name="check_in" type='date' placeholder="10/12/2020"  />
                        
                   </div>
                   </br>
                    <!-- Single Select Box -->
                    <div>
                            <span>Check OutDate:</span>
                        
                        
                            <input id="datepicker2" name="check_out"  type='date' placeholder="12/12/2020" />
                        </div>
                        </br>
                   <div>
                    <!-- Single Select Box -->
                  
                       
                            <span>Number of Occupants:</span>
                       
                      
                            <form action="#">
                                
                                    <select name="select" id="select1" name="numOccupants">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                    </select>
                                     </div>
                                     </br>
                                
                            </form>
                        </div>
                   </div>

                    <div class="single-select-box pt-45 mb-30">
</br>
                     <input type='submit' href="#" class="btn select-btn" name="bookBtn">
                   </div>
                   </form> 
      </div>

    </section>

</header>
</nav>
</html>
