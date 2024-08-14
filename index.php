<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Prodavnica Aleksandar</title>
</head>

<body>
    <nav id="nav">
        <h1>Aleksandrova Prodavnica</h1>
        <div class="navTop">
            <div class="navItem">    
            </div>
            </div>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">AIR FORCE</h3>
            <h3 class="menuItem">JORDAN</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">HIPPIE</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/air.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR FORCE</br>NOVA</br> SEZONA</h1>
                <h2 class="sliderPrice">11.099rsd</h2>
                <a href="#product">
                    <button class="buyButton">KUPI SAD!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/jordan.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NOVA</br> KOLEKCIJA</h1>
                <h2 class="sliderPrice">13.666rsd</h2>
                <a href="#product">
                    <button class="buyButton">KUPI SAD!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/blazer.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NOVA</br> KOLEKCIJA</h1>
                <h2 class="sliderPrice">10.252rsd</h2>
                <a href="#product">
                    <button class="buyButton">KUPI SAD!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/crater.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">15.000rsd</h2>
                <a href="#product">
                    <button class="buyButton">KUPI SAD!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/hippie.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NOVA</br> KOLEKCIJA</h1>
                <h2 class="sliderPrice">9.599rsd</h2>
                <a href="#product">
                    <button class="buyButton">KUPI SAD!</button>
                </a>
            </div>
        </div>
    </div>
   
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">Besplatna isporuka</span>
            <span class="featureDesc">Besplatna poštarina preko 5.000rsd.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 dana povraćaj</span>
            <span class="featureDesc">Mogućnost zamene robe i vraćanje novca.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">Pokon kartica</span>
            <span class="featureDesc">Mogućnost kupovine poklon kartice.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">KONTAKT!</span>
            <span class="featureDesc">Kontaktirajte nas putem maila.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/air.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">AIR FORCE</h1>
            <h2 class="productPrice">11.099</h2>
            <p class="productDesc">Udobne patike za svaki dan.</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">KUPI SAD!</button>
        </div>
        <div class="payment">
            <h1 class="payTitle">Lične informacije</h1>
            <label>Ime i Prezime</label>
            <input type="text" placeholder="Aleksandar Mihajlović" class="payInput">
            <label>Beoj Telefona</label>
            <input type="text" placeholder="065 554 785" class="payInput">
            <label>Adresa</label>
            <input type="text" placeholder="Branka Radičevića 9" class="payInput">
            <h1 class="payTitle">Informacije sa kartice</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Broj karice">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton">Pregled</button>
            <span class="close">X</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle"></h1>
            <img src="https://www.361usa.com/cdn/shop/files/1_4_f3e43426-ed4e-4760-a01d-ce6d0ac5a6ca.jpg?v=1711698775"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://www.361usa.com/cdn/shop/files/Big-3-Future1080x1080.png?v=1719989686&width=700"
                alt="" class="galleryImg">
            <h1 class="galleryTitle"></h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle"></h1>
            <img src="https://www.361usa.com/cdn/shop/files/1_2_220e3e2f-1e6c-4942-a09b-a1c9e7fbcd9f.jpg?v=1719989864&width=2000"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        
                
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">Ako želite da dobijate promocije o novim proizbodima možete da se prijavite pomoću vaše Mail adrese.</h3>
            <a href="index2.php">
                <button class="nsButton">Izaberi svoj stil i prijavi se!</button>
            </a>
        </div>
        
        
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">O Nama</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Korisni linkvi</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Proizvodi</h1>
                <ul class="fList">
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Pretplati se</h1>
                <div class="fMail">
                    <input type="text" placeholder="Unesite vašu Mail adresu" class="fInput">
                    <button class="fButton">Pretplata</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">PRATITE NAS</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">aleksandarKg97@gmail.com</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>

</html>