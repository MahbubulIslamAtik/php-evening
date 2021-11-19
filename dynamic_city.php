<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $cities=file("city.txt");//["Dhaka","Chottrogram","Khulna","Rajshahi"];
      
      echo "<select>";
      foreach($cities as $city){
        echo "<option>$city</option>";
      }
      echo "</select>";
    
    ?> 
   
</body>
</html>