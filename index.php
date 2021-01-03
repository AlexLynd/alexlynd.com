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
        <!-- <style>
            .uk-sticky-placeholder {
                position: relative;
            }
        </style> -->
        <!-- <script>
            UIkit.modal.alert("This website is always under repair cause I suck at webdev!")
        </script> -->

        <div class="" >
            <div class="uk-section main">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-position-center welcome-text">
                        <div uk-parallax="y: -300; easing: -3"><h1 class="uk-animation-slide-bottom-medium" >Alex Lynd</h1></div>
                        <div uk-parallax="y: -300; easing: -2.5"><p  class="uk-margin-medium uk-animation-slide-bottom-medium ">A 17 year old Hacker, Maker, YouTuber, Musician, and Ninja trying to change the world one hack at a time.</p></div>
                        <p uk-margin uk-parallax="y: -300; easing: -2">
                            <button class="uk-button uk-button-default uk-animation-slide-top">Contact Me</button>
                            <button class="uk-button uk-button-default uk-animation-slide-top">TL;DR this Site</button>
                        </p>
                    </div>
                </div>
                <div class="uk-position-absolute uk-position-bottom-center ">
                <a href="#about" class="uk-icon-link uk-animation-slide-top" uk-icon="icon: chevron-down; ratio: 3" style="padding-bottom: 1rem;"></a>
                </div>

            </div>
            <div class="uk-section-secondary">
                <div class="uk-container uk-container-xlarge uk-padding-large">
                    <div class="uk-text uk-grid-large uk-grid-match" uk-grid>

                        <div class="uk-width-2-3@m">
                            <div class="home-sections uk-position-relative uk-position-center-left">
                                <h1 class=" ">About Me</h1>
                                <p>Hi I'm Alex! I'm a maker & hacker / open-source proponent who promotes the decentralized knowledge base of our community through the various projects I enjoy documenting on my Youtube Channel, and on this website.  I've worked with InfoSec professionals to create cool tools and projects, and am impassioned by environmental-oriented projects.  This is a placeholder.</p> 
                                
                            </div>
                        </div>

                        <div class="uk-width-expand@m" >
                            <div class="uk-cover-container">
                                <img class= " " src="img/me.jpg" uk-cover>
                            </div>
                            
                            
                            
                            <!-- <div class="uk-card uk-card-default uk-card-body">1-3</div> -->
                        </div>
                    </div>               
                
                </div>
            </div>
            <!-- <div class="uk-section-primary">
                <div class="uk-container uk-container-xlarge uk-padding-large">
                    
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-2-3@m">
                            <div class="uk-card uk-card-default uk-card-body">1-3</div>
                        </div>
                        <div class="uk-width-expand@m">
                            <div class="uk-card uk-card-default uk-card-body">Expand</div>
                        </div>
                    </div>
                    
                    
                   
                
                </div>
            </div> -->
            <?php include "footer.html";?>
        </div>
        </div>
    </body>
</html>

