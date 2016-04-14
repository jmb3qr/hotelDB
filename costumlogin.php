<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button {
    border-radius: 8px;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<body>

<div>
  <form action="action_page.php">
    
     <label for="fname">Email</label>
    <input type="text" id="fname" name="email">
    
   <!-- If statment, if eamil exists done, else add more info-->
    
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname">

      <label for="lname">Phone Number</label>
    <input type="text" id="lname" name="phonenumber" placeholder="757-276-9803">
    
    <label for="lname">Date of Birth</label>
    <input type="text" id="lname" name="phonenumber" placeholder="04/06/1987">
   
  

   <center> <button><a class="btn btn-default" href="http://plato.cs.virginia.edu/~jmb3qr/reserv_confirm">Submit </a></button></center>
    

    
  </form>
</div>

</body>
</html>

