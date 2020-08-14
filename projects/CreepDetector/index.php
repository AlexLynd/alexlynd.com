<!DOCTYPE html>
<html class="">

<head>
    <title>Alex Lynd</title>
    <meta name="description" content="Alex Lynd projects">
    <meta name="keywords" content="Alex Lynd, projects, electronics, programming, hacking, diy, cybersecurity">
    <meta name="author" content="Alex Lynd">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/style.css" />

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>
</head>

<body class="">
    <?php include "../../menu.html";?>
    <div style="width: 100%; height: 81px;"></div>

    <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light"
        uk-parallax="bgy: -300" data-src="img/CreepDetector.png" uk-img>
        <div class="header-content">
            <h1 class="uk-heading-small">CreepDetector</h1>
            <p>Detecting stalkers over WiFi with Wardriving</p>
            <span class="uk-article-meta"><span uk-icon="clock"></span>&nbsp;&nbsp;&nbsp;Oct 11, 2019</span>
        </div>
    </div>

    <div class="">

        <div class="uk-section-default">
            <div class="uk-container uk-container-xlarge uk-padding-large">
                <div class="" uk-grid>

                    <div class="uk-width-expand@m">
                        <span class="uk-badge">Microcontroller</span>
                        <span class="uk-badge">Python</span>
                        <span class="uk-badge">Raspberry Pi</span>
                        <span class="uk-badge">Wardriving</span>

                        <h2 class="uk-heading-divider"><span>The CreepDetector</span></h2>
                        <p>Wardriving is the act of plotting and mapping wireless devices for reconnaissance, and can be
                            utilized for various practical applications even to normal people. As a proof of concept, my
                            friend Kody and I designed a program that analyzes wardriving data in Jupyter Notebook to
                            see if someone is following you by detecting the presence of their phone or similar Wi-Fi
                            enabled devices. After gathering information on the "creep", we can plot their location on a
                            map against our route to see where they were spotted. This article will give you an overview
                            of how the CreepDetector tool works, how we tested it, and how you can set it up yourself.
                        </p>
                        <h3 class="uk-heading-bullet">CreepDetector Featured</h3>
                        <iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/e0deb819-e94a-42ac-bbb4-bcb91d472fff?dark=true"></iframe>
                       <br> <br>
                        <div class="uk-child-width-1-2@l" uk-grid uk-lightbox="animation: scale">
                            <div>
                                <iframe src="https://www.youtube.com/embed/ug9dHwm3h0s?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true; autoplay: false;"></iframe>
                            </div>
                            <div>
                                <iframe src="https://www.youtube.com/embed/wNke7teywOs?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true; autoplay: false;"></iframe>

                            </div>
                        </div>

                        <h3 class="uk-heading-bullet">Components</h3>                        
                        <div>
                            <ul class="uk-list uk-list-collapse uk-list-disc">
                                <li>Raspberry Pi 3B +</li>
                                <li> 3.5" TFT Screen (optional)</li>
                                <li>Panda PAU09 Wi-Fi Dongle</li>
                                <li>USB GPS</li>
                                <li>Portable Battery</li>
                                <li>a Creep</li>
                            </ul>
                        </div>
                        <h3 class="uk-heading-bullet">Wardriving Setup</h3>
                        <p>The first step before writing code was to set up our wardriving tools and capture some data,
                            so I connected the GPS and Wi-Fi dongle to my Raspberry Pi and initialized a serial
                            connection to the GPS with GPSD. I started the Wi-Fi dongle into monitor mode, allowing me
                            to capture Wi-Fi data promiscuously, and attached a 3.5” TFT so I could have a small monitor
                            during the wardriving session. Then launching Kismet, a command-line wardriving utility, I
                            was set to start capturing creeps.</p>
                        <div class="uk-inline">
                            <img src="img/RPi_Kismet_TFT.png" alt="" >
                            <div class="uk-position-bottom-right uk-overlay uk-overlay-default" style="color: black !important">Raspberry Pi Running Kismet</div>
                        </div>
                        <p>
                            Since we needed a recognizable wireless device to test as a definite “creep”, Kody wrote a
                            program for an ESP8266 that starts a Wi-Fi access point with the name “Creeper”. With my
                            wardriving tools set up, I skated around the block while he followed me in a car, placing
                            the device in two separate places along my ahead route as different instances of a “creep”
                            showing up. This would later allow us to parse through the wardriving data and locate the
                            creep and information about it, if it was detected outside a certain range.</p>

                        <div class="uk-inline">
                            <img src="img/CreepDetector.png" alt="">
                            <div class="uk-position-bottom-right uk-overlay uk-overlay-default" style="color: black !important">ESP8266 acting as WiFi Access Point</div>
                        </div>

                        <h3 class="uk-heading-bullet">Detecting Creeps</h3>
                        <p>Python offers a variety of simple libraries for data analysis, and the Jupyter Notebook IDE
                            provides a user friendly interface for rendering Python code output, so this will be the
                            most viable option for handling the files. Kismet generates a few file formats (all XML
                            derivatives) after a session, but we only need to parse through the netxml and gpsxml files,
                            which contain the devices detected and locations they were spotted at. The CreepDetector
                            extracts this information, and creates a database of all wireless devices found, and
                            information including the ESSID, device type and spotted locations.</p>
                        <div class="uk-inline">
                            <img src="img/devices.png" alt="">
                            <div class="uk-position-bottom-right uk-overlay uk-overlay-default" style="color: black !important">List of over 1200 devices detected</div>
                        </div>

                        <p>After creating this list, the CreepDetector filters out devices spotted within a threshold
                            range (set to a quarter mile) using their max and min GPS locations. Once the devices are
                            filtered, a "creep list" is rendered, and sure enough the “Creeper” device appears! It even
                            picked up Kody’s phone as an unintended side-effect, since we initially didn't expect it to
                            detect devices that are not Wi-Fi access points.</p>
                        <div class="uk-inline">
                            <img src="img/Creeps.png" alt="">
                            <div class="uk-position-bottom-right uk-overlay uk-overlay-default" style="color: black !important">We found the creep!</div>
                        </div>
                        
                        <p>Finally to help visualise where the creeps were spotted, I used a Python library called
                            Folium for map plotting. I wrote a sketchy algorithm that plots my wardriving route and
                            layers Creeps on top of it with all the places they were detected at. If you want to
                            understand how any of this code works or the sketchy algorithm, you can check out my <a
                                href="">blog here.</a></p>
                        <iframe src="map.html" style="width:100%; height: 60vh;"></iframe>

                        <h3 class="uk-heading-bullet">Conclusion</h3>
                        <p>We initially didn't expect the CreepDetector to work as well as it did, and it certainly took
                            a long time to code since I had to manually read over and try to understand the structure of
                            the Kismet xml files to properly parse the files. One shortcoming of the CreepDetector is
                            that the detection must be done in post (after wardriving), meaning you're unable to pick up
                            Creeps during the session. However after talking to dragorn from <a
                                href="https://twitter.com/KismetWireless" target="_blank">KismetWireless</a> on Twitter,
                            they're considering adding this as a feature! The CreepDetector also relies on the presence
                            of a Wi-Fi enabled device carried by the Creep, such as a cell phone. Since we initially
                            thought only AP's would work, and wanted an isolated device, the ESP8266 was a quick,
                            expendable platform to test this on, but it was an amazing accident that we picked up Kody's
                            phone.</p>
                        <p>There are still a few features I'm looking to fix in the CreepDetector, such as the current
                            map plotting algorithm and making other code more efficient. Im currently working on porting
                            this concept to run on an ESP8266 in conjunction with my <a
                                href="/projects/ESP-DriveBy">ESP-DriveBy</a> project. To see updates on this project,
                            check the sidebar for news, or follow my <a href="https://twitter.com/alexlynd"
                                target="_blank">Twitter page</a>. I'm hoping on releasing a YouTube video soon giving an
                            overview of this project, so stay posted!</p>
                            <hr>
                    </div>
                    <div class="uk-width-1-3@m">
                        <div class="uk-position-relative" uk-slideshow="animation: fade">

                            <ul class="uk-slideshow-items">
                                <li>
                                    <img src="img/CreepDetector.png" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="img/RPi_Kismet_TFT.png" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="images/light.jpg" alt="" uk-cover>
                                </li>
                            </ul>
                        
                            <div class="uk-position-bottom-center uk-position-small">
                                <ul class="uk-thumbnav">
                                    <li uk-slideshow-item="0"><a href="#"><img src="img/CreepDetector.png" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="1"><a href="#"><img src="img/RPi_Kismet_TFT.png" width="100" alt=""></a></li>
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "../../footer.html";?>
    </div>
</body>

</html>