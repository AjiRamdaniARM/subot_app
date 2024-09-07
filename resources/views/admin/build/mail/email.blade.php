<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <img src="https://sukarobot.com/assets/img/Untitled-2.png" alt="Sukarobot Academy"
                style="max-width: 100%; height: auto;">
        </center>
        <h1>Jadwal dari Sukarobot Academy melalui Subot Kontak</h1>
        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <p><strong>Tanggal Jadwal:</strong> {{ $details['tanggal_jd'] }} / {{ $details['jm_awal'] }} -
            {{ $details['jm_akhir'] }} </p>
        <p><strong>Message:</strong></p>
        <p>{{ $details['message'] }}</p>
        <div class="footer">
            <p>waktu absensi anda sekitar {{ $details['dj_akhir'] }} Jam </a></p>
        </div>
    </div>
</body>

</html>
