<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Montserrat:wght@300;400;600&display=swap');

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 20px;
            color: #fff;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: auto;
            color: #333;
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            color: #2C3E50;
            font-size: 36px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #34495E;
            text-align: left;
            display: block;
            font-weight: 600;
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            font-size: 16px;
            border: 1px solid #BDC3C7;
            border-radius: 6px;
            background-color: #F5F5F5;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        input[type="text"]:focus, select:focus {
            border-color: #4CAF50;
            background-color: #FFFFFF;
            outline: none;
        }

        button {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .qr-code {
            text-align: center;
            margin-top: 30px;
            animation: fadeIn 0.8s ease-in-out;
        }

        #anotherButton {
            display: none;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #3498DB;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        #anotherButton:hover {
            background-color: #2980B9;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <script>
        function resetForm(event) {
            event.preventDefault(); 
            document.getElementById('qrForm').reset();
            document.getElementById('qrCodeContainer').innerHTML = '';
            document.getElementById('anotherButton').style.display = 'none';
        }

        function showAnotherButton() {
            document.getElementById('anotherButton').style.display = 'inline-block';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>QR Code Generator</h1>

        <form id="qrForm" action="{{ url('/generate-qrcode') }}" method="GET">
            <div class="form-group">
                <label for="text">Masukkan Teks atau URL:</label>
                <input type="text" id="text" name="text" placeholder="Contoh: https://example.com" required>
            </div>

            <div class="form-group">
                <label for="size">Ukuran QR Code:</label>
                <select id="size" name="size" required>
                    <option value="100">100x100</option>
                    <option value="200">200x200</option>
                    <option value="300">300x300</option>
                </select>
            </div>

            <button type="submit">Generate QR Code</button>
        </form>

        @if (request('text') && isset($qrCode))
            <div class="qr-code" id="qrCodeContainer">
                <h2>QR Code Anda:</h2>
                {!! $qrCode !!}
            </div>
            <button type="button" id="anotherButton" onclick="resetForm(event)">Generate QR Code Lainnya!</button>
            <script>
                showAnotherButton();
            </script>
        @endif
    </div>
</body>
</html>