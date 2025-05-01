<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">

      <!-- <title>Welcome to Usify</title> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      
      <!-- JS STrats -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- JS Ends -->
      
   </head>
   <body> 
      <div class="container">
         <div class="col-8">
            <div class="card">
               <div class="card-header">
                  <h1>Medico Registration</h1>
               </div>
               <div class="card-body">
                  <form action="register_action.php" method="post">
                     <div class="form-inline">
                        <input type="text" class="form-control mr-2" name="fname" id="fname" placeholder="Enter Your First Name">
                        <input type="text" class="form-control mr-2" name="mname" id="fname" placeholder="Enter Your Middle Name">
                        <input type="text" class="form-control" name="lname" id="fname" placeholder="Enter Your Last Name">
                     </div>
                     <div class="form-inline mt-2">
                        <input type="email" class="form-control mr-2" name="email" id="email" placeholder="Enter email ID">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone No">
                     </div>
                     <div class="form-inline mt-2">
                        <input type="password" class="form-control mr-2" name="pass" id="pass" placeholder="Enter Password">
                        <input type="text" class="form-control" name="cnfPass" id="cnfPass" placeholder="Enter Password again">
                     </div>      
                     <div class="form-inline mt-2">
                        <label for="">Select your Gender</label><br>
                        <input type="radio" value="male" name="gender" class="form-control m-2"> Male
                        <input type="radio" value="female" name="gender" class="form-control m-2"> Female 
                     </div>
                     <div class="form-inline mt-2">
                        <label for="">Select Your State</label>
                        <select name="state" id="state" class="form-control m-2">
                           <option value="na" disabled selected> --- Select your State --- </option>
                           <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                           <option value="Assam">Assam</option>
                           <option value="Andhra Pradesh">Andhra Pradesh</option>
                           <option value="Bihar">Bihar</option>
                           <option value="Chattishgarh">Chattishgarh</option>
                           <option value="Goa">Goa</option>
                           <option value="Gujarat">Gujarat</option>
                           <option value="Haryana">Haryana</option>
                           <option value="Himachal Pradesh">Himachal Pradesh</option>
                           <option value="Jharkhand">Jharkhand</option>
                           <option value="Karnatak">Karnatak</option>
                           <option value="Kerala">Kerala</option>
                           <option value="Madhya Pradesh">Madhya Pradesh</option>
                           <option value="Maharashtra">Maharashtra</option>
                           <option value="Manipur">Manipur</option>
                           <option value="Meghalaya">Meghalaya</option>
                           <option value="Mizoram">Mizoram</option>
                           <option value="Nagaland">Nagaland</option>
                           <option value="Odisha">Odisha</option>
                           <option value="Punjab">Punjab</option>
                           <option value="Rajasthan">Rajasthan</option>
                           <option value="Sikkim">Sikkim</option>
                           <option value="Tamil Nadu">Tamil Nadu</option>
                           <option value="Telengana">Telengana</option>
                           <option value="Tripura">Tripura</option>
                           <option value="Uttar Pradesh">Uttar Pradesh</option>
                           <option value="Uttarakhand">Uttarakhand</option>
                           <option value="West Bengal">West Bengal</option>
                        </select>
                     </div>
                     <br> 
                     <input type="number" placeholder="Enter Pin code" id="Pincode" class="form-control" name="pincode">
                     <br>
                     <input type="Submit" Value="submit" id="buttonOne" class="btn btn-info" name="submit">
                     
                    
                     <button class="btn btn-success">help</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>