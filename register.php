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

   <div id="registerModal" class="modal">
     <div class="modal-content">
       <div class="modal-header">
         <h2 class="modal-title">Create New Account</h2>
         <span class="close" onclick="closeModal('registerModal')">&times;</span>
       </div>
       <form id="registerForm">
         <div class="form-group">
           <label for="regUserType">Account Type</label>
           <select id="regUserType" class="form-control form-select" required onchange="toggleRegistrationFields()">
             <option value="donor">Individual Donor</option>
             <option value="ngo">NGO/Charity Organization</option>
           </select>
         </div>

         <div id="donorFields">
           <div class="form-group">
             <label for="donorName">Full Name</label>
             <input type="text" id="donorName" class="form-control" required>
           </div>
           <div class="form-group">
             <label for="donorEmail">Email Address</label>
             <input type="email" id="donorEmail" class="form-control" required>
           </div>
           <div class="form-group">
             <label for="donorPhone">Phone Number</label>
             <input type="tel" id="donorPhone" class="form-control" required>
           </div>
         </div>

         <div id="ngoFields" class="hidden">
           <div class="form-group">
             <label for="ngoName">Organization Name</label>
             <input type="text" id="ngoName" class="form-control">
           </div>
           <div class="form-group">
             <label for="ngoRegNo">Registration Number</label>
             <input type="text" id="ngoRegNo" class="form-control">
           </div>
           <div class="form-group">
             <label for="ngoEmail">Official Email</label>
             <input type="email" id="ngoEmail" class="form-control">
           </div>
           <div class="form-group">
             <label for="ngoCause">Primary Cause</label>
             <select id="ngoCause" class="form-control form-select">
               <option value="education">Education</option>
               <option value="health">Healthcare</option>
               <option value="environment">Environment</option>
               <option value="poverty">Poverty Relief</option>
               <option value="disaster">Disaster Relief</option>
               <option value="other">Other</option>
             </select>
           </div>
           <div class="form-group">
             <label for="ngoAddress">Address</label>
             <textarea id="ngoAddress" class="form-control" rows="3"></textarea>
           </div>
         </div>

         <div class="form-group">
           <label for="regPassword">Password</label>
           <input type="password" id="regPassword" class="form-control" required>
         </div>
         <div class="form-group">
           <label for="regConfirmPassword">Confirm Password</label>
           <input type="password" id="regConfirmPassword" class="form-control" required>
         </div>

         <button type="submit" class="btn btn-primary" style="width: 100%;">
           <i class="fas fa-user-plus"></i> Create Account
         </button>
         <p style="text-align: center; margin-top: 1rem;">
           Already have an account? <a href="login.php">Login here</a>
         </p>
       </form>
     </div>
   </div>

   <?php include "includes/footer.php"; ?>
 </body>

 </html>
