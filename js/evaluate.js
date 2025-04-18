$(document).ready(function () {
    // عرض الصورة بعد اختيارها
    $("#drawing").change(function (event) {
        const file = event.target.files[0]; // الحصول على الملف المختار
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                let preview = $("#image-preview");

                // إذا لم تكن الصورة موجودة، قم بإنشائها
                if (preview.length === 0) {
                    preview = $("<img>", {
                        id: "image-preview",
                        css: {
                            maxWidth: "100%",
                            marginTop: "15px",
                            borderRadius: "8px",
                            boxShadow: "0px 4px 15px rgba(255, 255, 255, 0.2)"
                        }
                    });

                    // إضافة العنصر بعد مربع الرفع
                    $(".upload-box").append(preview);
                }

                preview.attr("src", e.target.result); // تعيين الصورة
            };
            reader.readAsDataURL(file); // قراءة الملف كـ Data URL
        }
    });

    // إرسال النموذج إلى الخادم
    $("#uploadForm").submit(function (event) {
        event.preventDefault();

        var formData = new FormData(this);
        $("#result").html("<p style='color: blue;'>⏳ جاري تحليل الرسم...</p>");

        $.ajax({
            url: "evaluate.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                let result = JSON.parse(response);
                if (result.status === "success") {
                    $("#result").html("<h3>✅ النتيجة:</h3><p>" + result.message + "</p>");
                } else {
                    $("#result").html("<p style='color: red;'>❌ " + result.message + "</p>");
                }
            },
            error: function () {
                $("#result").html("<p style='color:red;'>❌ خطأ في الاتصال بالخادم.</p>");
            }
        });
    });
});
