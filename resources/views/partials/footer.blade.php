<footer>


    <div class="topFooter">
        <div class="container-lg">
            <div class="boxColumn">
                <div class="col-6">
                    <div class="singleColumn">
                        <div class="col-3">
                            <p>DC COMICS</p>
                            <ul>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                            </ul>

                            <p>SHOP</p>
                            <ul>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <p>DC</p>
                            <ul>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy policy (New)</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <p>SITES</p>
                            <ul>
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="boxLogo col-6">
                    <img class="logoFooter" src={{ Vite::asset("resources/img/dc-logo-bg.png")}} alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="bottomFooter">
        <div class="container-lg containerFooter">
            <div>
                <button class="buttonSignUp">SIGN-UP NOW!</button>
            </div>
            <div class="boxRight">
                <h4 class="fontFollowUs">
                    <a href="">FOLLOW US</a>
                </h4>
                <img class="marginImg" src={{ Vite::asset("resources/img/footer-facebook.png")}} alt="">
                <img class="marginImg" src={{ Vite::asset("resources/img/footer-twitter.png")}} alt="">
                <img class="marginImg" src={{ Vite::asset("resources/img/footer-youtube.png")}} alt="">
                <img class="marginImg" src={{ Vite::asset("resources/img/footer-pinterest.png")}} alt="">
                <img class="marginImg" src={{ Vite::asset("resources/img/footer-periscope.png")}} alt="">


            </div>

        </div>
    </div>




</footer>



<style>
   
    
    
    
    
    .topFooter {
        width: 100%;
        height: 400px;
        background-image: url({{ Vite::asset("resources/img/footer-bg.jpg")}});   
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    
    .boxColumn {
        flex-direction: row;
        justify-content: space-evenly;
        display: flex;
    
    }
    
    .singleColumn {
        flex-direction: row;
        display: flex;
        padding-top: 30px;
    }
    
    .col-3 p {
        color: white;
        font-size: 19px;
    }
    
    .col5 {
        min-height: 100%;
    }
    
    
    .boxLogo {
        position: relative;
    }
    
    .logoFooter {
        position: absolute;
        top: -25%;
    }
    
    ul {
        list-style-type: none;
        padding-left: 0;
    }
    
    li {
        color: grey;
        font-size: 15px;
        margin-bottom: 2px;
    }

    li a {
        text-decoration: none;
        color: grey;
    }
    
    a:hover {
        color: white;
    }






    h4>a {
    font-weight: bold;
    text-decoration: none;
}

.containerFooter {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

button:hover {
    background-color: black;
}

.bottomFooter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 110px;
    background-color: #303030;
    position: absolute;
}

.buttonSignUp {
    color: white;
    padding: 10px;
    background-color: #303030;
    border: 2px solid #0282f9;;
    font-size: 20px;
}

.fontFollowUs {
    margin-top: 10px;
}

.boxRight {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.marginImg {
    margin-left: 10px;
}
    </style>
    