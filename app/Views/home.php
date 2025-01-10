<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center py-5">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold text-primary">Track Your Money with Pocketify</h1>
            <p class="lead">Take control of your finances with our simple and effective expense tracking tool.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="/register" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</a>
                <a href="/login" class="btn btn-outline-secondary btn-lg px-4">Login</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="https://source.unsplash.com/random/600x400/?money" class="img-fluid rounded shadow" alt="Finance">
        </div>
    </div>

    <!-- Features Section -->
    <div class="row py-5">
        <h2 class="text-center mb-4">Why Choose Pocketify?</h2>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up display-4 text-primary mb-3"></i>
                    <h3 class="h5">Track Expenses</h3>
                    <p>Monitor your spending habits with easy-to-use tracking tools.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                    <h3 class="h5">Secure & Private</h3>
                    <p>Your financial data is protected with industry-standard security.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-phone display-4 text-primary mb-3"></i>
                    <h3 class="h5">Mobile Friendly</h3>
                    <p>Access your expenses anytime, anywhere on any device.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="row py-5 bg-light rounded-3 mb-5">
        <div class="col-12 text-center">
            <h2>Ready to Start?</h2>
            <p class="lead">Join thousands of users who trust Pocketify for their expense tracking needs.</p>
            <a href="/register" class="btn btn-primary btn-lg">Create Free Account</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
