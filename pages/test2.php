<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .typewriter td {
            font-family: monospace;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 3.5s steps(40, end);
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

    </style>
</head>
<body>
    <table class="typewriter">
        <tr>
            <td id="context1"></td>
            <td id="address"></td>
        </tr>
        <tr>
            <td id="context2"></td>
            <td id="contact"></td>
        </tr>
        <tr>
            <td id="context3"></td>
            <td id="email"></td>
        </tr>
    </table>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const texts = [
                { id: "context1", text: "주소" },
                { id: "address", text: "서울시 서초구 서초대로40길 97 동초빌딩" },
                { id: "context2", text: "연락처" },
                { id: "contact", text: "(대표번호)02-515-7002" },
                { id: "context3", text: "이메일" },
                { id: "email", text: "account1@the-viral.co.kr" }
            ];

            let currentIndex = 0;

            function typeText() {
                if (currentIndex < texts.length) {
                    const item = texts[currentIndex];
                    const element = document.getElementById(item.id);
                    let currentText = "";
                    let letterIndex = 0;

                    function typeLetter() {
                        if (letterIndex < item.text.length) {
                            currentText += item.text[letterIndex];
                            element.textContent = currentText;
                            letterIndex++;
                            setTimeout(typeLetter, 100); // Adjust typing speed here
                        } else {
                            currentIndex++;
                            setTimeout(typeText, 500); // Delay before typing next text
                        }
                    }

                    typeLetter();
                }
            }

            typeText();
        });
    </script>
</body>
</html>
