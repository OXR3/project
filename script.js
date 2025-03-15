document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Loaded Successfully!");
    

    // التنقل السلس داخل الصفحة عند النقر على روابط النافبار
    document.querySelectorAll("a.nav-link").forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            if (this.getAttribute("href").startsWith("#")) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: "smooth" });
                }
            }
        });
    });

    //  زر التسجيل - إظهار تنبيه
    const registerBtn = document.querySelector(".register-form button");
    if (registerBtn) {
        registerBtn.addEventListener("click", function () {
            alert("Registration successful!");
        });
    }

    // التنقل بين الصفحات عند النقر على الخدمات 
    document.querySelectorAll(".clickable-service").forEach(item => {
        item.addEventListener("click", function () {
            const page = this.getAttribute("data-page");
            if (page) {
                window.location.href = page;
            }
        });
    });
});

