<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drawing Board</title>
    <link rel="stylesheet" href="css/bord.css">
    <script src="https://cdn.jsdelivr.net/npm/konva@8.3.6/konva.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>
<body>

    <div class="board-container">
        <canvas id="drawingCanvas"></canvas>

        <div class="canvas-container">
    <canvas id="drawingBoard"></canvas>
</div>
<div class="controls">
    <input type="color" id="colorPicker" value="#000000">
    <input type="range" id="brushSize" min="1" max="20" value="5">
    
    <button id="erase"><i class="fas fa-eraser"></i> Eraser</button>
    <button id="draw"><i class="fas fa-paint-brush"></i> Draw</button>
    <button id="clear"><i class="fas fa-trash"></i> Clear</button>
    <button id="save"><i class="fas fa-download"></i> Save</button>
</div>

    </div>
    <?php include 'footer.php'; ?>
    <script src="js/board.js"></script>
<script defer src="js/script.js"></script> <!-- ربط ملف الجافا سكريبت -->
</body>
</html>
