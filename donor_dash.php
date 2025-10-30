<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donor Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Donor Dashboard View -->
  <?php include "includes/header.php"; ?>
  <div id="donor-dashboard-view">
    <main class="main-content">
      <div class="container">
        <div class="section">
          <div class="section-header">
            <i class="fas fa-tachometer-alt"></i>
            <h2>Donor Dashboard</h2>
          </div>
          <div class="section-content">
            <div class="dashboard-grid">
              <div class="card">
                <h3><i class="fas fa-chart-line"></i> Total Donations</h3>
                <p style="font-size: 2rem; font-weight: bold; color: var(--primary-color);">₹25,500</p>
                <p>Across 8 different NGOs</p>
              </div>
              <div class="card">
                <h3><i class="fas fa-calendar-alt"></i> This Month</h3>
                <p style="font-size: 2rem; font-weight: bold; color: var(--success);">₹3,200</p>
                <p>2 donations completed</p>
              </div>
              <div class="card">
                <h3><i class="fas fa-award"></i> Impact Score</h3>
                <p style="font-size: 2rem; font-weight: bold; color: var(--accent-color);">92/100</p>
                <p>Top 10% contributor</p>
              </div>
            </div>

            <!-- Recent Donations -->
            <h3 style="margin: 2rem 0 1rem 0;"><i class="fas fa-history"></i> Recent Donations</h3>
            <div class="card-list">
              <div class="card">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">Hope Foundation</h4>
                    <p class="card-subtitle">August 15, 2025</p>
                  </div>
                  <span class="status-badge status-completed">Completed</span>
                </div>
                <div class="card-content">
                  <p><strong>Amount:</strong> ₹5,000</p>
                  <p><strong>Type:</strong> Financial Donation</p>
                  <p><strong>Purpose:</strong> School supplies for 50 children</p>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <div>
                    <h4 class="card-title">Green Earth Initiative</h4>
                    <p class="card-subtitle">August 10, 2025</p>
                  </div>
                  <span class="status-badge status-pending">In Progress</span>
                </div>
                <div class="card-content">
                  <p><strong>Type:</strong> Goods Donation</p>
                  <p><strong>Items:</strong> 20 books, 10 notebooks</p>
                  <p><strong>Status:</strong> Awaiting pickup</p>
                </div>
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
