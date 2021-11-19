<style>
   table{
    border-collapse:collapse;
   }
   table,td,th{border:1px solid lightgray;padding:5px}
</style>

<?php
  $students=["Jahid,26","Ashraf,26","Rahim,20","Karim,21"];

  echo "<table>";
  echo "<tr><th>Name</th><th>Age</th></tr>";
  foreach($students as $student){
    
    list($name,$age)=explode(",",$student);
    echo "<tr><td>$name</td><td>$age</td></tr>";
   
  }
  echo "</table>";

?>
