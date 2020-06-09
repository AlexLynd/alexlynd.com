<!DOCTYPE html>
<html class="">
    <head>
        <title>Alex Lynd</title>
        <meta name="description" content="Alex Lynd website">
  		<meta name="keywords"    content="Alex Lynd, blog, electronics, programming, hacking, diy, tutorials, cybersecurity, infosec">
  		<meta name="author"      content="Alex Lynd">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css"/>
        <link rel="stylesheet" href="style.css"/>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>
    </head>
    <body class="">
        <div id="particles-js"></div>
		<script src="js/particles.js"></script>
		<script src="js/particles-main.js"></script>
		<div class= "text">
        <?php include "menu.html";?>
        <script>
            UIkit.modal.alert("This website is currently under repair as of June 2nd 2020 and I'm working on updating some features/articles.  Pardon the mess!")
        </script>

        <div class="" >
            <div class="uk-section main">
                <div class="uk-container uk-container-xlarge">
                    <div class="centered">
                        <h1>Alex Lynd</h1>
                        <p class="uk-margin-medium uk-animation-slide-bottom-medium">Well rounded hacker and maker looking for more opportunities to create cool CS projects and learn as much as I can.  I'm passionate about making YouTube videos and sharing my content with others.  Currently in high school and pursuing multiple hobbies including martial arts and music.</p>
                    </div>
                </div>
                <a href="#about" class="uk-icon-link uk-position-absolute uk-position-bottom-center uk-animation-slide-top" uk-icon="icon: chevron-down; ratio: 2.5"></a>

            </div>
            <div class="uk-section-primary">
                <div class="uk-container uk-container-xlarge uk-padding-large">
                    
                    <div class="uk-grid-match uk-grid-divider uk-child-width-1-2@m" uk-grid>
                        <div class="home-sections">
                            <h1>About Me</h1>
                            <p>I'm currently in high school, and am self taught in everything CS. I've worked on a lot of personal projects aimed mostly at hardware hacking and auditing devices, which I've recently started to upload to the internet. I've picked up a lot in programming, hacking, electronics, and webdev. I coded this website myself from scratch, and you can check out some of my projects. I prototype electronics, hack/fix consumer electronics, make websites, and much more. My current projects include a device for portable wardriving and an AI-based trash sorting device. I also love pyrotechnics and fire stuff.</p>
                        </div>
                        <div>
                            <div class="uk-cover-container" uk-scrollspy="cls:uk-animation-slide-right">
                                <img data-src="img/alex.jpg" alt="" uk-img uk-cover>
                                
                            </div>
                        </div>
                    </div>
                   
                
                </div>
            </div>
            <div class="uk-section-secondary">
                <div class="uk-container uk-container-xlarge uk-padding-large">
                    
                    <div class="uk-grid-match uk-grid-divider uk-child-width-1-2@m" uk-grid>
                        <div>
                            <div class="uk-cover-container" uk-scrollspy="cls:uk-animation-slide-left">
                                <img data-src="img/fire.jpg" alt="" uk-img uk-cover>
                                
                            </div>
                        </div>
                        <div class="home-sections">
                            <h1>My Story</h1>
                            <p class=>I'm Alex Lynd, and a 16 year old maker/hacker from California. I pursue a lot of hobbies including piano, skating, TaeKwonDo, parkour, hacking and more! I spend most of my time hacking electonics / programming, and push my content to the internet and YouTube. I'm interested in infosec and hacking, and have been teaching myself a lot about various CS subjects. I'm a big fan of open-source and free content, and my goal is to keep learning and to spread my knowledge to as many people as I can.  </p>
                        </div>
                        
                    </div>
                   
                
                </div>
            </div>
            <?php include "footer.html";?>
        </div>
        </div>
    </body>
</html>

