<?php
// Include the database connection file
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>.wf-force-outline-non[tabindex="-1"]:focus{outline: none;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="try.css">
    <title>Niccollo - Personal Website</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.google.com/?query=barcode+128">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script></script>
    <link href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e8ddc4da-23dd-4502-b65b-378c9cfe5efa/dh2u9gf-5d451b90-e559-4373-b520-ae7168ef822d.png/v1/fill/w_1280,h_1280/ahjin_guild_logo_by_jormxdos_dh2u9gf-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MCIsInBhdGgiOiJcL2ZcL2U4ZGRjNGRhLTIzZGQtNDUwMi1iNjViLTM3OGM5Y2ZlNWVmYVwvZGgydTlnZi01ZDQ1MWI5MC1lNTU5LTQzNzMtYjUyMC1hZTcxNjhlZjgyMmQucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.D1Jn-xqCNAARl_1Q_c0IAx9_YCPgncfoBABkmLPQtzo" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>
<body>
    <div class="noise-background-fixed"></div>
    <div class="navbar">
        <div class="logo"><a href="#">Ahjin</a></div>
            <div class="nav-container">
                <ul class="links">
                    <li>
                        <div class="animation-rotate-text-container">
                            <a href="#" data-link-alt="Home"><span class="spn_nav">Home</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="animation-rotate-text-container">
                            <a href="about.php" data-link-alt="About"><span class="spn_nav">About</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="animation-rotate-text-container">
                            <a href="#projects" data-link-alt="Projects"><span class="spn_nav">Projects</span></a>
                        </div class="animation-rotate-text-container">
                    </li>
                    <li>
                        <div  class="animation-rotate-text-container">
                            <a href="contact.php" data-link-alt="Contact"><span class="spn_nav">Contact</span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn"> <!--glitch button-->
                <button id="openModalBtn" class="cybr-btn">Socials_<span aria-hidden></span>
                    <span aria-hidden class="cybr-btn_glitch">Connect</span>
                    <span aria-hidden class="cybrs-btn_tag"></span></button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 class="modal_h2">Follow Me</h2>
                        <div class="wrapper">
                            <a class="button_db"href="https://www.instagram.com/niccollodeon/"target="_blank"style="color: black; text-decoration: none;">
                                <div class="icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <span class="spn">@niccollodeon</span>
                            </a>
                            <a class="button_db" href="https://www.facebook.com/mark.n.dayrit?mibextid=LQQJ4d" target="_blank"style="color: black; text-decoration: none;">
                                <div class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <span class="spn">Niccollo Dayrit</span>
                            </a>
                            <a class="button_db" href="https://twitter.com/Niccollodeon" target="_blank"style="color: black; text-decoration: none;">
                                <div class="icon">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <span class="spn">@niccollodeon</span>
                            </a>
                            <a class="button_db" href="https://github.com/niccollodeon" target="_blank"style="color: black; text-decoration: none;">
                                <div class="icon">
                                    <i class="fab fa-github"></i>
                                </div>
                                <span class="spn">@niccollodeon</span>
                            </a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container w-container">
            <div class="hero-container">
                <div class="line-separator hero-1-copy" style="width: 100%; height: 3px;">
                    <img src="uploads/652a81c5d2f516632fee0fb9_line-background.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" srcset="https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 500w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 800w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 1024w" alt="line gradiant" class="line-separator-glow">
                    <img src="uploads/652a81c5d2f516632fee0fb9_line-background.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" srcset="https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 500w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 800w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 1024w" alt="line gradiant" class="line-separator-glow">
                </div>
                <div class="hero-content-container">
                    <div class="hero-content-grid">
                        <div class="hero-text-container">
                            <div class="hero-title-container">
                                <div class="hero-action-trigger">
                                    <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-content-2">
                                        <h1 class="header-title">Niccollo Dayrit</h1>
                                    </div>
                                </div>
                            <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="black-overlay"></div>
                            </div>
                            <div class="hero-paragraph-container">
                                <p style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="text-par">
                                a Developer
                                </p>
                                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="black-overlay"></div>
                            </div>
                        </div>
                        <div class="hero-image-container">
                            <img src="uploads/ef518e90-c894-4aeb-95da-496d7ccb3c73-Photoroom.png" loading="lazy" alt="hero me 1" class="hero-pic">
                            <img src="uploads/ef518e90-c894-4aeb-95da-496d7ccb3c73-removebg-preview.png" loading="lazy" alt="hero-2" class="hero-pic-nbg">
                        </div>
                    </div>
                </div>
                <div class="hero-background">
                    <img src="uploads/642abc3554df3246489522ab_hero.jpg" alt="hero image" srcset="https://assets-global.website-files.com/642a96ac17a293298c1564d0/642abc3554df3246489522ab_hero.jpg 500w, https://assets-global.website-files.com/642a96ac17a293298c1564d0/642abc3554df3246489522ab_hero.jpg 80w, https://assets-global.website-files.com/642a96ac17a293298c1564d0/642abc3554df3246489522ab_hero.jpg 1080w, https://assets-global.website-files.com/642a96ac17a293298c1564d0/642abc3554df3246489522ab_hero.jpg 2000w" class="herro-image _1st zoom">
                </div>
                <div class="line-separator hero-1" style="width: 100%; height: 3px;">
                    <img src="uploads/652a81c5d2f516632fee0fb9_line-background.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" srcset="https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 500w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 800w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 1024w" alt="line gradiant" class="line-separator-glow">
                    <img src="uploads/652a81c5d2f516632fee0fb9_line-background.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" srcset="https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 500w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 800w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 1024w" alt="line gradiant" class="line-separator-glow">
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container w-container">
            <div class="welcome-container">
                <div id="node225" class="heading-animation-trigger">
                    <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-content-2">
                        <h2 class="overline-small white">Welcome</h2>
                    </div>
                </div>
                <div class="animation-text-reveal-opacity">
                    <p class="welcome-text">
                        <span class="scroll-reveal">
                            As a freelance Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit vitae expedita atque. Delectus doloremque enim asperiores dolorum officia eos eum, cum amet mollitia, fugiat ducimus rem, praesentium aut fuga natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quod et error consectetur nobis quas omnis adipisci? Officiis mollitia eos magni suscipit saepe, quia, delectus nesciunt sapiente doloribus et dolorem?v
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects" class="section">
        <div class="container w-container">
            <div class="projects-section-header">
                <div class="heading-animation-trigger">
                    <div style="transform: translate3d(0px, 0%, 0px) scale3d(1,1,1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-content">
                        <h2 class="overline-small white">Recent projects</h2>
                    </div>
                </div>
                <div class="heading-animation-triger">
                    <div style="transform: translate3d(0px, 0%, 0px) scale3d(1,1,1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-content">
                        <h2 class="overline-small white">2023-2024</h2>
                    </div>
                </div>
            </div>
            <div class="container-wrapper">
                <div class="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">

                    < class="cards">

                    <?php
                    $sql_count = "SELECT COUNT(*) AS total FROM `projects`";
                $result_count = mysqli_query($con, $sql_count);

                // Fetch records for the current page
                $sql = "SELECT * FROM `projects`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['project_ID'];
                        $title = $row['proj_title'];
                        $description = $row['proj_desc'];
                        $image = $row['proj_img'];
                        echo'<label for="s1" id="slide1">
                            <div class="card">
                                <img src="uploads/'.$image.'" alt="Image 1" class="proj-img">
                                <div class="txt-overlay">
                                    <h1 class="proj-title">'.$title.'</h1>
                                    <h2 class="proj-desc">'.$description.'</h2>
                                </div>
                            </div>
                        </label>';
                    }
                }
                ?>
                    <div class="dots">
                        <label for="s1" class="active"></label>
                        <label for="s2"></label>
                        <label for="s3"></label>
                    </div>
                    <div class="slider-arrow-prev"></div>
                    <div class="slider-arrow-next"></div>
                </div>
             </div>
        </div>
    </div>
</div>
    <div class="section">
        <div class="spacing-for-bot">
            <div class="section bottom-padding-66">
                <div class="container w-container">
                    <div class="section-header">
                        <div class="heading-animation-trigger">
                            <div style="transform: translate3d(0px, 0%, 0px) scale3d(1,1,1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-content">
                                <h2 class="overline-small white">Thinking About the Future?</h2>
                            </div>
                        </div>
                        <div class="spacer_2-em"></div>
                    </div>
                    <div class="about-image-container">
                        <img src="uploads/about-bg.jpg" loading="lazy" sizes="(max-width: 479px) 93vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" alt="about bg" class="about-bg-image">
                        <img src="uploads/about-bg.jpg" loading="lazy" sizes="(max-width: 479px) 93vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" alt="home bg" class="about-bg-image-glow">
                        <div style="display: none; transform: translate3d(0px, 100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="animation-image-swipe-reveal-overlay"></div>
                        <div class="noise-overlay"></div>
                    </div>
                    <div class="button-container">
                        <div class="btn" onclick="location.href='contact.php';"> <!--glitch button-->
                            <button class="cybr-btn"><a href="contact.php"></a>Contact_<span aria-hidden></span>
                                <span aria-hidden class="cybr-btn_glitch">Connect</span>
                                <span aria-hidden class="cybrs-btn_tag"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container w-container">
            <div class="footer-grid">
                <div class="div-block">
                    <div class="footer-header">
                        <a href="#" class="logo-container w-nav-brand">Ahjin
                        </a>
                        <p  class="paragraph-footer" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            Experience the beauty of exceptional design as I bring your
                            vision to life. Transform your ideas with my innovative
                            solutions.
                        </p>
                    </div>
                    <div class="social-links">
                        <a href="https://www.instagram.com/niccollodeon/" class="link-effect"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/mark.n.dayrit?mibextid=LQQJ4d" class="link-effect"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/Niccollodeon" class="link-effect"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/niccollodeon" class="link-effect"><i class=" fab fa-github"></i></a> 
                    </div>
                </div>
                <div class="footer-link-block">
                    <div class="footer-links-container">
                        <div class="footer-link-title-1">Menu</div>
                        <a href="#" class="footer-link-title" style="--clr:#CB1DCD"><span class="spn-link">Home</span></a>
                        <a href="about.php" class="footer-link-title" style="--clr:#CB1DCD"><span class="spn-link">About</span></a>
                        <a href="#projects" class="footer-link-title" style="--clr:#CB1DCD"><span class="spn-link">Projects</span></a>
                        <a href="contact.php" class="footer-link-title" style="--clr:#CB1DCD"><span class="spn-link">Contact</span></a>
                    </div>
                    <div class="footer-links-container">
                        <div class="footer-link-title-1">Admin</div>
                        <a href="login.php" class="footer-link-title" style="--clr:#CB1DCD"><span class="spn-link">Crud</span></a>
                        
                    </div>
                </div>
            </div>
            <div class="line-separator" style="width: 100%; height: 3px;">
                <img src="uploads/652a81c5d2f516632fee0fb9_line-background.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, (max-width: 1919px) 81vw, 68vw" srcset="https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 500w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 800w, https://assets-global.website-files.com/652a81c5d2f516632fee0f84/652a81c5d2f516632fee0fb9_line-background-p-500.jpg 1024w" alt="line gradiant" class="line-separator-glow">
            </div>
        </div>
        <p class="footer-glitch" data-text="© 2024 Niccollo. All rights reserved.">© 2024 Niccollo. All rights reserved.</p>
    </footer>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        var typed3 = new Typed(".text-par",{
            strings: ["a Student", "a future AI Engineer", "a Gamer"],
            typeSpeed: 10,
            backSpeed: 10,
            smartBackspace: true, // this is a default
            loop: true
        });
    </script>
    <style data-typed-js-cursor-css="true">
        .typed-cursor{
            opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
            animation: typedjsBlink 0.7s infinite;
            -webkit-animation: typedjsBlink 0.7s infinite;
                    animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
            50%{opacity: 0.0;}
        }
        @-webkit-keyframes typedjsBlink{
            0% {opacity: 1;}
            50%{opacity: 0.0;}
            100%{opacity: 1;}
        }
    </style>
    <script>
        window.addEventListener('load', () => {
            handleSlider()
        })
        
        function handleSlider(){
            const inputs = document.querySelectorAll('input[name="slider"]');
            const dots = document.querySelectorAll('.dots label');

            const arrow = document.querySelector('.slider .slider-arrow-prev');
            const arrow2 = document.querySelector('.slider .slider-arrow-next');

            arrow.addEventListener("click", () => {
                const currentActive = document.querySelector('.dots label.active');
                if(currentActive.previousElementSibling){
                    currentActive.previousElementSibling.click();
                } else{
                    dots[dots.length - 1].click()
                }
            })
            arrow2.addEventListener('click', () => {
                const currentActive = document.querySelector('.dots label.active');
                if(currentActive.nextElementSibling){
                    currentActive.nextElementSibling.click();
                } else{
                    dots[0].click();
                }
            })

            inputs.forEach((input, index) => {
                input.addEventListener('change', () => {
                    dots.forEach((dot, i) => {
                        if(i == index) {
                            dot.classList.add("active");
                        } else{
                            dot.classList.remove("active");
                        }
                    })
                })
            })
        }
    </script>
</body>
</html>