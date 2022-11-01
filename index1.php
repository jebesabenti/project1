<DOCTYPE html>
<?php
 include"connection.php";
?>
<html>
    <head>
    <link  href="styles.css" rel="stylesheet" type="text/css"/></head>

        <body>
            <div clas=container>
                <div class="col-lg-4">
</div>
            <form action=" " method="post" onclick="verification"
   <h2 style=text :"center"> EMPLOYEE  INFO REGISTRATION FORM</h2><br><br>
    employeID:
    <input type="text" name="emid" id=""   </input><br><br>
    frist name:
    <input type="text" name="fname"id="" </input><br><br>
     last name:</label>
    <input type="text" name="lname" id="" </input><br><br>
    Gender:
     <input type="radio" id="id2" value="" name="gender">male
    <input type="radio" id="id1" value="female" name="gender">female</br><br>
    Unit:
    <select></td>
        <option>one </option>
        <option>two</option><br>
        <option>three </option>
        <option>four </option>
        <option>five </option></select>
       status:
        <select>
        <option>1 </option>
        <option>0</option>
        </select><br><br>
        
        <button type="button" class="btn btn-primary">save</button>
<button type="button" class="btn btn-secondary">delete</button>
<button type="button" class="btn btn-success">search</button>
<button type="button" class="btn btn-danger">update</button>
</form>
    </div>
</body>
</html> 
<?php
if(isset($_POST["insert"])){
    mysqli_query($link,"insert into info values(NULL,'$_POST[emid]','$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[Unit]','$_POST[status]')");
}
if(isset($_POST["delete"])){
    mysqli_query($link,"delete from info where frist name='$_POST[fname]'");
}
if(isset($_POST["update"])){
    mysqli_query($link,"update info set frist name='$_POST[lname]'");
}
?>

<?php
$res=mysqli_query($link,"select * from info");
while($row=mysqli_fetch_array($res));
?>
