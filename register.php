<?php
session_start();
if (isset($_SESSION['email'])) {
  header("Location: dashboard.php");
  exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  include "db.php";
  
  $user_type = $_POST['user_type'];
  $reg_password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  // Validate passwords match
  if ($reg_password !== $confirm_password) {
    $error = "Passwords do not match!";
  } else {
    // Hash password
    $hashed_password = password_hash($reg_password, PASSWORD_DEFAULT);
    
    if ($user_type === 'donor') {
      // Handle Individual Donor Registration
      $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      
      // Check if email already exists
      $check_email = "SELECT * FROM Donor WHERE Email = '$email'";
      $result = $conn->query($check_email);
      
      if ($result->num_rows > 0) {
        $error = "Email already exists!";
      } else {
        // Insert into Donor table
        $sql = "INSERT INTO Donor (Name, Email, Phone, Address, Password) 
                VALUES ('$full_name', '$email', '$phone', '$address', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
          $_SESSION['email'] = $email;
          $_SESSION['user_type'] = 'donor';
          $_SESSION['name'] = $full_name;
          header("Location: donor_dash.php");
          exit();
        } else {
          $error = "Error: " . $conn->error;
        }
      }
      
    } else if ($user_type === 'ngo') {
      // Handle NGO Registration
      $ngo_name = mysqli_real_escape_string($conn, $_POST['ngo_name']);
      $registration_no = mysqli_real_escape_string($conn, $_POST['registration_no']);
      $ngo_email = mysqli_real_escape_string($conn, $_POST['ngo_email']);
      $ngo_phone = mysqli_real_escape_string($conn, $_POST['ngo_phone']);
      $ngo_address = mysqli_real_escape_string($conn, $_POST['ngo_address']);
      $ngo_cause = mysqli_real_escape_string($conn, $_POST['ngo_cause']);
      
      // Check if email already exists
      $check_email = "SELECT * FROM NGO WHERE Email = '$ngo_email'";
      $result = $conn->query($check_email);
      
      if ($result->num_rows > 0) {
        $error = "Email already exists!";
      } else {
        // Insert into NGO table
        $sql = "INSERT INTO NGO (Name, Registration, Email, Phone, Address, Cause, Password) 
                VALUES ('$ngo_name', '$registration_no', '$ngo_email', '$ngo_phone', '$ngo_address', '$ngo_cause', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
          $_SESSION['email'] = $ngo_email;
          $_SESSION['user_type'] = 'ngo';
          $_SESSION['name'] = $ngo_name;
          header("Location: dashboard.php");
          exit();
        } else {
          $error = "Error: " . $conn->error;
        }
      }
    }
  }
  
  $conn->close();
}
?>

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
      <?php if ($error) { ?>
        <div class="error_message">
          <p class="p_register" style="color: red;text-align: center;"><strong><?= $error ?></strong></p>
        </div>
      <?php } ?>
      <form id="registerForm" method="POST" action="">
        <div class="form-group">
          <label for="regUserType">Account Type</label>
          <select id="regUserType" name="user_type" class="form-control form-select" required onchange="toggleRegistrationFields()">
            <option value="donor">Individual Donor</option>
            <option value="ngo">NGO/Charity Organization</option>
          </select>
        </div>

        <div id="donorFields">
          <div class="form-group">
            <label for="donorName">Full Name</label>
            <input type="text" id="donorName" name="full_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="donorEmail">Email Address</label>
            <input type="email" id="donorEmail" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone" name="phone" class="form-control">
          </div>
          <div class="form-group">
            <label for="donorAddress">Address</label>
            <textarea id="donorAddress" name="address" class="form-control" rows="3"></textarea>
          </div>
        </div>

        <div id="ngoFields" class="hidden">
          <div class="form-group">
            <label for="ngoName">Organization Name</label>
            <input type="text" id="ngoName" name="ngo_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="ngoRegNo">Registration Number</label>
            <input type="text" id="ngoRegNo" name="registration_no" class="form-control">
          </div>
          <div class="form-group">
            <label for="ngoEmail">Official Email</label>
            <input type="email" id="ngoEmail" name="ngo_email" class="form-control">
          </div>
          <div class="form-group">
            <label for="ngoPhone">Phone Number</label>
            <input type="tel" id="ngoPhone" name="ngo_phone" class="form-control">
          </div>
          <div class="form-group">
            <label for="ngoCause">Primary Cause</label>
            <select id="ngoCause" name="ngo_cause" class="form-control form-select">
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
            <textarea id="ngoAddress" name="ngo_address" class="form-control" rows="3"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="regPassword">Password</label>
          <input type="password" id="regPassword" name="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="regConfirmPassword">Confirm Password</label>
          <input type="password" id="regConfirmPassword" name="confirm_password" class="form-control" required>
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
  <script>
    // Registration Form Management
    function toggleRegistrationFields() {
      const userType = document.getElementById('regUserType').value;
      const donorFields = document.getElementById('donorFields');
      const ngoFields = document.getElementById('ngoFields');

      if (userType === 'donor') {
        donorFields.classList.remove('hidden');
        ngoFields.classList.add('hidden');
        // Set donor fields as required
        document.getElementById('donorName').required = true;
        document.getElementById('donorEmail').required = true;
        document.getElementById('donorPhone').required = true;
        document.getElementById('donorAddress').required = true;
        // Remove required from NGO fields
        document.getElementById('ngoName').required = false;
        document.getElementById('ngoRegNo').required = false;
        document.getElementById('ngoEmail').required = false;
        document.getElementById('ngoPhone').required = false;
        document.getElementById('ngoAddress').required = false;
      } else {
        donorFields.classList.add('hidden');
        ngoFields.classList.remove('hidden');
        // Remove required from donor fields
        document.getElementById('donorName').required = false;
        document.getElementById('donorEmail').required = false;
        document.getElementById('donorPhone').required = false;
        document.getElementById('donorAddress').required = false;
        // Set NGO fields as required
        document.getElementById('ngoName').required = true;
        document.getElementById('ngoRegNo').required = true;
        document.getElementById('ngoEmail').required = true;
        document.getElementById('ngoPhone').required = true;
        document.getElementById('ngoAddress').required = true;
      }
    }

    // Donation Form Management
    function toggleDonationFields() {
      const donationType = document.getElementById('donationType').value;
      const moneyFields = document.getElementById('moneyFields');
      const goodsFields = document.getElementById('goodsFields');
      const serviceFields = document.getElementById('serviceFields');

      // Hide all fields first
      moneyFields.classList.add('hidden');
      goodsFields.classList.add('hidden');
      serviceFields.classList.add('hidden');

      // Show relevant fields
      if (donationType === 'money') {
        moneyFields.classList.remove('hidden');
      } else if (donationType === 'goods') {
        goodsFields.classList.remove('hidden');
      } else if (donationType === 'services') {
        serviceFields.classList.remove('hidden');
      }
    }

    function openDonationModal(ngoName) {
      document.querySelector('#donationModal .modal-title').textContent = Donate to ${ngoName};
      openModal('donationModal');
    }
  </script>
</body>

</html>