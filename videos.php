<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فيديوهات - موقع تعليم الرسم</title>
    
    <!-- ملفات CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- مكتبة الأيقونات Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<!-- فيديوهات -->
<section class="videos-section">
    <div class="container text-center">
        <h2 class="title-one">
            <i class="fas fa-video"></i> فيديوهات تعليمية
        </h2>

        <!-- اختيار الفئة -->
        <div class="filter-container">
            <select id="category" class="form-control">
                <option value="all"><i class="fas fa-film"></i> كل الفيديوهات</option>
                <option value="أساسيات الرسم"><i class="fas fa-pencil-alt"></i> أساسيات الرسم</option>
                <option value="رسم الوجوه"><i class="fas fa-user"></i> رسم الوجوه</option>
                <option value="رسم المناظر الطبيعية"><i class="fas fa-tree"></i> رسم المناظر الطبيعية</option>
            </select>
            <button id="filter-btn" class="btn btn-orange">
                <i class="fas fa-filter"></i> فلترة
            </button>
        </div>

        <!-- عرض الفيديوهات -->
        <div id="videos-container" class="videos-grid">
            <p><i class="fas fa-spinner fa-spin"></i> جاري تحميل الفيديوهات...</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- ملفات JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/videos.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</body>
</html>
