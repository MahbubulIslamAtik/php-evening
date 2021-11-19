<?php

$name="Jahid";
echo <<<'ABC'
<form name="f">
<div>Name<br>
   <input type="text" name="txtName" value="$name" />           
</div>
<div>Email<br>
 <input type="text" name="txtEmail" />           
</div>
<div>City<br>
   <select name="cmbCity"> 
     <option>Dhaka</option>
     <option>Rangpur</option>
     <option>Narshindhi</option>            
   </select>          
</div>
<div>
    Gender<br>
    <input type="radio" name="rdoGender" value="Male">M
    <input type="radio" name="rdoGender" value="Female">F
</div>
<div>Subject<br>
     <input type="checkbox" name="chkSubject" value="CSS">CSS
     <input type="checkbox" name="chkSubject" value="HTML">HTML
     <input type="checkbox" name="chkSubject" value="JavaScript">JavaScript
     <input type="checkbox" name="chkSubject" value="PHP">PHP
</div>
<div>
    Address<br>
    <textarea name="txtAddress"></textarea>
</div>
<div>
    <input type="button" onclick="processForm(f)" value="Submit" />
</div>  

</form>
ABC;


?>