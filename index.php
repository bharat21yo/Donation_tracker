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
   <!-- Home View -->
   <div id="home-view">
     <!-- Hero Section -->
     <section class="hero">
       <div class="container">
         <h1>Connect. Donate. Transform.</h1>
         <p>Join thousands of donors making a difference by connecting directly with verified NGOs and charities worldwide.</p>
         <div class="hero-buttons">
           <a href="#" class="btn btn-primary">
             <i class="fas fa-user-plus"></i> Start Donating
           </a>
           <a href="#" class="btn btn-secondary">
             <i class="fas fa-search"></i> Browse NGOs
           </a>
         </div>
       </div>
     </section>

     <!-- Dashboard Grid -->
     <main class="main-content">
       <div class="container">
         <div class="dashboard-grid">
           <div class="dashboard-card donor-card">
             <i class="fas fa-hand-holding-heart donor-logo"></i>
             <h3>For Donors</h3>
             <p>Discover verified NGOs, donate securely, and track your impact with complete transparency.</p>
             <a href="#" class="btn btn-primary">
               <i class="fas fa-arrow-right"></i> Become a Donor
             </a>
           </div>

           <div class="dashboard-card ngo-card">
             <i class="fas fa-building ngo-logo"></i>
             <h3>For NGOs</h3>
             <p>Register your organization, post donation requests, and connect with generous donors worldwide.</p>
             <a href="#" class="btn btn-success">
               <i class="fas fa-arrow-right"></i> Register NGO
             </a>
           </div>

         </div>

         <!-- Features Section -->
         <div class="section">
           <div class="section-header">
             <i class="fas fa-star"></i>
             <h2>Platform Features</h2>
           </div>
           <div class="section-content">
             <div class="dashboard-grid">
               <div class="card">
                 <h3><i class="fas fa-shield-alt"></i> Secure & Transparent</h3>
                 <p>All donations are tracked with complete transparency. Every transaction is logged and verifiable.</p>
               </div>
               <div class="card">
                 <h3><i class="fas fa-map-marker-alt"></i> Find Nearby NGOs</h3>
                 <p>Use geolocation to discover and support NGOs in your local area or specific regions.</p>
               </div>
               <div class="card">
                 <h3><i class="fas fa-credit-card"></i> Multiple Payment Options</h3>
                 <p>Support various donation types - money, goods, or services through integrated payment gateways.</p>
               </div>
               <div class="card">
                 <h3><i class="fas fa-chart-line"></i> Track Your Impact</h3>
                 <p>Monitor your donation history and see the real-world impact of your contributions.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </main>
   </div>

   <?php include "includes/footer.php"; ?>

 </body>

 </html>
