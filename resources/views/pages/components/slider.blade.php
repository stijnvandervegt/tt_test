<template id="slider">
    <div class="slider-container">
        <div class="homeSlider">
            <div class="slide">
                <div class="info">
                    <h3>Walibi</h3>
                    <a href="/walibi">View case</a>
                </div>
                <img src="{{asset('img/slider/Walibi.jpg')}}" alt="Walibi"/>
            </div>
            <div class="slide">
                <div class="info">
                    <h3>Oxxio</h3>
                    <a href="/oxxio">View case</a>
                </div>
                <img src="{{asset('img/slider/Oxxio.jpg')}}" alt="Oxxio"/>
            </div>
        </div>

        <div class="scroll-down-controls">
            <a class="scroll-down" @click="scrollDown('content-section')" href="#">
            <span class="icon-arrow-down-touch icon"></span>
            <span class="icon-mouse icon"></span>
            <span class="icon-arrow-down"></span>
            </a>

        </div>
    </div>
</template>