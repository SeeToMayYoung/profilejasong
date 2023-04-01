<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <div class="bruh-container">
        <ul class="nav nav-underline nav-justified nav-bruh" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true" style="color: #EEEEEE">PROFILE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-skills-tab" data-bs-toggle="pill" data-bs-target="#pills-skills" type="button" role="tab" aria-controls="pills-skills" aria-selected="false" style="color: #EEEEEE">SKILL</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false" style="color: #EEEEEE">EXPERIENCE</button>
            </li> -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education" aria-selected="false" style="color: #EEEEEE">EDUCATION</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false" style="color: #EEEEEE">SOCIAL</button>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active content-container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="profile-content">
                <div class="name-desc">
                    <p class="profile-name">
                        JASON MADE SITUMEANG
                    </p>
                    <p class="profile-desc">
                        I'm an Indonesia - Bali origined college student who mainly does Programming and Graphic Designing. I also love to play Valorant, osu!, and Pou in my spare time.
                    </p>
                    <div class="split-line"></div>
                    <div class="bruh-list">
                        <p>Nickname : Jasong</p>
                        <p>Pronouns : King/Lord</p>
                        <p>DOB : 2 December 2002</p>
                        <p>Gender : Male</p>
                        <p>Faith : Christianity</p>
                    </div>
                </div>
                <div class="pic-holder">
                    <div class="pic-bgcolor"></div>
                    <div class="pic-jasong">
                        <img src="images/jasong.png" alt="">
                    </div>
                </div>
                <div class="quote-personality">
                    <div class="info-text">
                        <p class="thin-title">
                            MBTI PERSONALITY
                        </p>
                        <p class="thick-title">
                            ISTJ
                        </p>
                        <p class="text-pers">
                            "ISTJs are reliable, responsible, and practical individuals who value tradition and order. They tend to be detail-oriented, organized, and methodical, with a strong sense of duty and loyalty to their commitments."
                        </p>
                    </div>
                    <div class="split-line"></div>
                    <div class="info-text">
                        <p class="thin-title">
                            FAVORITE
                        </p>
                        <p class="thick-title">
                            QUOTE
                        </p>
                        <p class="text-quote">
                            "Life is a race, and you are the racist."<br>~ some random guy on discord
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-skills" role="tabpanel" aria-labelledby="pills-skills-tab" tabindex="0">
            <div class="content-container2">
                <div class="skill-container">
                    <div class="slide-container">
                        <div class="skill-desc">
                            <p class="slide-title">
                                PROGRAMMING
                            </p>
                            <p class="thin-title">
                                I have a personal experience of over 1 year in Front-End and Back-End Programming. Most of the projects i've finished are group projects, but I occasionally do solo projects as well. 
                            </p>
                            <div class="split-line"></div>
                            <p class="thin-title" style="padding-top:1.5vh; font-weight: 700; font-size:0.7vw">
                                "Programming isn't about what you know; it's about what you can figure out."<br>~Chris Pine.
                            </p>
                        </div>
                        <div id="carouselExampleCaptions" class="carousel slide bruh-carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="images/skill_frontend.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>HTML, CSS, JavaScript, PHP</h5>
                                <p>Programming Languages used for Front-End Development.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="images/skill_backend.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Python, C++, Java, mySQL</h5>
                                <p>Programming Languages used for Back-End Development.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div id="carouselExampleCaptions2" class="carousel slide bruh-carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="images/skill_images.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Adobe Photoshop, Canva</h5>
                                <p>Editing Programs used for Image Creation.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="images/skill_videos.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Adobe Premiere</h5>
                                <p>Editing Programs used for Video Creation.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                        <div class="skill-desc">
                            <p class="slide-title">
                                GRAPHIC DESIGN
                            </p>
                            <p class="thin-title">
                                I have a personal experience of over 5 years in Image and Video Editing/Creation. Most of the projects i've finished are group projects, but I occasionally do solo projects as well.
                            </p>
                            <div class="split-line"></div>
                            <p class="thin-title" style="padding-top:1.5vh; font-weight: 700; font-size:0.7vw">
                                "Good design is all about making other designers feel like idiots because that idea wasn't theirs."<br>~Frank Chimero.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="tab-pane fade" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab" tabindex="0">Experience Page</div> -->
        <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab" tabindex="0">
            <div class="content-container" style="padding-top:6vw; padding-bottom:3vw; height:100%">
                <div class="info-text">
                    <p class="text-quote" style="font-size: 2vw; line-height: 2.5vw">
                        "Education is the passport to the future, for tomorrow belongs to those who prepare for it today." ~Malcolm X.
                    </p>
                    <div class="split-line" style="margin: 2vw 0vw"></div>
                    <p class="thin-title">
                        Here is my education journey that has been preparing me for my future!
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border:none">
                            <div class="card-body" style="background-color:#000000">
                                <!-- <h6 class="card-title">Timeline</h6> -->
                                <div id="content">
                                    <ul class="timeline" style="color:#EEEEEE; font-family:'Raleway'">
                                        <li class="event" data-date="2007 - 2009">
                                            <h3>Kindergarten - TK Pradnyandari 1</h3>
                                            <p>Badung, Bali - No class dropped.</p>
                                        </li>
                                        <li class="event" data-date="2009 - 2015">
                                            <h3>Elementary School - SD N 1 Kerobokan</h3>
                                            <p>Badung, Bali - No class dropped.</p>
                                        </li>
                                        <li class="event" data-date="2015 - 2018">
                                            <h3>Middle School - SMP N 1 Kuta Utara</h3>
                                            <p>Badung, Bali - No class dropped.</p>
                                        </li>
                                        <li class="event" data-date="2018 - 2021">
                                            <h3>High School - SMA N 1 Kuta Utara</h3>
                                            <p>Badung, Bali - No class dropped.</p>
                                        </li>
                                        <li class="event" data-date="2021 - Now">
                                            <h3>College - Bina Nusantara University x PPTI BCA</h3>
                                            <p>Bogor, West Java - Still currently attending.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab" tabindex="0">
            <div class="content-container">
                <div class="social-content">
                    <div class="info-text" style="width:30%">
                        <p class="text-quote" style="font-size: 2vw; line-height: 2.5vw">
                            "Networking is not about collecting contacts. Networking is about building relationships." ~Heidi Roizen.
                        </p>
                        <p class="thin-title" style="text-align:center">
                            You can know me more through these social medias!
                        </p>
                    </div>
                    <div class="split-line2"></div>
                    <div class="social-container" style="font-family:'Raleway'">
                        <a class="btn btn-primary" style="background-color: #ac2bac90; width: 100%; border: none; padding: 1vw; font-weight:500" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>@jasonms07</a>
                        <a class="btn btn-primary" style="background-color: #25d36690; width: 100%; border: none; padding: 1vw; font-weight:500" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-line me-2" viewBox="0 0 16 16">
                        <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z"/>
                        </svg>jasonms321</a>
                        <a class="btn btn-primary" style="background-color: #ff450090; width: 100%; border: none; padding: 1vw; font-weight:500" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at me-2" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>situmeangjason@gmail.com</a>
                        <a class="btn btn-primary" style="background-color: #7289d990; width: 100%; border: none; padding: 1vw; font-weight:500" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-discord me-2" viewBox="0 0 16 16">
                        <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                        </svg>SeeToMayYoung#9978</a>
                        <a class="btn btn-primary" style="background-color: #33333390; width: 100%; border: none; padding: 1vw; font-weight:500" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github me-2" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>/SeeToMayYoung</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>