<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            <h1>Struk Pembelanjaan</h1>
            <p>Asma's Bakerys</p>
        </div>
        <div class="details">
            <p><strong>No Pembayaran:</strong> {{ $payment->id }}</p>
            <p><strong>Waktu Pembayaran :</strong> {{ $payment->payment_date }}</p>
            <p><strong>Keterangan Pembayaran:</strong> {{ $payment->payment_method }}</p>
            <p><strong>Total Keseluruhan:</strong> {{ $payment->amount }}</p>
        </div>
        <div class="footer">
            <p>Silahkan melakukan konfirmasi dengan menunjukan struk pembayaran ini kepada tim kami!</p>
        </div>
        <div class="footer">
            <p>Thank you for your payment!</p>
        </div>
        <div class="footer">
            <p>Happy Orders! Asma's Bakerys</p>
        </div>
    </div>
</body>
</html>
