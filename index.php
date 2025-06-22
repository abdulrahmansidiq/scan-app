<!DOCTYPE html>
<html>
<head>
    <title>Scan QR & Barcode</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
        }
        #reader {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="card shadow mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Scan QR / Barcode</h4>
            <div id="reader"></div>
            <div class="mt-4">
                <label>Hasil Scan:</label>
                <input type="text" id="result" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>

<!-- HTML5 QR Code Library -->
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

<script>
    function onScanSuccess(decodedText, decodedResult) {
        document.getElementById('result').value = decodedText;
        // Optional: Redirect/send data
        // window.location.href = "result.php?data=" + encodeURIComponent(decodedText);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 }, false);
    html5QrcodeScanner.render(onScanSuccess);
</script>
</body>
</html>
