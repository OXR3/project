<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["drawing"])) {
    $upload_dir = "uploads/";

   
    
    // التأكد من أن المجلد موجود
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $upload_dir = "uploads/";
    $image_path = $upload_dir . basename($_FILES["drawing"]["name"]);

    //  التأكد من أن الملف هو صورة
    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
    if (!in_array($_FILES["drawing"]["type"], $allowed_types)) {
        echo json_encode(["status" => "error", "message" => "❌ الملف يجب أن يكون صورة (JPG أو PNG)."]);
        exit;
    }

    //  رفع الملف
    if (move_uploaded_file($_FILES["drawing"]["tmp_name"], $image_path)) {
        //  التأكد من أن الصورة تم تحميلها
        if (!file_exists($image_path)) {
            echo json_encode(["status" => "error", "message" => "❌ فشل في حفظ الصورة."]);
            exit;
        }

        // طباعة المسار في سجل الأخطاء
        error_log("Image path: " . realpath($image_path));

        //  تشغيل سكريبت بايثون لتحليل الصورة
        $command = escapeshellcmd("/var/www/html/drawing_website/venv/bin/python3 model/evaluate_drawing.py " . escapeshellarg($image_path));

        error_log(" Running command: " . $command);
        $output = shell_exec($command);
        
        if ($output) {
            echo json_encode(["status" => "success", "message" => $output]);
        } else {
            echo json_encode(["status" => "error", "message" => "❌ خطأ أثناء تحليل الصورة."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "❌ فشل في رفع الصورة."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "❌ لم يتم تحميل أي صورة."]);
}
?>
