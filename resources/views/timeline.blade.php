<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <style>
        .navbar-brand img{
            width: 100px;
            height: 30px;
        }

        .card img{
            height: 250px;
        }

        .button-style{
            background: linear-gradient(to right, #B367FF, #D014FF);
            padding: 10px 40px 10px 40px; 
            color: white; 
            font-size: 15px;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            margin-right: 20px;
        }

        .background{
            background-image: url({{ asset('Asset/WPP%203.png') }});
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        
        .text1{
            color: white;
            display: flex;
            justify-content: center;
            text-decoration: none;
            font-weight: bold;
        }

        li{
            list-style-type: none;
        }
        .navbar{
            background: linear-gradient(to right, #240459, #090013);
        }

        .text2{
            color: white;
            font-size: 65px;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 10px;
            background-image: linear-gradient(to right, #36D9A8, #4CC1D0);
            -webkit-background-clip: text;
            color: transparent;
        }

        .timeline-container {
            text-align: center;
            margin-top: 20px; /* Adjusted margin-top */
        }

        .timeline-container h2 {
            background: linear-gradient(100deg, #36D9AB, #4CC1D0);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 800;
            margin-bottom: 20px;
        }

        /* Timeline Item */
        .timeline-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            position: relative;
        }

        .timeline-line {
            stroke: #fff; /* Warna garis penghubung */
            stroke-width: 2; /* Ketebalan garis penghubung */
        }

        .jupiter {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
        }

        .neptune {
            position: absolute;
            top: 30%;
            left: 20%;
        }

        .mars {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
        }

        .uranus {
            position: absolute;
            top: 70%;
            left: 20%;
        }

    </style>

</head>
<body class="background">
    <!-- ----------------------------Navbar on top---------------------------- -->
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="2Dashboard.html">
                <img style="margin-left: 20px; width: 236.82px; height: 78px;" src="{{asset('Asset/logo-removebg-preview.png')}}" alt="">
            </a>
    
            <ul class="d-flex" style="margin-top: 20px;">
                <li class="nav-item" style="margin-right: 50px;">
                    <a class="text1" aria-current="page" href="2Dashboard.html">DASHBOARD</a>
                </li>
                <li class="nav-item" style="margin-right: 700px;">
                    <a class="text1" href="3Timeline.html">TIMELINE</a>
                </li>

                <li class="nav-item" style="margin-left: auto;">
                    <a class="button-style" href="1LoginPage.html">LOG OUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ----------------------------------------------------------------------- -->

    <div class="timeline-container">
        <h2>TIMELINE</h2>
        <div class="timeline-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 400 450">
                <path d="M300 120 Q200 70 130 120" class="timeline-line" fill="none" stroke="white" stroke-dasharray="4,4"/>
                <path d="M250 230 Q270 100 140 150" class="timeline-line" fill="none" stroke="white" stroke-dasharray="4,4"/>
                <path d="M290 230 Q150 220 180 300" class="timeline-line" fill="none" stroke="white" stroke-dasharray="4,4"/>
   
                <!-- ----------------------------Jupiter---------------------------- -->
                <image href="{{ asset('Asset/Jupiter.png') }}" x="250" y="20" width="120" height="120" />
                <text x="315" y="150" font-size="10" fill="white" text-anchor="middle" style="text-shadow: 5px 5px 5px rgba(75, 0, 75, 0.5);">Open Registration</text>
                <!-- --------------------------------------------------------------- -->


                <!-- ----------------------------Neptune---------------------------- -->
                <image href="{{ asset('Asset/Neptune.png') }}" x="50" y="100" width="100" height="100" />
                <text x="70" y="210" font-size="10" fill="white" text-anchor="middle" style="text-shadow: 5px 5px 5px rgba(75, 0, 75, 0.5);">Close</text>
                <text x="70" y="220" font-size="10" fill="white" text-anchor="middle" style="text-shadow: 5px 5px 5px rgba(75, 0, 75, 0.5);">Registration</text>
                 <!-- --------------------------------------------------------------- -->


                <!-- ----------------------------Mars---------------------------- -->
                <image href="{{ asset('Asset/Moon.png') }}" x="220" y="200" width="100" height="100" />
                <text x="270" y="310" font-size="10" fill="white" text-anchor="middle" style="text-shadow: 5px 5px 5px rgba(75, 0, 75, 0.5);">
                    Technical Meeting
                </text>
                <a href="your-technical-meeting-link-here" target="_blank">
                    <text x="270" y="320" font-size="6" fill="white" text-anchor="middle" style="text-decoration: underline;">
                        See more here
                    </text>
                </a>
                
                <!-- --------------------------------------------------------------- -->


                <!-- ----------------------------Uranus---------------------------- -->
                <image href="{{ asset('Asset/Uranus.png') }}" x="130" y="300" width="90" height="90" />
                <text x="170" y="400" font-size="10" fill="white" text-anchor="middle" style="text-shadow: 5px 5px 5px rgba(75, 0, 75, 0.5);">
                    Competition Day
                </text>
                <a href="your-link-here" target="_blank">
                    <text x="170" y="410" font-size="6" fill="white" text-anchor="middle" style="text-decoration: underline;">
                        See more here
                    </text>
                </a>
                <!-- --------------------------------------------------------------- -->
            </svg>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------- -->    


   

</body>
</html>