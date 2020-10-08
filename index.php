<html>
<head>
    <title>Nikolas Malík</title> 
    <meta charset="UTF-8">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="Nikolas Malík">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="Script/script.js"></script>
    <link rel="stylesheet" href="Style/style1.css"> 
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
            <a href="me.php">O mně</a>
            <a class="contakt" href="#">Kontakt</a>
            <a href="#">Časté dotazy</a>
        </div>
        
    </nav>
    <div id="myDropdown" class="dropdown-content">
        <a href="#home">Ceník</a>
        <a href="me.php">O mně</a>
        <a href="#contact">Kontakt</a>
        <a class="portfolio-mobile" href="portfolio.php"><span>Reference</span></a>
    </div>
    <div class="overlay">
        <svg id="wave1" class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="wave1-path"fill="#0099ff" fill-opacity="1" d="M0,64L120,80C240,96,480,128,720,138.7C960,149,1200,139,1320,133.3L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <svg id="wave2" class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,224L60,224C120,224,240,224,360,192C480,160,600,96,720,80C840,64,960,96,1080,90.7C1200,85,1320,43,1380,21.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <svg id="wave3" class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff5500" fill-opacity="1" d="M0,224L60,224C120,224,240,224,360,192C480,160,600,96,720,80C840,64,960,96,1080,90.7C1200,85,1320,43,1380,21.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>
    <div class="index-content"> 
        <h1>Vytvářím webové stránky na míru!</h1>
        <div class="codinfox-sidebar-description sidebar-personal-info-section">
            Potřebujete 
            <div class="codinfox-changing-keywords" id="change">
                <strong>
                    <b class="hidden">e-shop?</b><br/>
                    <b class="hidden">firemní web?</b><br/>
                    <b class="hidden">osobní web?</b><br/>
                </strong>
            </div>
            <span id="green">Není problém!</b><br/>
        </div>
        <img src="" alt="">
        <div onclick="click()" id="btn" class="btn">Zjistit více</div>
    </div>
    <div class="purple" id="purple"></div>
    <div class="more">
        <div class="navigation" id="nav-scroll">
            <div onclick="nav1()">　Nabídka Služeb　</div>
            <div>　　Ceník　　</div>
            <div>　　Více　　</div>
            <div id="last">　　Více　　</div>
        </div>
        <svg id="wave4" class="wave4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L120,80C240,96,480,128,720,138.7C960,149,1200,139,1320,133.3L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <svg id="wave-move" class="wave5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#af00d6" fill-opacity="1" d="M0,64L120,80C240,96,480,128,720,138.7C960,149,1200,139,1320,133.3L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <div id="more" class="more-content">
            <div class="head" id="head">
                <h1>Nabídka služeb</h1>
                <p>Vyberte si služby, které potřebujete</p>
            </div>
            <div class="offer" id="offer">
                <div class="info">
                    <div class="basic">
                        Základ
                    </div>
                    <div class="add" id="add">
                        Za příplatek
                    </div>
                </div>
                <div class="text">
                    <div class="text1">
                        Tvorba webu
                    </div>
                        <div class="text2" id="text2" onmouseover="box2()" onmouseout="box2out()" onclick="box2click()">
                            Převedení na server (Hosting)
                        </div>
                    <div class="text3" id="text3" onmouseover="box3()" onmouseout="box3out()" onclick="box3click()">
                        Správa webu
                    </div>
                </div>
                <div class="content">
                    <div class="box1">
                        <div class="line1">
                            <span>Počet stránek (včetně hlavní): 1 +</span>
                            <span class="select">
                                <input maxlength="2" class="pages-count" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                            </span>
                        </div>
                        <div class="line2">
                            <span>Jaký typ webu?</span>
                            <span>
                                <div class="ss">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Statický</label><br>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Responsivní</label><br>
                                </div>
                            </span>
                        </div>
                        <div class="line3"></div>
                        <div class="line4">
                            <span>Použité jazyky:</span>
                            <span class="languages">
                                <img id="html" src="html.png" alt="" height="35px">
                                <img id="css" src="css.png" alt="" height="35px">
                                <img id="js" src="js2.png" alt="" height="35px">
                                <img id="php" src="php.png" alt="" height="35px" width="55px">
                            </span>
                        </div>
                    </div>
                    <div class="box2" id="box2" onmouseover="box3()" onmouseout="box3out()" onclick="box3click()">
                        <div class="line1">
                            wqewqw
                        </div>
                        <div class="line2">sad</div>
                        <div class="line3"></div>
                        <div class="line4"></div>
                        <div class="price-over" id="price-over1">+200,-- Kč</div>
                    </div>
                    <div class="box3" id="box3" onmouseover="box2()" onmouseout="box2out()" onclick="box2click()">
                        <div class="line1">
                            Vhodné, pokud nemáte žádné zkušenosti s FTP serverem.
                        </div>
                        <div class="line2">
                            Tento proces je nezbytný, pokud chcete aby Vaše webové stránky byly přístupné pro veřejnost.
                        </div>
                        <div class="line3">Zahrnuje i zakoupení vhodné domény po domluvě (např. vasweb.cz, vasweb.eu)</div>
                        <div class="line4"></div>
                        <div class="price-over" id="price-over2">+200,-- Kč</div>
                    </div>
                </div>
                <div class="summary">
                    <div class="total">
                        <span>Přibližná cena:</span><span id="price"> 499</span><span>,-- Kč</span>
                    </div>
                    <a href=""><div class="order">Přejít ke kontaktu</div></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function nav1(){
            var wave = document.getElementById("wave-move");
            var purple = document.getElementById("purple");
            wave.style.top = "900px";
            purple.style.top = "500px";
            wave.style.display = "block";
            sleep(2000).then(() => { wave.style.top = "-450px"; });
            sleep(2000).then(() => { purple.style.top = "-700px"; });
            sleep(2000).then(() => { wave.style.display = "none"; });
        };
        var x = 1;
        var y = 1;
        function box2(){
            var text2 = document.getElementById("text2");
            var box2 = document.getElementById("box3");
            box2.style.borderColor = "rgb(31, 156, 9)";
            box2.style.transition = ".7s";
            box2.style.opacity = "1";
            text2.style.transition = ".7s";
            text2.style.opacity = "1";
            text2.style.borderColor = "rgb(31, 156, 9)";
        };
        function box2click(){
            x += 1;
            if (x % 2 == 0) {
                hosting = 1;
                var overlay = document.getElementById("price-over2");
                var add = document.getElementById("add");
                add.style.opacity = "1";
                add.style.backgroundPosition = "left";
                var pric = document.getElementById("price");
                var price = document.getElementById("price").textContent;
                price = parseInt(price, 10);
                price = price + 200;
                price = " " + price.toString();
                document.getElementById("price").innerHTML = price;
                pric.style.color = "red";
                sleep(500).then(() => { pric.style.color = "white"; });
                overlay.style.color="white";
                overlay.style.top = "53%";
                overlay.style.backgroundColor = "rgb(31, 156, 9)";
            } else {
                if (y % 2 != 0) {
                    var overlay = document.getElementById("price-over2");
                    var pric = document.getElementById("price");
                    var price = document.getElementById("price").textContent;
                    price = parseInt(price, 10);
                    overlay.style.color="rgb(31, 156, 9)";
                    overlay.style.top = "0%";
                    overlay.style.backgroundColor="black";
                    price = price - 200;
                    price = " " + price.toString();
                    document.getElementById("price").innerHTML = price;
                    pric.style.color = "rgb(31, 156, 9)";
                    sleep(500).then(() => { pric.style.color = "white"; });
                    var add = document.getElementById("add");
                    add.style.opacity = ".4";
                    add.style.backgroundPosition = "center";
                } else {
                    var overlay = document.getElementById("price-over2");
                    overlay.style.color="rgb(31, 156, 9)";
                    overlay.style.top = "0%";
                    overlay.style.backgroundColor="black";
                    var pric = document.getElementById("price");
                    var price = document.getElementById("price").textContent;
                    price = parseInt(price, 10);
                    price = price - 200;
                    price = " " + price.toString();
                    document.getElementById("price").innerHTML = price;
                    pric.style.color = "rgb(31, 156, 9)";
                    sleep(500).then(() => { pric.style.color = "white"; });
                };
                    var text2 = document.getElementById("text2");
                    var box2 = document.getElementById("box3");
                    box2.style.borderColor = "black";
                    box2.style.opacity = ".4";
                    text2.style.opacity = ".4";
                    text2.style.borderColor = "black";
            }
        };

        function box2out(){
            if (x % 2 != 0) {
                var text2 = document.getElementById("text2");
                var box2 = document.getElementById("box3");
                box2.style.borderColor = "black";
                box2.style.opacity = ".4";
                text2.style.opacity = ".4";
                text2.style.borderColor = "black";
            };
        };
        function box3(){
            var text2 = document.getElementById("text3");
            var box2 = document.getElementById("box2");
            box2.style.borderColor = "rgb(31, 156, 9)";
            box2.style.transition = ".7s";
            box2.style.opacity = "1";
            text2.style.transition = ".7s";
            text2.style.opacity = "1";
            text2.style.borderColor = "rgb(31, 156, 9)";
        };
        function box3click(){
            y += 1;
            if (y % 2 == 0) {
                var overlay = document.getElementById("price-over1");
                var add = document.getElementById("add");
                add.style.opacity = "1";
                var pric = document.getElementById("price");
                var price = document.getElementById("price").textContent;
                overlay.style.color="white";
                overlay.style.top = "64%";
                overlay.style.backgroundColor="rgb(31, 156, 9)";
                price = parseInt(price, 10);
                price = price + 200;
                price = " " + price.toString();
                document.getElementById("price").innerHTML = price;
                pric.style.color = "red";
                sleep(500).then(() => { pric.style.color = "white"; });
                add.style.backgroundPosition = "right";
            } else {
                if (x % 2 != 0) {
                    var overlay = document.getElementById("price-over1");
                    var pric = document.getElementById("price");
                    var price = document.getElementById("price").textContent;
                    overlay.style.color="rgb(31, 156, 9)";
                    overlay.style.top = "0%";
                    overlay.style.backgroundColor="black";
                    price = parseInt(price, 10);
                    price = price - 200;
                    price = " " + price.toString();
                    document.getElementById("price").innerHTML = price;
                    pric.style.color = "rgb(31, 156, 9)";
                    sleep(500).then(() => { pric.style.color = "white"; });
                    var add = document.getElementById("add");
                    add.style.opacity = ".4";
                    add.style.backgroundPosition = "center";
                } else {
                    var overlay = document.getElementById("price-over1");
                    var pric = document.getElementById("price");
                    var price = document.getElementById("price").textContent;
                    overlay.style.color="rgb(31, 156, 9)";
                    overlay.style.top = "0%";
                    overlay.style.backgroundColor="black";
                    price = parseInt(price, 10);
                    price = price - 200;
                    price = " " + price.toString();
                    document.getElementById("price").innerHTML = price;
                    pric.style.color = "rgb(31, 156, 9)";
                    sleep(500).then(() => { pric.style.color = "white"; });
                };
                var text2 = document.getElementById("text3");
                var box2 = document.getElementById("box2");
                box2.style.borderColor = "black";
                box2.style.opacity = ".4";
                text2.style.opacity = ".4";
                text2.style.borderColor = "black";
            }
        };

        function box3out(){
            if (y % 2 != 0) {
                var text2 = document.getElementById("text3");
                var box2 = document.getElementById("box2");
                box2.style.borderColor = "black";
                box2.style.opacity = ".4";
                text2.style.opacity = ".4";
                text2.style.borderColor = "black";
            };
        };

        var something = document.getElementById("btn");
        something.onclick = function() {
            var elmnt = document.getElementById("nav-scroll");
            elmnt.scrollIntoView();
        };

        var text = document.getElementById("fweb");

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

        window.addEventListener('scroll', function() {
            var scrolled = window.scrollY;
            var wave1 = document.getElementById("wave1");
            var wave2 = document.getElementById("wave2");
            var wave3 = document.getElementById("wave3");
            var btn = document.getElementById("btn");
            if(scrolled < 99) {
                wave1.style.top = "55%";
                wave2.style.top = "5%";
                wave3.style.top = "-43%";
                btn.style.display = "block";
                btn.style.left = "47%";
                btn.style.opacity = "1";
            }
            if(scrolled > 99) {
                wave1.style.top = "57.5%";
                wave2.style.top = "10%";
                wave3.style.top = "-40%";
                btn.style.left = "47%"; 
                btn.style.opacity = "1";
            };
            if(scrolled > 199) {
                btn.style.left = "80%";
                btn.style.opacity = "0";
                wave1.style.top = "60%";
                wave2.style.top = "15%";
                wave3.style.top = "-38%";
            }
        });
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        var example = ['A', 'B', 'C', 'D'];

        textSequence(0);
        function textSequence(i) {

            if (example.length > i) {
                setTimeout(function() {
                    document.getElementById("sequence").innerHTML = example[i];
                    textSequence(++i);
                }, 2000); // 1 second (in milliseconds)

            } else if (example.length == i) { // Loop
                textSequence(0);
            }

        }
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }



        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>