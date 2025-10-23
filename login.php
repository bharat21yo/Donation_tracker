 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Donation Tracker - Connect. Donate. Transform.</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
 </head>

 <body>
   <?php include "includes/header.php"; ?>

   <div id="loginModal" class="modal">
     <div class="modal-content">
       <div class="modal-header">
         <h2 class="modal-title">Login to Your Account</h2>
         <span class="close" onclick="closeModal('loginModal')">&times;</span>
       </div>
       <form id="loginForm">
         <div class="form-group">
           <label for="loginEmail">Email Address</label>
           <input type="email" id="loginEmail" class="form-control" required>
         </div>
         <div class="form-group">
           <label for="loginPassword">Password</label>
           <input type="password" id="loginPassword" class="form-control" required>
         </div>
         <div class="form-group">
           <label for="userType">Login As</label>
           <select id="userType" class="form-control form-select" required>
             <option value="donor">Donor</option>
             <option value="ngo">NGO</option>
             <option value="admin">Administrator</option>
           </select>
         </div>
         <button type="submit" class="btn btn-primary" style="width: 100%;">
           <i class="fas fa-sign-in-alt"></i> Login
         </button>
         <p style="text-align: center; margin-top: 1rem;">
           Don't have an account? <a href="register.php">Register here</a>
         </p>
       </form>
     </div>
   </div>

   <?php include "includes/footer.php"; ?>
 </body>

 </html>
