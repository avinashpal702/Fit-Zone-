<?php include 'includes/header.php'; ?>

<div class="page-banner contact-banner">
    <div class="container">
        <span class="eyebrow">We’re here to help</span>
        <h1>Let’s take the next step together.</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 align-items-start">
        <aside class="col-lg-5">
            <div class="contact-panel">
                <span class="eyebrow eyebrow-dark">Get In Touch</span>
                <h2>Come say hello.</h2>
                <p class="contact-intro">Whether you’re ready to start training or simply have a question, the FitZone team is happy to help you find the right next step.</p>

                <div class="contact-detail">
                    <span class="contact-icon" aria-hidden="true">⌖</span>
                    <div>
                        <h3>Visit us</h3>
                        <p>FitZone Fitness Studio<br>Your City, Your Country</p>
                    </div>
                </div>
                <div class="contact-detail">
                    <span class="contact-icon" aria-hidden="true">☎</span>
                    <div>
                        <h3>Call us</h3>
                        <a href="tel:+15550100199">+1 (555) 010-0199</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <span class="contact-icon" aria-hidden="true">✉</span>
                    <div>
                        <h3>Email us</h3>
                        <a href="mailto:hello@fitzone.example">hello@fitzone.example</a>
                    </div>
                </div>

                <p class="contact-note">Sample contact details are shown above. Replace them with your studio’s real address, phone number, and email.</p>
            </div>
        </aside>

        <section class="col-lg-7">
            <div class="contact-form-panel">
                <h2>Send us a message</h2>
                <p>Tell us a little about your goals and we’ll be in touch.</p>

    <?php
    // ----- PHP form processing -----
    $errors = [];
    $success = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name    = trim($_POST['full_name'] ?? '');
        $email   = trim($_POST['email'] ?? '');
        $phone   = trim($_POST['phone'] ?? '');
        $program = trim($_POST['program'] ?? '');
        $msg     = trim($_POST['message'] ?? '');

        // Basic validation
        if ($name === '')   $errors[] = 'Full name is required.';
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = 'A valid email address is required.';
        if ($phone === '')  $errors[] = 'Phone number is required.';
        if ($program === '') $errors[] = 'Please select a preferred program.';
        if ($msg === '')    $errors[] = 'Message cannot be empty.';

        if (empty($errors)) {
            $success = 'Thank you! Your enquiry has been received.';
            // You could add mail() or DB storage here if you wish.
        }
    }
    ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
            </ul>
        </div>
    <?php elseif ($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <form id="contactForm" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" required>
            <div class="invalid-feedback">Please provide a valid email.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" required>
            <div class="invalid-feedback">Phone number is required.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Preferred Program</label>
            <select name="program" class="form-select" required>
                <option value="">Choose…</option>
                <option>Strength Training</option>
                <option>Cardio</option>
                <option>HIIT</option>
                <option>Yoga</option>
                <option>Personal Training</option>
                <option>Group Fitness</option>
            </select>
            <div class="invalid-feedback">Select a program.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
            <div class="invalid-feedback">Please enter a message.</div>
        </div>

        <button type="submit" class="btn btn-primary">Send Enquiry</button>
    </form>
            </div>
        </section>
    </div>
</div>

<?php include 'includes/footer.php'; ?>