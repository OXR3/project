<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Drawing Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Landing Section -->
    <section class="landing">
        <div class="overlay"></div>
        <div class="text">
            <div class="content">
                <h2 class="animate-text"><i class="fas fa-paint-brush"></i> Welcome to the Art World!</h2>
                <p class="animate-text">
                    <i class="fas fa-lightbulb"></i> Join our exciting journey into the world of art! 
                    <br>
                    <i class="fas fa-pencil-alt"></i> Learn different drawing techniques and unleash your creativity.
                </p>
                <a href="register.php" class="btn-animate"><i class="fas fa-user-plus"></i> Get Started</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="parallax-section">
        <div class="container text-center">
            <h2 class="title-one"><i class="fas fa-concierge-bell"></i> Our Services</h2>
            <div class="row">
            <div class="col-md-4">
            <div class="single-service clickable-service" data-page="level_evaluation.php">
                <i class="fas fa-chart-line fa-3x"></i>
                <h2>Level Evaluation</h2>
                <p>Assess your drawing skills and track your progress.</p>
            </div>
                </div>


                <div class="col-md-4">
                    <div class="single-service clickable-service" data-page="electronic_board.php">
                        <i class="fas fa-palette fa-3x"></i>
                        <h2>Electronic Board</h2>
                        <p>Draw digitally and enhance your artistic skills.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="videos.php" class="single-service-link">
                        <div class="single-service">
                            <i class="fab fa-youtube fa-3x"></i>
                            <h2>Tutorial Videos</h2>
                            <p>Learn from professional artists with our video tutorials.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Links -->
    <section class="social-media text-center">
        <h2><i class="fas fa-share-alt"></i> Follow Us</h2>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
    </section>

    <?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="js/script.js"></script> <!-- ربط ملف الجافا سكريبت -->

</body>
</html>
