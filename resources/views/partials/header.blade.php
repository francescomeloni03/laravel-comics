
    <header>
        <div class="container-lg ">

            <div class="navbar">
                <div class="logoContainer">
                    <img class="headerLogo" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
                </div>
                <div class="linkHeader">
                  @foreach ($linkHeader as $link)
                  <div class="link">{{$link}}</div>
                  @endforeach
                </div>
            </div>
        </div>
        <div>
            <img class="imgHeader" src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
    </header>



<style scoped>
    header {
        height: 410px;
    }
    
    .navbar {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .headerLogo {
        height: 75px;
    }
    
    
    .linkHeader {
        height: 115px;
        line-height: 110px;
        display: flex;
        align-items: center;
    }
    
    div.link {
        margin: 0 10px;
        height: 115px;
        font-size: 14px;
        font-weight: 500;
        ;
    }
    
    .link:hover {
        color: #0282f9;
        border-bottom: 4px solid #0282f9;
    
    }

    .imgHeader {
    width: 100%;
    max-height: 280px;
    object-fit: cover;
    object-position: top;
}
    </style>