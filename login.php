<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
     <div class="login-box">
       <div class="row">
           <div class="col-md-6">
               
               <h2>Login Here</h2>
               <form action="validation.php" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" required>
                      
                       
                   </div>
                   <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
            
                   </div>
                   <button type="submit" class="btn btn-primary">Login</button> <br>
                   <a href="signup.php" style="text-decoration:none">NOT YET REGISTERED, THEN SIGNUP</a>
               </form>
           </div>
       </div>
     </div>
   </div>
    
</body>
</html> 