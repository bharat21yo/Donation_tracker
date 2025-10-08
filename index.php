 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Tracker - Connect. Donate. Transform.</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #10b981;
            --accent-color: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
            --white: #ffffff;
            --border-color: #e5e7eb;
            --success: #10b981;
            --warning: #f59e0b;
            --error: #ef4444;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: var(--bg-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--white);
            padding: 1rem 0;
            box-shadow: var(--shadow-lg);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .logo i {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--primary-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background: var(--white);
            color: var(--primary-color);
        }

        .btn-success {
            background: var(--success);
            color: var(--white);
        }

        .btn-success:hover {
            background: #059669;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--white);
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--white), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Main Content */
        .main-content {
            padding: 3rem 0;
        }

        .section {
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .section-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--white);
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .section-content {
            padding: 2rem;
        }

        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .dashboard-card {
            background: var(--white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .dashboard-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .donor-card i {
            color: var(--primary-color);
        }

        .ngo-card i {
            color: var(--secondary-color);
        }

        .admin-card i {
            color: var(--accent-color);
        }

        .dashboard-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .dashboard-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        /* Form Styles */
        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        /* Cards and Lists */
        .card-list {
            display: grid;
            gap: 1.5rem;
        }

        .card {
            background: var(--white);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .card-header {
            display: flex;
            justify-content: between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .card-content {
            margin-bottom: 1rem;
        }

        .card-actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        /* Status Badges */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .status-approved {
            background: #d1fae5;
            color: #065f46;
        }

        .status-completed {
            background: #dbeafe;
            color: #1e40af;
        }

        .status-rejected {
            background: #fee2e2;
            color: #991b1b;
        }

        /* Search and Filter */
        .search-filter {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .search-box {
            flex: 1;
            min-width: 250px;
        }

        .filter-box {
            min-width: 200px;
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: var(--white);
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .search-filter {
                flex-direction: column;
            }
        }

        /* Hidden class for view switching */
        .hidden {
            display: none !important;
        }

        /* Loading States */
        .loading {
            text-align: center;
            padding: 2rem;
            color: var(--text-light);
        }

        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid var(--primary-color);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }

        .modal-content {
            background-color: var(--white);
            margin: 5% auto;
            padding: 2rem;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: var(--shadow-lg);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .close {
            color: var(--text-light);
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: var(--text-dark);
        }

        /* Alert Styles */
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid;
        }

        .alert-success {
            background-color: #f0fdf4;
            color: #166534;
            border-color: var(--success);
        }

        .alert-error {
            background-color: #fef2f2;
            color: #991b1b;
            border-color: var(--error);
        }

        .alert-warning {
            background-color: #fffbeb;
            color: #92400e;
            border-color: var(--warning);
        }

        .alert-info {
            background-color: #eff6ff;
            color: #1e40af;
            border-color: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav container">
            <div class="logo">
                <i class="fas fa-heart"></i>
                <span>DonationTracker</span>
            </div>
            <ul class="nav-links">
                <li><a href="#" onclick="showView('home')">Home</a></li>
                <li><a href="#" onclick="showView('browse-ngos')">Browse NGOs</a></li>
                <li><a href="#" onclick="showView('about')">About</a></li>
                <li><a href="#" onclick="showView('contact')">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="#" class="btn btn-secondary" onclick="openModal('loginModal')">Login</a>
                <a href="#" class="btn btn-primary" onclick="openModal('registerModal')">Register</a>
            </div>
        </nav>
    </header>

    <!-- Home View -->
    <div id="home-view">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h1>Connect. Donate. Transform.</h1>
                <p>Join thousands of donors making a difference by connecting directly with verified NGOs and charities worldwide.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary" onclick="openModal('registerModal')">
                        <i class="fas fa-user-plus"></i> Start Donating
                    </a>
                    <a href="#" class="btn btn-secondary" onclick="showView('browse-ngos')">
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
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>For Donors</h3>
                        <p>Discover verified NGOs, donate securely, and track your impact with complete transparency.</p>
                        <a href="#" class="btn btn-primary" onclick="openModal('registerModal', 'donor')">
                            <i class="fas fa-arrow-right"></i> Become a Donor
                        </a>
                    </div>

                    <div class="dashboard-card ngo-card">
                        <i class="fas fa-building"></i>
                        <h3>For NGOs</h3>
                        <p>Register your organization, post donation requests, and connect with generous donors worldwide.</p>
                        <a href="#" class="btn btn-success" onclick="openModal('registerModal', 'ngo')">
                            <i class="fas fa-arrow-right"></i> Register NGO
                        </a>
                    </div>

                    <div class="dashboard-card admin-card">
                        <i class="fas fa-cog"></i>
                        <h3>Admin Panel</h3>
                        <p>Manage platform operations, verify organizations, and monitor donation activities.</p>
                        <a href="#" class="btn btn-primary" onclick="showView('admin-login')">
                            <i class="fas fa-arrow-right"></i> Admin Access
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

    <!-- Browse NGOs View -->
    <div id="browse-ngos-view" class="hidden">
        <main class="main-content">
            <div class="container">
                <div class="section">
                    <div class="section-header">
                        <i class="fas fa-search"></i>
                        <h2>Browse NGOs & Charities</h2>
                    </div>
                    <div class="section-content">
                        <div class="search-filter">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search NGOs by name or cause..." id="searchInput">
                            </div>
                            <div class="filter-box">
                                <select class="form-control form-select" id="causeFilter">
                                    <option value="">All Causes</option>
                                    <option value="education">Education</option>
                                    <option value="health">Healthcare</option>
                                    <option value="environment">Environment</option>
                                    <option value="poverty">Poverty Relief</option>
                                    <option value="disaster">Disaster Relief</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" onclick="filterNGOs()">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                        </div>

                        <div class="card-list" id="ngoList">
                            <!-- Sample NGOs -->
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="card-title">Hope Foundation</h3>
                                        <p class="card-subtitle"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</p>
                                    </div>
                                    <span class="status-badge status-approved">Verified</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Cause:</strong> Education for Underprivileged Children</p>
                                    <p>Providing quality education and school supplies to children in rural areas. Currently seeking donations for books, uniforms, and educational materials.</p>
                                    <p><strong>Current Need:</strong> ₹50,000 for school supplies</p>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-primary" onclick="openDonationModal('Hope Foundation')">
                                        <i class="fas fa-heart"></i> Donate Now
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="fas fa-info-circle"></i> View Details
                                    </button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="card-title">Green Earth Initiative</h3>
                                        <p class="card-subtitle"><i class="fas fa-map-marker-alt"></i> Delhi, India</p>
                                    </div>
                                    <span class="status-badge status-approved">Verified</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Cause:</strong> Environmental Conservation</p>
                                    <p>Working towards reforestation and clean water initiatives. Looking for both financial donations and volunteer support.</p>
                                    <p><strong>Current Need:</strong> ₹1,00,000 for tree plantation drive</p>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-primary" onclick="openDonationModal('Green Earth Initiative')">
                                        <i class="fas fa-heart"></i> Donate Now
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="fas fa-info-circle"></i> View Details
                                    </button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="card-title">Healthcare Heroes</h3>
                                        <p class="card-subtitle"><i class="fas fa-map-marker-alt"></i> Bangalore, Karnataka</p>
                                    </div>
                                    <span class="status-badge status-approved">Verified</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Cause:</strong> Rural Healthcare</p>
                                    <p>Providing free medical camps and healthcare services in remote villages. Seeking medical equipment and funding support.</p>
                                    <p><strong>Current Need:</strong> Medical equipment worth ₹2,00,000</p>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-primary" onclick="openDonationModal('Healthcare Heroes')">
                                        <i class="fas fa-heart"></i> Donate Now
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="fas fa-info-circle"></i> View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Donor Dashboard View -->
    <div id="donor-dashboard-view" class="hidden">
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

    <!-- NGO Dashboard View -->
    <div id="ngo-dashboard-view" class="hidden">
        <main class="main-content">
            <div class="container">
                <div class="section">
                    <div class="section-header">
                        <i class="fas fa-building"></i>
                        <h2>NGO Dashboard</h2>
                    </div>
                    <div class="section-content">
                        <div class="dashboard-grid">
                            <div class="card">
                                <h3><i class="fas fa-money-bill-wave"></i> Total Received</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--success);">₹1,25,000</p>
                                <p>From 45 donors</p>
                            </div>
                            <div class="card">
                                <h3><i class="fas fa-bullseye"></i> Active Campaigns</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--primary-color);">3</p>
                                <p>Currently seeking donations</p>
                            </div>
                            <div class="card">
                                <h3><i class="fas fa-users"></i> Total Donors</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--accent-color);">45</p>
                                <p>Unique contributors</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; margin: 2rem 0;">
                            <button class="btn btn-primary" onclick="openModal('newCampaignModal')">
                                <i class="fas fa-plus"></i> New Campaign
                            </button>
                            <button class="btn btn-success">
                                <i class="fas fa-chart-bar"></i> View Reports
                            </button>
                        </div>

                        <!-- Active Campaigns -->
                        <h3 style="margin: 2rem 0 1rem 0;"><i class="fas fa-bullseye"></i> Active Campaigns</h3>
                        <div class="card-list">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">School Supplies Drive 2025</h4>
                                        <p class="card-subtitle">Goal: ₹50,000 | Raised: ₹32,000 (64%)</p>
                                    </div>
                                    <span class="status-badge status-approved">Active</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Type:</strong> Financial + Goods</p>
                                    <p><strong>Description:</strong> Providing books, uniforms, and stationery to 100 underprivileged children</p>
                                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; margin: 1rem 0;">
                                        <div style="background: var(--success); height: 100%; width: 64%; border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-primary">Edit Campaign</button>
                                    <button class="btn btn-secondary">View Donors</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Winter Clothing Distribution</h4>
                                        <p class="card-subtitle">Goal: ₹75,000 | Raised: ₹18,000 (24%)</p>
                                    </div>
                                    <span class="status-badge status-approved">Active</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Type:</strong> Goods Donation</p>
                                    <p><strong>Description:</strong> Collecting warm clothes and blankets for homeless individuals</p>
                                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; margin: 1rem 0;">
                                        <div style="background: var(--warning); height: 100%; width: 24%; border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-primary">Edit Campaign</button>
                                    <button class="btn btn-secondary">View Donors</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Admin Dashboard View -->
    <div id="admin-dashboard-view" class="hidden">
        <main class="main-content">
            <div class="container">
                <div class="section">
                    <div class="section-header">
                        <i class="fas fa-cog"></i>
                        <h2>Admin Dashboard</h2>
                    </div>
                    <div class="section-content">
                        <div class="dashboard-grid">
                            <div class="card">
                                <h3><i class="fas fa-building"></i> Total NGOs</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--primary-color);">156</p>
                                <p>12 pending approval</p>
                            </div>
                            <div class="card">
                                <h3><i class="fas fa-users"></i> Total Donors</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--success);">2,847</p>
                                <p>+23 this week</p>
                            </div>
                            <div class="card">
                                <h3><i class="fas fa-chart-line"></i> Total Donations</h3>
                                <p style="font-size: 2rem; font-weight: bold; color: var(--accent-color);">₹45,67,890</p>
                                <p>This month: ₹3,45,600</p>
                            </div>
                        </div>

                        <!-- Pending Approvals -->
                        <h3 style="margin: 2rem 0 1rem 0;"><i class="fas fa-clock"></i> Pending NGO Approvals</h3>
                        <div class="card-list">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Smile Foundation</h4>
                                        <p class="card-subtitle">Applied: August 20, 2025</p>
                                    </div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Cause:</strong> Child Education & Welfare</p>
                                    <p><strong>Location:</strong> Chennai, Tamil Nadu</p>
                                    <p><strong>Registration No:</strong> REG/2025/0892</p>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-success">Approve</button>
                                    <button class="btn btn-secondary">Review</button>
                                    <button class="btn" style="background: var(--error); color: white;">Reject</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Clean Water Initiative</h4>
                                        <p class="card-subtitle">Applied: August 18, 2025</p>
                                    </div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                                <div class="card-content">
                                    <p><strong>Cause:</strong> Water & Sanitation</p>
                                    <p><strong>Location:</strong> Rajasthan, India</p>
                                    <p><strong>Registration No:</strong> REG/2025/0891</p>
                                </div>
                                <div class="card-actions">
                                    <button class="btn btn-success">Approve</button>
                                    <button class="btn btn-secondary">Review</button>
                                    <button class="btn" style="background: var(--error); color: white;">Reject</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Login Modal -->
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
                    Don't have an account? <a href="#" onclick="closeModal('loginModal'); openModal('registerModal');">Register here</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
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
                    Already have an account? <a href="#" onclick="closeModal('registerModal'); openModal('loginModal');">Login here</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Donation Modal -->
    <div id="donationModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Make a Donation</h2>
                <span class="close" onclick="closeModal('donationModal')">&times;</span>
            </div>
            <form id="donationForm">
                <div class="form-group">
                    <label for="donationType">Donation Type</label>
                    <select id="donationType" class="form-control form-select" onchange="toggleDonationFields()">
                        <option value="money">Financial Donation</option>
                        <option value="goods">Goods Donation</option>
                        <option value="services">Service Donation</option>
                    </select>
                </div>

                <div id="moneyFields">
                    <div class="form-group">
                        <label for="donationAmount">Amount (₹)</label>
                        <input type="number" id="donationAmount" class="form-control" min="1">
                    </div>
                    <div class="form-group">
                        <label for="paymentMethod">Payment Method</label>
                        <select id="paymentMethod" class="form-control form-select">
                            <option value="razorpay">Razorpay</option>
                            <option value="paypal">PayPal</option>
                            <option value="bank">Bank Transfer</option>
                        </select>
                    </div>
                </div>

                <div id="goodsFields" class="hidden">
                    <div class="form-group">
                        <label for="goodsDescription">Description of Goods</label>
                        <textarea id="goodsDescription" class="form-control" rows="3" placeholder="Describe the items you want to donate..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="goodsQuantity">Estimated Quantity/Value</label>
                        <input type="text" id="goodsQuantity" class="form-control" placeholder="e.g., 50 books, ₹5000 worth clothes">
                    </div>
                </div>

                <div id="serviceFields" class="hidden">
                    <div class="form-group">
                        <label for="serviceDescription">Service Description</label>
                        <textarea id="serviceDescription" class="form-control" rows="3" placeholder="Describe the service you want to offer..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="serviceAvailability">Availability</label>
                        <input type="text" id="serviceAvailability" class="form-control" placeholder="e.g., Weekends, 2 hours daily">
                    </div>
                </div>

                <div class="form-group">
                    <label for="donationMessage">Message (Optional)</label>
                    <textarea id="donationMessage" class="form-control" rows="2" placeholder="Any special message for the NGO..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    <i class="fas fa-heart"></i> Confirm Donation
                </button>
            </form>
        </div>
    </div>

    <!-- New Campaign Modal -->
    <div id="newCampaignModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Create New Campaign</h2>
                <span class="close" onclick="closeModal('newCampaignModal')">&times;</span>
            </div>
            <form id="newCampaignForm">
                <div class="form-group">
                    <label for="campaignTitle">Campaign Title</label>
                    <input type="text" id="campaignTitle" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="campaignDescription">Description</label>
                    <textarea id="campaignDescription" class="form-control" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="campaignGoal">Target Amount (₹)</label>
                    <input type="number" id="campaignGoal" class="form-control" min="1" required>
                </div>
                <div class="form-group">
                    <label for="campaignType">Campaign Type</label>
                    <select id="campaignType" class="form-control form-select" required>
                        <option value="financial">Financial Donations</option>
                        <option value="goods">Goods Collection</option>
                        <option value="both">Both Financial & Goods</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="campaignDeadline">Deadline</label>
                    <input type="date" id="campaignDeadline" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    <i class="fas fa-plus"></i> Create Campaign
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 DonationTracker. Connecting hearts, transforming lives. Built with ❤️ for a better world.</p>
        </div>
    </footer>

    <script>
        // Global variables
        let currentView = 'home';
        let currentUser = null;

        // View Management
        function showView(viewName) {
            // Hide all views
            const views = ['home', 'browse-ngos', 'donor-dashboard', 'ngo-dashboard', 'admin-dashboard'];
            views.forEach(view => {
                const element = document.getElementById(view + '-view');
                if (element) {
                    element.classList.add('hidden');
                }
            });

            // Show selected view
            const targetView = document.getElementById(viewName + '-view');
            if (targetView) {
                targetView.classList.remove('hidden');
                currentView = viewName;
            }

            // Update navigation if needed
            updateNavigation();
        }

        function updateNavigation() {
            const authButtons = document.querySelector('.auth-buttons');
            if (currentUser) {
                authButtons.innerHTML = `
                    <span style="color: white; margin-right: 1rem;">Welcome, ${currentUser.name}</span>
                    <button class="btn btn-secondary" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                `;
            }
        }

        // Modal Management
        function openModal(modalId, userType = null) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';
                
                // Set user type if provided
                if (userType && modalId === 'registerModal') {
                    document.getElementById('regUserType').value = userType;
                    toggleRegistrationFields();
                }
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'none';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }

        // Registration Form Management
        function toggleRegistrationFields() {
            const userType = document.getElementById('regUserType').value;
            const donorFields = document.getElementById('donorFields');
            const ngoFields = document.getElementById('ngoFields');

            if (userType === 'donor') {
                donorFields.classList.remove('hidden');
                ngoFields.classList.add('hidden');
            } else {
                donorFields.classList.add('hidden');
                ngoFields.classList.remove('hidden');
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
            document.querySelector('#donationModal .modal-title').textContent = `Donate to ${ngoName}`;
            openModal('donationModal');
        }

        // Form Submissions
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const userType = document.getElementById('userType').value;

            // Simulate login process
            showAlert('success', 'Login successful! Redirecting to dashboard...');
            
            // Set current user
            currentUser = {
                name: email.split('@')[0],
                type: userType,
                email: email
            };

            setTimeout(() => {
                closeModal('loginModal');
                
                // Redirect to appropriate dashboard
                if (userType === 'donor') {
                    showView('donor-dashboard');
                } else if (userType === 'ngo') {
                    showView('ngo-dashboard');
                } else if (userType === 'admin') {
                    showView('admin-dashboard');
                }
            }, 1500);
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const userType = document.getElementById('regUserType').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('regConfirmPassword').value;

            if (password !== confirmPassword) {
                showAlert('error', 'Passwords do not match!');
                return;
            }

            // Simulate registration process
            if (userType === 'ngo') {
                showAlert('success', 'NGO registration submitted! Your account will be reviewed by admin within 24-48 hours.');
            } else {
                showAlert('success', 'Account created successfully! You can now login.');
            }

            setTimeout(() => {
                closeModal('registerModal');
                if (userType === 'donor') {
                    openModal('loginModal');
                }
            }, 2000);
        });

        document.getElementById('donationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const donationType = document.getElementById('donationType').value;
            
            // Simulate donation process
            showAlert('success', `${donationType.charAt(0).toUpperCase() + donationType.slice(1)} donation submitted successfully! The NGO will be notified.`);
            
            setTimeout(() => {
                closeModal('donationModal');
            }, 2000);
        });

        document.getElementById('newCampaignForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            showAlert('success', 'Campaign created successfully and is now live!');
            
            setTimeout(() => {
                closeModal('newCampaignModal');
                // Refresh the campaigns list here
            }, 1500);
        });

        // Search and Filter Functions
        function filterNGOs() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const causeFilter = document.getElementById('causeFilter').value.toLowerCase();
            const ngoCards = document.querySelectorAll('#ngoList .card');

            ngoCards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                const content = card.querySelector('.card-content').textContent.toLowerCase();
                
                const matchesSearch = !searchTerm || title.includes(searchTerm) || content.includes(searchTerm);
                const matchesCause = !causeFilter || content.includes(causeFilter);

                if (matchesSearch && matchesCause) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Utility Functions
        function showAlert(type, message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type}`;
            alertDiv.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
                ${message}
            `;

            // Insert at the top of the current view
            const currentViewElement = document.querySelector('[id$="-view"]:not(.hidden)');
            if (currentViewElement) {
                currentViewElement.insertBefore(alertDiv, currentViewElement.firstChild);
            }

            // Remove alert after 5 seconds
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.parentNode.removeChild(alertDiv);
                }
            }, 5000);
        }

        function logout() {
            currentUser = null;
            showView('home');
            
            // Reset auth buttons
            const authButtons = document.querySelector('.auth-buttons');
            authButtons.innerHTML = `
                <a href="#" class="btn btn-secondary" onclick="openModal('loginModal')">Login</a>
                <a href="#" class="btn btn-primary" onclick="openModal('registerModal')">Register</a>
            `;
            
            showAlert('success', 'Logged out successfully!');
        }

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            showView('home');
            
            // Initialize search functionality
            document.getElementById('searchInput').addEventListener('input', filterNGOs);
            document.getElementById('causeFilter').addEventListener('change', filterNGOs);
            
            console.log('Donation Tracker Application Loaded Successfully!');
        });

        // Geolocation API Integration (Optional)
        function findNearbyNGOs() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    
                    showAlert('info', `Found your location! Showing NGOs near you...`);
                    
                    // Here you would typically make an API call to get nearby NGOs
                    // For demo purposes, we'll just show a success message
                    
                }, function(error) {
                    showAlert('error', 'Unable to get your location. Please search manually.');
                });
            } else {
                showAlert('error', 'Geolocation is not supported by this browser.');
            }
        }

        // Payment Integration Simulation
        function processPayment(amount, method) {
            // This would typically integrate with Razorpay or PayPal
            showAlert('info', `Processing payment of ₹${amount} via ${method}...`);
            
            // Simulate payment processing
            setTimeout(() => {
                const success = Math.random() > 0.1; // 90% success rate for demo
                
                if (success) {
                    showAlert('success', `Payment of ₹${amount} completed successfully!`);
                } else {
                    showAlert('error', 'Payment failed. Please try again.');
                }
            }, 2000);
        }
    </script>
</body>
</html>