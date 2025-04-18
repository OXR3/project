document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("drawingBoard");
    const ctx = canvas.getContext("2d");
    const colorPicker = document.getElementById("colorPicker");
    const brushSize = document.getElementById("brushSize");
    const eraseBtn = document.getElementById("erase");
    const drawBtn = document.getElementById("draw"); // زر الرجوع إلى الرسم
    const clearBtn = document.getElementById("clear");
    const saveBtn = document.getElementById("save");

    let painting = false;
    let currentColor = "#000000";
    let currentSize = 5;
    let isErasing = false;

    function resizeCanvas() {
        canvas.width = window.innerWidth * 0.8;
        canvas.height = window.innerHeight * 0.6;
    }

    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    colorPicker.addEventListener("input", function () {
        currentColor = this.value;
        isErasing = false;
    });

    brushSize.addEventListener("input", function () {
        currentSize = this.value;
    });

    eraseBtn.addEventListener("click", function () {
        isErasing = true;
    });

    drawBtn.addEventListener("click", function () {
        isErasing = false;
    });

    canvas.addEventListener("mousedown", (e) => {
        painting = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    canvas.addEventListener("mousemove", (e) => {
        if (!painting) return;

        ctx.lineWidth = currentSize;
        ctx.lineCap = "round";
        ctx.strokeStyle = isErasing ? "#FFFFFF" : currentColor;

        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
    });

    canvas.addEventListener("mouseup", () => {
        painting = false;
        ctx.closePath();
    });

    canvas.addEventListener("mouseleave", () => {
        painting = false;
    });

    clearBtn.addEventListener("click", function () {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    });

    saveBtn.addEventListener("click", function () {
        const image = canvas.toDataURL("image/png");
        const link = document.createElement("a");
        link.href = image;
        link.download = "drawing.png";
        link.click();
    });
});
