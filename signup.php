<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
     <div class="login-box">
       <div class="row">
           <div class="col-md-6">
               
               
               <h2>Register Here</h2>
               <form action="register.php" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" required>
                      
                       
                   </div>
                    <div class="form-group">
                      <label>Contact</label>
                      <input type="text" name="contact" class="form-control" required>
                      
                       
                   </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" required>
                      
                       
                   </div>
                   <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
            
                   </div>
                   
                   
                   
                   
                   <div class="form-group">
                       <h3>Please Select</h3>
                        <input type="checkbox" name="brands[]" value="Fashion and Textile Industry">Fashion and Textile Industry <br>
                         <input type="checkbox" name="brands[]" value="Food and Hospitality Industry">Food and Hospitality Industry <br><input type="checkbox" name="brands[]" value="Drug and Health Industry">Drug and Health Industry <br>
                       <input type="checkbox" name="brands[]" value="Hospitality and Accomodation Industry">Hospitality and Accomodation Industry <br> <br><br>
                   
                   
                   </div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <button type="submit" class="btn btn-primary">Register</button> <br>
                   <a href="login.php" style="text-decoration:none">HAVE YOU REGISTERED? THEN LOGIN</a>
               </form>
           </div>
       </div>
     </div>
   </div>
    
</body>
</html>