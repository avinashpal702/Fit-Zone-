<?php include 'includes/header.php'; ?>

<div class="page-banner programs-banner">
    <div class="container">
        <span class="eyebrow">Programs</span>
        <h1>Choose the training style that matches your goals.</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <?php
        $programs = [
            ['Strength Training', 'Build muscle and power with expertly guided lifting sessions.', 'https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=900&q=80'],
            ['Cardio', 'Boost endurance, stamina, and heart health with dynamic cardio workouts.', 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=900&q=80'],
            ['HIIT', 'High‑intensity interval training for maximum calorie burn and speed.', 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=900&q=80'],
            ['Yoga', 'Increase flexibility and mindfulness with steady, intentional movement.', 'https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=900&q=80'],
            ['Personal Training', 'One‑on‑one tailored sessions with focused accountability and progress tracking.', 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80'],
            ['Group Fitness', 'Fun, energetic classes that keep you moving and motivated together.', 'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?auto=format&fit=crop&w=900&q=80'],
        ];

        foreach ($programs as $i => $p):
        ?>
        <div class="col-md-4">
            <div class="feature-card h-100">
                <img src="<?= $p[2] ?>" class="feature-image" alt="<?= $p[0] ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $p[0] ?></h5>
                    <p class="card-text flex-grow-1"><?= $p[1] ?></p>
                    <button class="btn btn-primary mt-2"
                            data-bs-toggle="modal"
                            data-bs-target="#modal<?= $i ?>">View Details</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal<?= $i ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $p[0] ?></h5>
                        <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><?= $p[1] ?></p>
                        <img src="<?= $p[2] ?>" class="img-fluid rounded-3" alt="<?= $p[0] ?>">
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>