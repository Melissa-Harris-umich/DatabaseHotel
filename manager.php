<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Site</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">

</head>
<body>




<h1>Manager Site</h1>
<form action = '/DatabaseHotel/manager.php' method = "post"
<div>
<p>Please select at least one option<p>
<p><input type="checkbox"name="language[]" value="Update Hotel" />Update Hotel</p>
<p><input type="checkbox"name="language[]" value="Delete Room"/>Delete a Room</p>
<p><input type="checkbox"name="language[]" value="Add Hotel"/>Add a Hotel</p>
<p><input type="checkbox"name="language[]" value="Delete Hotel"/>Delete a Hotel</p>
<p><input type="checkbox"name="language[]" value="Add Room Type"/>Add a Room Type</p>
<p><input type="checkbox"name="language[]" value="Add Occupants"/>Add more Occupants</p>
<p><input type="checkbox"name="language[]" value="Revenue"/>Generate Revenue</p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
</body>
</html>


<?php
if(isset($_POST["submit"]))  //if user clicks the submit button
{
     $language = $_POST['language'];

  if(!empty($_POST["language"]))  //if user clicks on a check box
  {
    echo '<h3>The following actions have been selected<h3>';
    foreach($_POST["language"] as $key => $values)  /* $key => Values allows for
    more than one value that has been checked to be stored.*/
    {
          echo $values.", ";
    }

    if($values == "Update Hotel")
    {

      /*Redirect to new page to update values within
      Hotel Relation
      */
      echo 'Update';
    }
    if($values == "Delete Room")
    {
      /* Querey database

      */
      echo 'Delete Row';

    }
    if($values == "Add Hotel")
    {
      /* Querey database

      */
      echo 'Add HOtel';

    }
    if($values == "Delete Hotel")
    {
      /* Querey database

      */
      echo 'Add Hotel';

    }
    if($values == "Add Room Type")
    {
      /* Querey database

      */
      echo 'Add Room type';

    }
    if($values == "Delete Room")
    {
      /* Querey database

      */
      echo 'Delete Row';

    }
    if($values == "Add Occupants")
    {
      /* Querey database

      */
      echo 'Add Occupants';
    }
    if($values == "Revenue")
    {
      /* Querey database

      */
      echo 'Revenue';


    }


  }else {
    echo 'Please check at least one option';
  }
}



 ?>













</body>
</html>
