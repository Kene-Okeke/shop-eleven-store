<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ShopEleven — Admin Dashboard</title>

    <link rel="stylesheet" href="/css/admin/dashboard.css">
</head>

<body>

    <div class="admin-dashboard">

        <!-- SIDEBAR -->
        <aside class="admin-sidebar">

            <div class="sidebar-brand">
                <span>SHOP</span>
                <strong>ELEVEN</strong>
            </div>

            <nav class="sidebar-nav">

                <a href="#" class="nav-item active">
                    <span class="nav-icon">⌂</span>
                    Dashboard
                </a>

               

            </nav>

            <div class="sidebar-bottom">

                

                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="logout-button">
                        <span class="nav-icon">↪</span>
                        Logout
                    </button>
                </form>

            </div>

        </aside>


        <!-- MAIN CONTENT -->
        <main class="admin-main">

            <!-- TOP BAR -->
            <header class="admin-header">

                <div class="mobile-menu-wrapper">

                    <button class="mobile-menu-button" type="button" id="mobileMenuButton">
                         ☰
                     </button>

                    <div class="mobile-dropdown" id="mobileDropdown">

                    <form method="POST" action="/logout">
                         @csrf

                        <button type="submit" class="mobile-logout-button">
                            <span>↪</span>
                                Logout
                        </button>
                    </form>

                </div>

</div>

                <div class="header-title">
                    <p>ADMINISTRATION</p>
                    <h1>Dashboard</h1>
                </div>

                <div class="admin-user">
                    <div class="user-avatar">
                        J
                    </div>

                    <div class="user-details">
                        <strong>Jenny</strong>
                        <span>Administrator</span>
                    </div>
                </div>

            </header>


            <!-- CONTENT -->
            <section class="dashboard-content">

                <div class="welcome-section">

                    <div>
                        <p class="eyebrow">WELCOME BACK</p>

                        <h2>
                            Good morning, Jenny
                            <span>✦</span>
                        </h2>

                        <p class="welcome-text">
                            Manage your ShopEleven store from here.
                        </p>
                    </div>

                </div>


                <!-- STAT CARDS -->
                <div class="stats-grid">

                    <div class="stat-card">

                        <div class="stat-card-top">
                            <span>PRODUCTS</span>
                            <div class="stat-icon">▣</div>
                        </div>

                        <strong>{{ $products->count() }}</strong>

                        <p>Products in your store</p>

                    </div>


                    <div class="stat-card">

                        <div class="stat-card-top">
                            <span>CATEGORIES</span>
                            <div class="stat-icon">◫</div>
                        </div>

                        <strong>{{ $categories->count() }}</strong>

                        <p>Product categories</p>

                    </div>

                </div>


                <!-- QUICK ACTIONS -->
                <section class="quick-actions">

                    <div class="section-heading">

                        <div>
                            <p class="eyebrow">MANAGE STORE</p>
                            <h3>Quick Actions</h3>
                        </div>

                    </div>


                    <div class="actions-grid">

                        <a href="/admin/products/create" class="action-card primary-action">

                            <div class="action-icon">
                                +
                            </div>

                            <div class="action-content">
                                <span>PRODUCTS</span>
                                <h4>Create Product</h4>
                                <p>Add a new product to your store.</p>
                            </div>

                            <span class="action-arrow">→</span>

                        </a>


                        <a href="/admin/products" class="action-card">

                            <div class="action-icon">
                                ▣
                            </div>

                            <div class="action-content">
                                <span>PRODUCTS</span>
                                <h4>View Products</h4>
                                <p>View and manage your products.</p>
                            </div>

                            <span class="action-arrow">→</span>

                        </a>


                       


                       
                    </div>

                </section>

            </section>

        </main>

    </div>
 @vite('resources/js/admin/dashboard.js')
</body>
</html>