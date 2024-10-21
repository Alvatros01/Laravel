<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcelino Alvaro Jr. - Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            border-radius: 5px;
        }
        .sidebar {
            width: 300px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .sidebar img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            display: block;
            margin: 0 auto 20px;
        }
        .sidebar h1 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 10px;
        }
        .sidebar p {
            font-size: 14px;
            margin-bottom: 5px;
            text-align: center;
        }
        .content {
            padding: 20px;
            flex-grow: 1;
        }
        h2 {
            font-size: 20px;
            color: #2c3e50;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        p {
            margin: 5px 0;
            font-size: 16px;
        }
        ul {
            list-style-type: disc;
            margin: 0;
            padding-left: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="Marcelino Alvaro Jr..png" alt="Marcelino Alvaro Jr.">
            <h1>{{$info->name}}</h1>
            <p>{{$info->address}}</p>
            <p>Email: marceliknows01@gmail.com</p>
            <p>Phone: 09059277831</p>
        </div>
        <div class="content">
            <h2>Objective</h2>
            <p>Energetic and motivated student pursuing a degree in Information Technology, seeking an internship to gain practical experience and apply my academic knowledge in a real-world setting.</p>

            <h2>Personal Information</h2>
            <p><strong>Date of Birth:</strong> February 01, 2003</p>
            <p><strong>Birthplace:</strong> Bustos, Bulacan</p>
            <p><strong>Sex:</strong> Male</p>
            <p><strong>Civil Status:</strong> Single</p>
            <p><strong>Religion:</strong> Roman Catholic</p>
            <p><strong>Nationality:</strong> Filipino</p>
            <p><strong>Father's Name:</strong> Marcelino Alvaro</p>
            <p><strong>Mother's Name:</strong> Lilibeth Alvaro</p>

            <h2>Educational Background</h2>
            <p><strong>Tertiary:</strong> Dalubhasaang Politekniko ng Lungsod ng Baliwag</p>
            <p>Star Mall Bldg. San Jose St., Baliuag, Bulacan</p>
            <p>BSIT | 2021-Present</p>

            <p><strong>Secondary:</strong> Dalubhasaang Politekniko ng Lungsod ng Baliwag</p>
            <p>Star Mall Bldg. San Jose St., Baliuag, Bulacan</p>
            <p>TVL - Information and Communication Technology | 2019-2021</p>

            <p><strong>Primary:</strong> Vicris School</p>
            <p>Tibag, Baliwag, Bulacan</p>
            <p>2013-2015</p>

            <div class="footer">
                <p>I hereby certify that the above information is true and correct. I fully understand that any false statement may lead to cancellation of this application.</p>
                <p><strong>Marcelino R. Alvaro Jr.</strong></p>
            </div>
        </div>
    </div>
</body>
</html>
