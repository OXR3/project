<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Drawing Evaluation</title>
    <link rel="stylesheet" href="css/evlate.css">
    <!-- روابط CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- أيقونات FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/konva@8.3.6/konva.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="body">

<section class="evaluation-section">
    <div class="container_1">
        <h2 class="title-one text-center">🎨 AI Drawing Evaluation</h2>
        
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="upload-box">
                <label for="drawing" class="upload-label">
                    <i class="fas fa-upload"></i> Upload Your Drawing
                </label>
                
                <input type="file" id="drawing" name="drawing" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-orange">
                <i class="fas fa-check"></i> Evaluate
            </button>
        </form>
        
        <div id="result" class="evaluation-result"></div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- تحميل مكتبة jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/evaluate.js"></script> <!-- ملف جافا سكريبت -->

</body>
</html>

