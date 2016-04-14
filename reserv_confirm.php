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

<h3>Reservation Confirmation</h3>

<div>
  <p> try and print all the info that was given</p>

    <label for="country">Hotel</label>
    <select id="country" name="country">
      <option value="australia">Charleston</option>
      <option value="canada">Charlottesville</option>
      <option value="usa">Boston</option>
      <option value="usa">Dallas</option>
      <option value="usa">Seattle</option>
      <option value="usa">Fairfield</option>
    </select>
  
    <p>Start date: <input type="text" name="startdate" placeholder="01/01/2016"></p>
            <p> End date: <input type="text" name="enddate" placeholder="01/03/2016"> </p>
    
     <label for="country">Room Type</label>
    <select id="country" name="country">
      <option value="australia">Double</option>
      <option value="canada">King</option>
      <option value="usa">Suit</option>
    </select>
  
   <label for="country">Payment Type</label>
    <select id="country" name="country">
      <option value="australia">Cash</option>
      <option value="canada">Check</option>
      <option value="usa">Credit Card</option>
    </select>
  
   <center> <button><a class="btn btn-default"  onclick="window.open('http://mes.ccps.us/files/2015/11/thank-you-1.jpg', 'newwindow', 'width=270, height=200'); return false;" >Submit </a></button></center>
  </form>
</div>

</body>
</html>