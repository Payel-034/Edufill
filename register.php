<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Medico Registration</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

   <div class="container py-5">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card shadow">
               <div class="card-header bg-primary text-white text-center">
                  <h3>Edufill Registration</h3>
               </div>
               <div class="card-body">
                  <form action="register_action.php" method="post">
                     
                     <div class="form-row">
                        <div class="form-group col-md-4">
                           <label for="fname">First Name</label>
                           <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="mname">Middle Name</label>
                           <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="lname">Last Name</label>
                           <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="phone">Phone Number</label>
                           <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="pass">Password</label>
                           <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="cnfPass">Confirm Password</label>
                           <input type="password" class="form-control" name="cnfPass" id="cnfPass" placeholder="Confirm Password" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="gender" value="male" id="male" required>
                           <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                           <label class="form-check-label" for="female">Female</label>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-8">
                           <label for="state">State</label>
                           <select name="state" id="state" class="form-control" required>
                              <option value="" disabled selected>--- Select your State ---</option>
                              <option>Arunachal Pradesh</option>
                              <option>Assam</option>
                              <option>Andhra Pradesh</option>
                              <option>Bihar</option>
                              <option>Chattishgarh</option>
                              <option>Goa</option>
                              <option>Gujarat</option>
                              <option>Haryana</option>
                              <option>Himachal Pradesh</option>
                              <option>Jharkhand</option>
                              <option>Karnataka</option>
                              <option>Kerala</option>
                              <option>Madhya Pradesh</option>
                              <option>Maharashtra</option>
                              <option>Manipur</option>
                              <option>Meghalaya</option>
                              <option>Mizoram</option>
                              <option>Nagaland</option>
                              <option>Odisha</option>
                              <option>Punjab</option>
                              <option>Rajasthan</option>
                              <option>Sikkim</option>
                              <option>Tamil Nadu</option>
                              <option>Telangana</option>
                              <option>Tripura</option>
                              <option>Uttar Pradesh</option>
                              <option>Uttarakhand</option>
                              <option>West Bengal</option>
                           </select>
                        </div>

                        <div class="form-group col-md-4">
                           <label for="Pincode">Pin Code</label>
                           <input type="number" name="pincode" id="Pincode" class="form-control" placeholder="Pin Code" required>
                        </div>
                     </div>

                     <div class="text-center">
                        <input type="submit" value="Sign Up" class="btn btn-info mr-2" name="signup_btn">
                        <!-- <button type="submit" class="btn btn-info mr-2" name="submit">Submit</button> -->
                        <!-- <button type="button" class="btn btn-success">Help</button> -->
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <a href="index.php" class="badge badge-success">Already have an account? Login.</a>
                        </div>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- JS Scripts -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
