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
  <form action="MakeReservation.php" method=POST>
    
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
        <label for="hotel">Location</label>
        <select id="hotel" name="hotel" required>
          <option value="1">Beach Palms</option>
          <option value="2">Casino Royale</option>
          <option value="3">Three Palms</option>
            <option value="4">CourtYard</option>
            <option value="5">Sleep Inn</option>
            <option value="6">Hartford House</option>
        </select>  
       <label for="type">Room</label>
      <select id="type" name="type" required>
          <option value="doubles">Double</option>
          <option value="king">King</option>
          <option value="suite">Suite</option>
        </select><br>
        <label for="startdate">Check-in</label><br>
        <input type="date" id="startdate" name="startdate" min="2016-04-25"><br><br>
     <label for="enddate">Check-out</label><br>
      <input type="date" id="enddate" name="enddate" min="2016-04-26"><br><br> 
    
<!--
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" name="startdate" required pattern="(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(201)[6-7]{1}">

    <label for="enddate">EndDate</label>
    <input type="text" id="enddate" name="enddate" required pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
-->
<!--
   
    <label for="type">Room Type</label>
      <select id="type" name="type">
      <option value="double">Double</option>
      <option value="King">King</option>
      <option value="Suite">Suite</option>
    </select>
-->

   <center><input type="submit" name=submit></center>
    

    
  </form>
</div>

</body>
</html>