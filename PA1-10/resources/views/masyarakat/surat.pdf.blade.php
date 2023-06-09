<!DOCTYPE html>
<html>
<head>
    <style>
        /* Gaya tampilan surat */
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            margin-bottom: 30px;
        }

        .content p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Surat Pengantar KTP</h2>
    </div>

    <div class="content">
        <p>Nomor Surat: {{ $surat->nomor_surat }}</p>
        <p>Tanggal: {{ $surat->tanggal }}</p>
        <p>Nama Pemohon: {{ $surat->name }}</p>
        <!-- Informasi lain yang ingin Anda sertakan pada surat -->
    </div>

    <div class="footer">
        <p>Tertanda,</p>
        <p>{{ $surat->tanda_tangan }}</p>
    </div>
</body>
</html>
