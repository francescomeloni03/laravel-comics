@extends('layouts.app')

@section('content')


<div class="main">

    <div class="boxCurrent">
        CURRENT SERIES
    </div>
    <div class="boxComics">
        @foreach ($comics as $comic)
        <div>
            <div class="boxComic">
                <img class="comicImg" src="{{ $comic['thumb'] }}" alt="">
                <!-- Dinamicamente scriviamo le "series" con aggiunta di "toUpperCase" (Modifica la stringa in MAIUSCOLO) -->
                <p class="textBoxComic">{{ $comic['series'] }}</p>
            </div>
        </div>
        @endforeach
       
    </div>
    <div class="buttonMain">
        <button class="textButton">LOAD MORE</button>
    </div>

</div>


<div class="linkMain">
    @foreach ($icons as $icon)
    <div class="imgbox">
        <img class="img" src="{{ Vite::asset( $icon['img']) }}">
        <a>{{ $icon['dscrpt'] }}</a>
    </div>
    @endforeach
    
</div>


@endsection




<style lang="scss">
    @use "../app.scss" as *;
    
    .main {
        width: 100%;
        background-color: #1c1c1c;
        padding: 50px;
    }
    
    .boxCurrent {
        width: 250px;
        background-color: #0282f9;
        position: absolute;
        margin-top: -75px;
        font-size: 28px;
        color: white;
        display: flex;
        justify-content: center;
        padding: 7px;
    }
    
    .textButton {
        background-color: #0282f9;
        color: white;
        margin-top: 60px;
        padding-left: 50px;
        padding-right: 50px;
        border: none;
        border-radius: 2px;
        height: 40px;
    }
   
    .boxComics {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    
    .boxComic {
        width: 180px;
        height: 240px;
        margin-top: 2em;
        margin-left: 1em;
    }
    
    .comicImg {
        width: 100%;
        height: 190px;
        object-fit: cover;
        object-position: top;
    }
    
    .textBoxComic {
        color: white;
        margin-top: 10px;
    }
    
    
    .buttonMain {
        width: fit-content;
        margin: auto;
    }





.linkMain {
    display: flex;
    justify-content: center;
    width: 100%;
    height: 150px;
    background-color: #0282f9;
    position: relative;
    z-index: 2;
}

.imgbox {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 230px;
    font-size: 15px;
    color: white;
}

.img {
    height: 60px;
    padding-right: 15px;
    color: white;
}
</style>
    