<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <style>
        body {
            background-color: #d4d8e0;
            font-family: "Open Sans", sans-serif;
        }

        .kotakputih {
            background-color: #2d1b69;
            border-radius: 5px;
            padding: 90px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }

        .judulhalaman{
            font-family: "Oswald", sans-serif;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #e8e0ff;
            text-align: center;
            margin-bottom: 10px;
        }

        .subjudulhalaman{
            text-align: center;
            font-size: 14px;
            color: #a89be0;
            margin-bottom: 40px;
            margin-left: 30px;
            margin-right: 30px;
        }

        .card-pricing {
            border: 1px solid #593fae;
            border-radius: 10px;
            padding: 30px 20px;
            background-color: #261b4e;
            text-align: center;
            height: 100%;
        }

        .nama-package {
            font-family: "Oswald", sans-serif;
            font-size: 23px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #e8e0ff;
            margin-bottom: 6px;
        }

        .harga-package {
            font-size: 13px;
            color: #a78bfa;
            margin-bottom: 20px;
        }

        .btn {
            font-family: "Open Sans", sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 9px 28px;
            border: none;
            border-radius: 3px;
            margin-bottom: 24px;
        }

        .package-aktif {
            background-color: #9e9e9e;
            color: #ffffff;
        }

        .package-nonaktif {
            background-color: #f0e408;
            color: #261b4e;
        }

        .daftar-fitur {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .daftar-fitur li {
            font-size: 13px;
            color: #a89be0;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .daftar-fitur li strong {
            color: #c4b5fd;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotakputih">

            <!--judul-->
            <div class="row">
                <div class="col">
                    <p class="judulhalaman">Choose Your Learning Plan</p>
                    <p class="subjudulhalaman">Level up your skills with thousands of active learners across Indonesia!</p>
                </div>
            </div>

            <!--pricing-->
            <div class="row justify">

                <!--card 1-->
                <div class="col-4">
                    <div class="card-pricing">
                        <p class="nama-package">Starter</p>
                        <p class="harga-package">$5 / Month</p>

                        <!--tombol abu = current package-->
                        <button class="btn package-aktif">Your Plan</button>
                        <ul class="daftar-fitur">
                            <li><strong>5</strong> selected courses</li>
                            <li><strong>Access</strong> to video lessons</li>
                            <li><strong>Certificate</strong> of completion</li>
                            <li><strong>1x</strong> Q&A session</li>
                            <li><strong>Community</strong> learning forum</li>
                        </ul>
                    </div>
                </div>

                <!--card 2-->
                <div class="col-4">
                    <div class="card-pricing">
                        <p class="nama-package">Pro</p>
                        <p class="harga-package">$8 / Month</p>

                        <!--tombol kuning = option upgrade-->
                        <button class="btn package-nonaktif">Upgrade</button>
                        <ul class="daftar-fitur">
                            <li><strong>Unlimited</strong> selected courses</li>
                            <li><strong>Access</strong> to video + PDF modules</li>
                            <li><strong>Certificate</strong> with official branding</li>
                            <li><strong>5x</strong> Q&A session</li>
                            <li><strong>Monthly</strong> 1-on-1 mentoring</li>
                        </ul>
                    </div>
                </div>

                <!--card 3-->
                <div class="col-4">
                    <div class="card-pricing">
                        <p class="nama-package">Expert</p>
                        <p class="harga-package">$12 / Month</p>

                        <!--tombol kuning = option upgrade-->
                        <button class="btn package-nonaktif">Upgrade</button>
                        <ul class="daftar-fitur">
                            <li><strong>Unlimited</strong> all courses</li>
                            <li><strong>Access</strong> to video + PDF modules + live class</li>
                            <li><strong>International</strong> certificate</li>
                            <li><strong>Unlimited</strong> Q&A session</li>
                            <li><strong>Weekly</strong> intensive mentoring</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
