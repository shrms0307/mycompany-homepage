<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keypoint Labeling Tool with Undo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        canvas {
            border: 1px solid #000;
        }
        #labelInput {
            margin-top: 10px;
        }
        #keypoints {
            margin-top: 20px;
            width: 300px;
            word-wrap: break-word;
        }
        #undoButton {
            margin-top: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 14px;
        }
        #undoButton:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <h1>Keypoint Labeling Tool with Undo</h1>
    <input type="file" id="imageLoader" accept="image/*">
    <canvas id="imageCanvas"></canvas>
    <input type="text" id="labelInput" placeholder="Enter label">
    <button id="undoButton" disabled>Undo Last Keypoint</button>
    <div id="keypoints"></div>
    <img src="https://i.ytimg.com/vi/Pqzeqt7j2uQ/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLA93kiYYbbCf0zBUtJ1GMoQeihshA"></img>
    
 
    <script>
        const imageLoader = document.getElementById('imageLoader');
        const canvas = document.getElementById('imageCanvas');
        const ctx = canvas.getContext('2d');
        const labelInput = document.getElementById('labelInput');
        const undoButton = document.getElementById('undoButton');
        const keypoints = document.getElementById('keypoints');

        let image = new Image();
        let points = [];

        imageLoader.addEventListener('change', handleImage, false);

        function handleImage(e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                image.onload = function() {
                    canvas.width = image.width;
                    canvas.height = image.height;
                    ctx.drawImage(image, 0, 0);
                }
                image.src = event.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        }

        canvas.addEventListener('click', function(e) {
            const x = e.offsetX;
            const y = e.offsetY;
            const label = labelInput.value || 'Unlabeled';
            points.push({x, y, label});
            drawKeypoints();
            keypoints.innerHTML += `Label: ${label}, Coordinates: (${x}, ${y})<br>`;
            labelInput.value = '';
            undoButton.disabled = false;  // 활성화
        });

        undoButton.addEventListener('click', function() {
            if (points.length > 0) {
                points.pop();  // 마지막 포인트 제거
                drawKeypoints();
                updateKeypointList();
            }
            if (points.length === 0) {
                undoButton.disabled = true;  // 모든 포인트가 제거되면 비활성화
            }
        });

        function drawKeypoints() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(image, 0, 0);
            points.forEach(point => {
                ctx.fillStyle = 'red';
                ctx.beginPath();
                ctx.arc(point.x, point.y, 5, 0, 2 * Math.PI);
                ctx.fill();
                ctx.fillStyle = 'black';
                ctx.font = '14px Arial';
                ctx.fillText(point.label, point.x + 8, point.y + 3);
            });
        }

        function updateKeypointList() {
            keypoints.innerHTML = '';  // 기존 내용 지우기
            points.forEach(point => {
                keypoints.innerHTML += `Label: ${point.label}, Coordinates: (${point.x}, ${point.y})<br>`;
            });
        }
    </script>
</body>
</html>
