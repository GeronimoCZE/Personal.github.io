<html>
<head>
    <title>Nikolas Malík</title> 
    <meta charset="UTF-8">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="Nikolas Malík">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="Script/script.js"></script>
    <link rel="stylesheet" href="Style/mee.css"> 
</head>
<body>
    <nav>
        <div class="left"> 
            <a class="portfolio" href="portfolio.php">Reference</a>
            <a class="" href="#"></a>
        </div>
        <div class="mid"> 
            <div class="layer">
                <a onmouseover="nameHover()" onmouseout="nameOut()" id="name" href="./">Nikolas Malík</a>
                <span class="name"><a href="./">Nikolas Malík</a></span>
            </div>
            <span id="name-hover">Full Stack Web Developer</span>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">☰</button>
            </div>
        </div>
        <div class="right"> 
            <a class="active" href="#">O mně</a>
            <a class="contakt" href="#">Kontakt</a>
            <a href="#">Časté dotazy</a>
        </div>
    </nav>
    <div id="myDropdown" class="dropdown-content">
        <a href="#home">Ceník</a>
        <a href="#about" class="actif">O mně</a>
        <a href="#contact">Kontakt</a>
        <a class="portfolio-mobile" href="portfolio.php"><span>Reference</span></a>
    </div>
    <div class="me-content">
        <div class="head">
            <h1 class="ml12">Nikolas Malík</h1>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        </div>
        <div class="desc">
            <span class="desc-text" id="1" onclick="first()">O mně</span>
            <span class="none" id="2">┃</span>
            <span class="desc-text" id="3" onclick="second()">Životopis</span>
            <span class="none" id="4">┃</span>
            <span class="desc-text" id="5" onclick="third()">Programování</span>
            <span class="none" id="6">┃</span>
            <span class="desc-text" id="7" onclick="fourth()">Steam Trading</span>
        </div>
        <div class="content" id="content">
            <div class="back" id="back">
                <div class="heading" id="head">
                </div>
                <div class="text" id="text">
                </div>
            </div>
        </div>
    </div>

    <script>
        console.log(window.innerWidth);
        var x = 0;
            whoHead = "Kdo jsem?"
            whoText = "Hned na úvod mi dovolte se Vám představit. \n Jsem 18-ti letý nadšenec do tvorby webů a programování. "
            back = document.getElementById("back");
            content = document.getElementById("content");
            head = document.getElementById("head");
            text = document.getElementById("text");
            cvHead = "2"
            cvText = "2"
            progHead = "3"
            progText = "3"
            tradeHead = "4"
            tradeText = "4"
            p1 = document.getElementById("1");
            s1 = document.getElementById("2");
            p2 = document.getElementById("3");
            s2 = document.getElementById("4");
            p3 = document.getElementById("5");
            s3 = document.getElementById("6");
            p4 = document.getElementById("7");
        function first(){
            sleep(800).then(() => { x = 1; });
            if (x==1){
                x = 1
            } else {
                y = 1;
                head.style.opacity = "0";
                if (x == 1){
                    p1.style.color = "rgb(155, 152, 152)";
                }
                if (x == 0){
                    p1.style.color = "rgb(155, 152, 152)";
                }
                if (x == 2){
                    p1.style.color = "rgb(155, 152, 152)";
                    p2.style.color = "black"
                }
                if (x == 3){
                    p1.style.color = "rgb(155, 152, 152)";
                    p3.style.color = "black"
                }
                if (x == 4){
                    p1.style.color = "rgb(155, 152, 152)";
                    p4.style.color = "black"
                }
                head.style.left = "3%";
                text.style.opacity = "0";
                text.style.left = "3%";
                content.style.top = "0";
                content.style.transition = "1s";
                sleep(500).then(() => { head.innerText = whoHead; });
                sleep(500).then(() => { text.innerText = whoText; });
                sleep(700).then(() => { head.style.opacity = "1"; });
                sleep(700).then(() => { head.style.left = "0"; });
                sleep(700).then(() => { text.style.opacity = "1"; });
                sleep(700).then(() => { text.style.left = "0"; });
            }
        };
        function second(){
            sleep(800).then(() => { x = 2; });
            if (x==2){
                x = 2
            } else {
                y = 1;
                if (x == 1){
                    p1.style.color = "black";
                    p2.style.color = "rgb(155, 152, 152)"
                }
                if (x == 0){
                    p2.style.color = "rgb(155, 152, 152)"
                }
                if (x == 2){
                    p2.style.color = "rgb(155, 152, 152)"
                }
                if (x == 3){
                    p2.style.color = "rgb(155, 152, 152)";
                    p3.style.color = "black"
                }
                if (x == 4){
                    p2.style.color = "rgb(155, 152, 152)";
                    p4.style.color = "black"
                }
                head.style.opacity = "0";
                head.style.left = "3%";
                text.style.opacity = "0";
                text.style.left = "3%";
                content.style.top = "0";
                content.style.transition = "1s";
                sleep(500).then(() => { head.innerText = cvHead; });
                sleep(500).then(() => { text.innerText = cvText; });
                sleep(700).then(() => { head.style.opacity = "1"; });
                sleep(700).then(() => { head.style.left = "0"; });
                sleep(700).then(() => { text.style.opacity = "1"; });
                sleep(700).then(() => { text.style.left = "0"; });
            }
        };
        function third(){
            sleep(800).then(() => { x = 3; });
            if (x==3){
                x = 3
            } else {
                y = 1;
                if (x == 1){
                    p1.style.color = "black";
                    p3.style.color = "rgb(155, 152, 152)"
                }
                if (x == 0){
                    p3.style.color = "rgb(155, 152, 152)"
                }
                if (x == 2){
                    p2.style.color = "black";
                    p3.style.color = "rgb(155, 152, 152)"
                }
                if (x == 3){
                    p3.style.color = "rgb(155, 152, 152)"
                }
                if (x == 4){
                    p3.style.color = "rgb(155, 152, 152)";
                    p4.style.color = "black"
                }
                head.style.opacity = "0";
                head.style.left = "3%";
                text.style.opacity = "0";
                text.style.left = "3%";
                content.style.top = "0";
                content.style.transition = "1s";
                sleep(500).then(() => { head.innerText = progHead; });
                sleep(500).then(() => { text.innerText = progText; });
                sleep(700).then(() => { head.style.opacity = "1"; });
                sleep(700).then(() => { head.style.left = "0"; });
                sleep(700).then(() => { text.style.opacity = "1"; });
                sleep(700).then(() => { text.style.left = "0"; });
            }
        };
        function fourth(){
            sleep(800).then(() => { x = 4; });
            if (x==4){
                x = 4
            } else {
                y = 1;
                if (x == 1){
                    p1.style.color = "black";
                    p4.style.color = "rgb(155, 152, 152)"
                }
                if (x == 0){
                    p4.style.color = "rgb(155, 152, 152)"
                }
                if (x == 2){
                    p2.style.color = "black";
                    p4.style.color = "rgb(155, 152, 152)"
                }
                if (x == 3){
                    p3.style.color = "black";
                    p4.style.color = "rgb(155, 152, 152)"
                }
                if (x == 4){
                    p3.style.color = "black";
                    p4.style.color = "rgb(155, 152, 152)"
                }
                head.style.opacity = "0";
                head.style.left = "3%";
                text.style.opacity = "0";
                text.style.left = "3%";
                content.style.top = "0";
                content.style.transition = "1s";
                sleep(500).then(() => { head.innerText = tradeHead; });
                sleep(500).then(() => { text.innerText = tradeText; });
                sleep(700).then(() => { head.style.opacity = "1"; });
                sleep(700).then(() => { head.style.left = "0"; });
                sleep(700).then(() => { text.style.opacity = "1"; });
                sleep(700).then(() => { text.style.left = "0"; });
            }
        };



        function load(){
            sleep(2000).then(() => { 
                p1.style.opacity = "1"; 
                p1.style.top = "0px"; 
            });
            sleep(2500).then(() => { 
                s1.style.opacity = "1"; 
                s1.style.top = "0px"; 
            });
            sleep(3000).then(() => { 
                p2.style.opacity = "1"; 
                p2.style.top = "0px"; 
            });
            sleep(3500).then(() => { 
                s2.style.opacity = "1"; 
                s2.style.top = "0px"; 
            });
            sleep(4000).then(() => { 
                p3.style.opacity = "1"; 
                p3.style.top = "0px"; 
            });
            sleep(4500).then(() => { 
                s3.style.opacity = "1"; 
                s3.style.top = "0px"; 
            });
            sleep(5000).then(() => { 
                p4.style.opacity = "1"; 
                p4.style.top = "0px"; 
            });
            sleep(5600).then(() => { 
                p1.style.transition = ".5s";
                p2.style.transition = ".5s";
                p3.style.transition = ".5s";
                p4.style.transition = ".5s"; 
            });
        }
        var y = 0;
        window.addEventListener('scroll', function() {
            var scrolled = window.scrollY;
            var content = document.getElementById("content");
                head = document.getElementById("head");
                text = document.getElementById("text");
            if(scrolled > 0) {
                if (y == 0) {
                    x = 1;
                    content.style.opacity = "1";
                    content.style.top = "0";
                    head.style.opacity = "0";
                    head.style.left = "3%";
                    text.style.opacity = "0";
                    text.style.left = "3%";
                    y = 1;
                    sleep(700).then(() => { head.innerText = whoHead; });
                    sleep(700).then(() => { text.innerText = whoText; });
                    sleep(1000).then(() => { head.style.opacity = "1"; });
                    sleep(1000).then(() => { head.style.left = "0"; });
                    sleep(1000).then(() => { text.style.opacity = "1"; });
                    sleep(1000).then(() => { text.style.left = "0"; });
                };
            }
        });
        load();
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
            duration: 2000,
            delay: (el, i) => 500 + 30 * i
        })

        function nameHover(){
            var hint = document.getElementById("name-hover");
            var name = document.getElementById("name");
            hint.style.top = "-6px";
            name.style.top = "10px";
            name.style.fontSize = "45px";
        };

        function nameOut(){
            var hint = document.getElementById("name-hover");
            var name = document.getElementById("name");
            hint.style.top = "-24px";
            name.style.fontSize = "50px";
            name.style.top = "20px";
        };
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    </script>
</body>