<head>
    <title>Portfolio</title> 
    <meta charset="UTF-8">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="Nikolas Malík">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="Script/script.js"></script>
    <link rel="stylesheet" href="Style/port.css"> 
</head> 
<body>
    <div id="header" class="header">
        <h1 class="ml12">Portfolio</h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <a href="./"><img onmouseover="arrow()" onmouseout="arrowout()" id="arrow" class="arrow"src="arrow.png" alt=""></a>
        <span id="back" class="back">zpět</span>
    </div>
    <div class="content">
        <div class="box">
            <div class="line1">
                <a class="a1" href="">
                    <div onmouseover="hov1()" onmouseout="hov1out()" id="item1" class="line1-item1">
                        <div id="hov1" class="line1-hover1">
                            SiteX
                            <span>Stránka nabízející online služby</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div id="item2" class="line1-item2">
                        <div id="hov2" class="line1-hover2">

                        </div>
                    </div>
                </a>
                <a href="">
                    <div id="item3" class="line1-item3">
                        <div id="hov3" class="line1-hover3">

                        </div>
                    </div>
                </a>
            </div>
            <div class="line2">
                <a href=""><div id="item4" class="line2-item1"><div id="hov4" class="line2-hover1"></div></div></a>
                <a href=""><div id="item5" class="line2-item2"><div id="hov5" class="line2-hover2"></div></div></a>
                <a href=""><div id="item6" class="line2-item3"><div id="hov6" class="line2-hover3"></div></div></a>
            </div>
            <div class="line3">
                <a href=""><div id="item7" class="line3-item1"><div id="hov7" class="line3-hover1"></div></div></a>
                <a href=""><div id="item8" class="line3-item2"><div id="hov8" class="line3-hover2"></div></div></a>
                <a href=""><div id="item9" class="line3-item3"><div id="hov9" class="line3-hover3"></div></div></a>
            </div>
        </div>
    </div>
    <script>
        function hov1(){
            var hov1 = document.getElementById("hov1");
            var item1 = document.getElementById("item1");
            hov1.style.opacity = ".7";
            item1.style.backgroundSize = "140%";
        };

        function hov1out(){
            var hov1 = document.getElementById("hov1");
            var item1 = document.getElementById("item1");
            hov1.style.opacity = "0";
            item1.style.backgroundSize = "134%";
        };
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml12');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
        .add({
            targets: '.ml12 .letter',
            translateX: [40,0],
            translateZ: 0,
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 1200,
            delay: (el, i) => 500 + 30 * i
        })
        window.addEventListener('scroll', function() {
            var scrolled = window.scrollY;
            var wave1 = document.getElementById("wave1");
            var wave2 = document.getElementById("wave2");
            var wave3 = document.getElementById("wave3");
            var btn = document.getElementById("btn");
            if(scrolled == 0) {
                var textWrapper = document.querySelector('.ml12');
                var arrow = document.getElementById('arrow');
                textWrapper.style.opacity = "1";
                arrow.style.opacity = "1";
                arrow.style.transition = "2s";
                arrow.style.left = "0%";
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({loop: false})
                .add({
                    targets: '.ml12 .letter',
                    translateX: [40,0],
                    translateZ: 0,
                    opacity: [0,1],
                    easing: "easeOutExpo",
                    duration: 1200,
                    delay: (el, i) => 500 + 30 * i
                })
            } 
            if(scrolled > 99) {
                var textWrapper = document.querySelector('.ml12');
                var arrow = document.getElementById('arrow');
                textWrapper.style.opacity = "0";
                arrow.style.opacity = "0";
                arrow.style.left = "1%";
                arrow.style.transition = "2s";
            };
        });
        function arrow(){
            var arrow = document.getElementById('arrow');
            var back = document.getElementById('back');
            back.style.opacity = "1";
            back.style.left = "3.8%";
            arrow.style.borderStyle = "solid";
            arrow.style.borderColor = "white";
            arrow.style.backgroundColor = "white";
            arrow.style.borderRadius = "50% 50%";
            back.style.transition = ".5s";
            arrow.style.transition = ".2s";
        };

        function arrowout(){
            var arrow = document.getElementById('arrow');
            var back = document.getElementById('back');
            back.style.opacity = "0";
            back.style.left = "4.4%";
            back.style.transition = ".2s";
            arrow.style.backgroundColor = "transparent";
            arrow.style.borderStyle = "none";
            arrow.style.borderColor = "transparent";
            arrow.style.borderRadius = "0";
            arrow.style.transition = ".2s";
        };
    </script>
</body>