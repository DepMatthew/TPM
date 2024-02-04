<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}">
    <style>
        body {
    background-color: #240459;
}

         
    </style>
 
</head>
<body>
    <script src="{{ asset('Asset/https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') }} integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetElement = document.querySelector(this.getAttribute('href'));

                    if (targetElement) {
                        const offset = 70; // Adjust this value based on your navbar height
                        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                        window.scrollTo({
                            top: targetPosition - offset,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <header>
        <div class="main">
            <div class="logo-container">
                <img width="150" height="70" src="{{ asset('Asset/logo.png') }}" alt="Logo">
            </div>
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <a href='#home'>HOME</a>
                        </div>
                        <div class="col">
                            <a href='#about'>ABOUT</a>
                        </div>
                        <div class="col">
                            <a href='#faq'>FAQ</a>
                        </div>
                        <div class="col">
                            <a href='{{ route('register') }}'>REGISTER</a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <div class="login-container">
                @if(Auth::user()){
                    <a href="{{ route('dashboard') }}">
                        <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        dashboard
                        </button>
                }
                @else
                <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-primary"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Login
                    </button>
                </a>
                @endif
               
            </a>
                </div>
            </div>
        </div>
    </header>

    <div class="right">
        <section id="home">
            <img width="500" height="200" src="{{ asset('Asset/logo.png') }}" alt="Home Image">
        </section>
        
        <div class="hackathon-info">
            <p>A hackathon is an event that brings together experts and creates a</p>
            <p>collaborative environment for solving a certain problem. While the majority of</p>
            <p>hackathons revolve around computer programming and IT, many other</p>
            <p>industries follow suit.</p>
        </div>
        <div class="video-container">
            <h2>VIDEO</h2>
            <video src="{{ asset('Asset/your-video-source.mp4') }}" controls width="500" height="300"></video>
        </div>
    </div>
    </div>
    <div class="champion-container">
        <h2>CHAMPION</h2>
        <div class="rectangle-container">
            <div class="rectangle rectangle1"></div>
            <div class="rectangle rectangle2"></div>
            <div class="rectangle rectangle3"></div>
            <div class="piala piala1"></div>
            <div class="piala piala2"></div>
            <div class="piala piala3"></div>
        </div>
    </div>
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
            </svg>
        </div>
    </div>
    
        <div class="sponsors-container">
            <h2>SPONSORS</h2>
            <div class="sponsor-item">
                <div class="goldsponsor">
                    <h3><span style="color: white; font-size: 12px; font-weight: 300;">Gold Sponsors</span></h3>
                    <div class="sponsor-box-container">
                        <div class="sponsor-box gold-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Gold Sponsor 1">
                        </div>
                        <div class="sponsor-box gold-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Gold Sponsor 2">
                        </div>
                        <div class="sponsor-box gold-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Gold Sponsor 3">
                        </div>
                    </div>
                </div>
        
                <div class="platinumsponsor">
                    <h4><span style="color: white; font-size: 12px; font-weight: 300;">Platinum Sponsors</span></h4>
                    <div class="sponsor-box-container">
                        <div class="sponsor-box platinum-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Platinum Sponsor 1">
                        </div>
                        <div class="sponsor-box platinum-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Platinum Sponsor 2">
                        </div>
                        <div class="sponsor-box platinum-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Platinum Sponsor 3">
                        </div>
                        <div class="sponsor-box platinum-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Platinum Sponsor 4">
                        </div>
                    </div>
                </div>
        
                <div class="silversponsor">
                    <h5><span style="color: white; font-size: 12px; font-weight: 300;">Silver Sponsors</span></h5>
                    <div class="sponsor-box-container">
                        <div class="sponsor-box silver-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                        </div>
                        <div class="sponsor-box silver-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                        </div>
                        <div class="sponsor-box silver-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                        </div>
                        <div class="sponsor-box silver-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                        </div>
                        <div class="sponsor-box silver-sponsor-box">
                            <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="media-section">
            <div style="text-align: center;">
                <h1 class="text" style="background: linear-gradient(to right, #36D9A8, #4CC1D0); -webkit-background-clip: text; color: transparent; font-size: 40px;">MEDIA PARTNER</h1>
            </div>
        </div>

        <div style="margin-top: 70px;">
            <div class="container">
                <div class="carousel">
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_1">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
                <div class="carousel" style="margin-top: 80px;">
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <article class="card_2">
                        <h1 style="color: white;"></h1>
                        <img src="{{ asset('Asset/Logo sponsor.png') }}" alt="Silver Sponsor 1">
                    </article>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
        </div>

        <div id="mentor-section" style="display: flex; justify-content: center; align-items: center;height: 35vh;">
            <div style="text-align: center;">
                <h1 class="text" style="background: linear-gradient(to right, #36D9A8, #4CC1D0); -webkit-background-clip: text; color: transparent;">MENTOR</h1>
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 390px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 390px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 390px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 560px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 560px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 730px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 730px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 900px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 900px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 1060px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 1060px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 190%; left: 475px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 200%; left: 475px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 190%; left: 645px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 200%; left: 645px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 190%; left: 815px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 200%; left: 815px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 190%; left: 985px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 200%; left: 985px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Mentor</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                </div>
                
            </div>
        </div>
    
        <div id="jury-section" style="display: flex; justify-content: center; align-items: center; height: 35vh;">
            <div style="text-align: center;">
                <h1 class="text" style="background: linear-gradient(to right, #36D9A8, #4CC1D0); -webkit-background-clip: text; color: transparent;">JURY</h1>
                <div>
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 650px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 650px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Jury</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 140%; left: 820px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 150%; left: 820px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Jury</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                    <img src="{{ asset('Asset/Polygon9.png') }}" alt="" style="position: absolute; top: 130%; left: 560px; transform: translate(-50%, -50%); z-index: -1; width: 130px; height: 160px;">
                    <div style="position: absolute; top: 190%; left: 735px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Nama</div>
                    <div style="position: absolute; top: 200%; left: 735px; transform: translate(-50%, -50%); color: #fff; font-size: 15px; font-family: Arial, sans-serif; color: #fff; text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255); z-index: 1;">Jury</div>
                    <img src="{{ asset('Asset/R__2_-removebg-preview 13.png') }}" alt="" style="position: absolute; top: 120%; left: 390px; transform: translate(-50%, -50%); z-index: 1; width: 50px; height: 50px;">
                    
                </div>
            </div>
        </div>

        <div id="about" class="about-us-container">
            <div class="about-us-header">
                <h1>About Us</h1>
            </div>
            <div class="about-us-content">
                <img src="{{ asset('Asset/icon robot about us.png') }}" alt="Robot Image">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur. Ridiculus sit senectus viverra nec in faucibus</p>
                    <p>morbi justo magna. Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit</p>
                    <p>amet consectetur. Ridiculus sit senectus viverra nec in faucibus morbi justo magna.</p>
                    <br>
                    <p>Ridiculus sit senectus viverra nec in faucibus morbi justo magna. Lorem ipsum dolor</p>
                    <p>sit amet consectetur. Ridiculus sit senectus viverra nec in faucibus morbi justo magna.</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Ridiculus sit senectus viverra nec in faucibus</p>
                    <p>morbi justo magna.</p>
                </div>
            </div>
        </div>

        <div class="why-title">WHY YOU SHOULD JOIN A HACKATHON</div>
    <div class="why-container">
    <div class="diamond-wrapper">
        <img src="{{ asset('Asset/Group 33870.png') }}" alt="Diamond Image 1" style="position: absolute; top: 5%; left: 100px; transform: translate(-50%, -50%); z-index: 1; width: 130px; height: 160px;">
        <div class="diamond-box">
            <p> hackathon participants get an opportunity to learn, share their ideas, do effective networking, and enjoy a relaxing and welcoming atmosphere. </p>
        </div>
    </div>
    <div class="diamond-wrapper">
        <img src="{{ asset('Asset/Group 33859 (1).png') }}" alt="Diamond Image 2" style="position: absolute; top: 5%; left: 100px; transform: translate(-50%, -50%); z-index: 1; width: 130px; height: 160px;">
        <div class="diamond-box">
            <p>The success of the hackathon format stems from creative freedom. Instead of using a specific methodology or following company rules are free from typical development constraints.</p>
        </div>
    </div>
    <div class="diamond-wrapper">
        <img src="{{ asset('Asset/Group 33871.png') }}" alt="Diamond Image 3" style="position: absolute; top: 12%; left: 100px; transform: translate(-50%, -50%); z-index: 1; width: 130px; height: 160px;">>
        <div class="diamond-box">
            <p> hackathon participants get an opportunity to learn, share their ideas, do effective networking, and enjoy a relaxing and welcoming atmosphere. </p>
        </div>
    </div>
</div>

<div id="faq" class="faqs-title">FAQs</div>
<div class="faqs-container">
    <!-- Left Side FAQs -->
    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(1)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(2)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(3)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(4)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <!-- Right Side FAQs -->
    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(5)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(6)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(7)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>

    <div class="faq-box">
        <div class="faq-title">Title For Frequently Asked Question</div>
        <button class="toggle-button" onclick="toggleAnswer(8)">+</button>
        <div class="faq-content">Lorem ipsum dolor sit amet consectetur. Elit non sed tempus enim auctor arcu. Cras quis integer urna nisl risus tempus sapien. Tincidunt augue commodo enim malesuada vitae lorem ut. Erat nuncn diam egestas ultrices diam at dui.</div>
    </div>
</div>

<script>
    function toggleAnswer(index) {
        var faqContent = document.querySelectorAll('.faq-content');
        var toggleButton = document.querySelectorAll('.toggle-button');

        faqContent.forEach((content, i) => {
            if (i === index - 1) {
                content.style.display = content.style.display === 'none' ? 'block' : 'none';
                toggleButton[i].textContent = content.style.display === 'none' ? '+' : '-';
            } else {
                content.style.display = 'none';
                toggleButton[i].textContent = '+';
            }
        });
    }
</script>

<div class="event-title" style="margin-top: 200px; margin-bottom: 200px;">Our Other Event</div>
<div class="event-container" id="our-other-event">
    <img src="{{ asset('Asset/virtual conference.png') }}" alt="Virtual Conference Image">
    <button class="regist-button" style="position: absolute; top: 890%; left: 305px; z-index: 1; width: 150px; height: 35px; ">Regist Here</button>
    <img src="{{ asset('Asset/Group 33865.png') }}" alt="Group 33865 Image">
    <button class="regist-button" style="position: absolute; top: 890%; left: 1035px; z-index: 1; width: 150px; height: 35px; ">Regist Here</button>
</div>

<script>
    function showEvent(eventId) {
        // Your existing showEvent function code here

        // Scroll to the "Our Other Event" section
        var eventSection = document.getElementById('our-other-event');
        if (eventSection) {
            eventSection.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>

<div class="contact-title">Contact Us</div>
<div class="contact-form">
    <div class="form-group">
        <label for="name" style="color: #fff;">Name:</label>
        <input type="text" id="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="email" style="color: #fff;">Email Address:</label>
        <input type="email" id="email" placeholder="Enter your email address">
    </div>
    <div class="form-group">
        <label for="subject" style="color: #fff;">Subject:</label>
        <input type="text" id="subject" placeholder="Enter your subject">
    </div>
    <div class="form-group">
        <label for="message" style="color: #fff;" ;">Message:</label>
        <textarea id="message" placeholder="Enter your message"></textarea>
    </div>
    <button class="submit-button">Submit</button>
</div>

<div class="footer-container">
    <div class="powered-by" style="margin-left: 30px;">
        <p>Powered and Organized by</p>
    </div>
    <div class="subscribe">
        <p>Subscribe to Technoscape</p>
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
        <div class="social-icons" style="margin-top: 10px; justify-content: space-around";>
            <img src="{{ asset('Asset/instagram_icon.png') }}" alt="Instagram Icon" width="30" height="30">
            <img src="{{ asset('Asset/Facebook_icon.png') }}" alt="Facebook Icon" width="30" height="30">
            <img src="{{ asset('Asset/twitter_icon.png') }}"  alt="Twitter Icon" width="30" height="30">
            <img src="{{ asset('Asset/linkedin_icon.png') }}" alt="LinkedIn Icon" width="30" height="30">
        </div>
    </div>
</div>

<div class="footer">
    <p class="privacy-policy" style="margin-right: 90px; font-size: 17px;">Privacy Policy & Terms of Services</p>
</div>
    

</body>
</html>
