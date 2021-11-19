<?php   
 if(isset($_POST["btnSubmit"])){ 

        $name=htmlspecialchars($_POST["txtName"]);//< > ' "
        $contact=htmlspecialchars($_POST["txtContact"]);

        $src_name=$_FILES["file"]["tmp_name"];
        $orig_name=$_FILES["file"]["name"];

        $file_type=$_FILES["file"]["type"];
        $file_size=$_FILES["file"]["size"];//bytes

        $kb=$file_size/1024;

        //$mb= $kb/1024;
        $valid_types=["image/jpeg","image/png"];        
        $errors=[];

        if(!preg_match("/^[a-zA-Z]+$/",$name)){         
          array_push($errors,"Invalid Name");
        }

        if(!preg_match("/^[0-9]{10,}$/",$contact)){         
          array_push($errors,"Invalid contact");
        }
   
        if($kb==0){
          array_push($errors,"Select file");
        }

        if($kb>90){
          array_push($errors,"File size exceed");
        }

        if(in_array($file_type,$valid_types)){
          array_push($errors,"Invalid format");
        }
        

        $csv=$name.",".$contact.",".$orig_name."\n";//CSV = Comma Separated Value       
     
        //Print to webpage or save data to file or store data into database.
        //copy($src_name,"img/contact/".$orig_name);
      
      if(count($errors)==0){      

              file_put_contents("contact.txt",$csv,FILE_APPEND);  
              move_uploaded_file($src_name,"img/contact/".$orig_name);          
    
     }else{
          foreach($errors as $error){
             echo $error."<br>";
          }
     }


  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{border-collapse: collapse;}
         table,td,th{border:1px solid lightgray}
         td{padding:10px}
         div{margin-top:10px}
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">  

       <div>
         Name<br>
         <input type="text" name="txtName" required/>         
       </div>

       <div>
         Contanct<br>
         <input type="text" name="txtContact"  required />         
       </div>

       <div>
           Photo<br>
           <input type="file" name="file" />
       </div>
       
       <div>        
         <input type="submit" name="btnSubmit" value="Submit"  />
       </div>

    </form>

   <?php
      //$txt=file_get_contents("contact.txt");
       
      $users=file("contact.txt");
     
      if(count($users)){      
        echo "<table>";
        echo "<tr><th>SN</th><th>Name</th><th>Mobile</th><th>Photo</th></tr>";
        $i=1;
        foreach($users as $user){         
          list($name,$mob,$photo)=explode(",",$user); 
          echo "<tr><td>$i</td><td>$name</td><td>$mob</td><td><img src='img/contact/$photo' height='50' /></td></tr>";
          $i++;
        }
        echo "</table>";
    }
   ?>

</body>
</html>