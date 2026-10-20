<?php include 'includes/header.php'; ?>

<div class="page-banner trainers-banner">
    <div class="container">
        <span class="eyebrow">Meet the team</span>
        <h1>Coaches who inspire progress.</h1>
    </div>
</div>

<div class="container py-5">
    <div class="fitness-gallery mb-5">
        <div class="row g-3">
            <?php
            $gallery = [
                'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=80',
                'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=900&q=80',
                'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?auto=format&fit=crop&w=900&q=80',
                'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=900&q=80',
                'https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=900&q=80',
                'https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=900&q=80',
            ];
            foreach ($gallery as $image):
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="<?= $image ?>" alt="Fitness training session" class="img-fluid">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="trainerCarousel" class="carousel slide trainer-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php
            $trainers = [
                ['Alex Rivera', 'Strength & Conditioning', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80'],
                ['Mia Chen', 'Yoga & Mobility', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=900&q=80'],
                ['Javier Lopez', 'HIIT & Cardio', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=900&q=80'],
            ];
            foreach ($trainers as $i => $t):
            ?>
            <div class="carousel-item <?= $i===0 ? 'active' : '' ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center trainer-slide">
                        <img src="<?= $t[2] ?>"
                             class="rounded-circle mb-3 trainer-photo"
                             alt="<?= $t[0] ?>">
                        <h3><?= $t[0] ?></h3>
                        <p><?= $t[1] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <button class="carousel-control-prev" type="button"
                data-bs-target="#trainerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button"
                data-bs-target="#trainerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>