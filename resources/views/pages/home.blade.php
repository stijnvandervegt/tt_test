@extends('layout.default')

@section('body')

    <router-view></router-view>

    @include('pages.components.contactform')
    @include('pages.components.instagram')
    @include('pages.components.slider')

    <template id="contactpage">
        <div class="contact-container">
            <h1 class="center">
                We would love to<br/> hear from you
            </h1>
            <contactform/>
        </div>
    </template>

    <template id="homepage">

        <slider></slider>

        <section class="content-section">
            <div class="container">
                <h1>We Are Tam Tam</h1>

                <p>Tam Tam is a full service digital agency focusing on Dutch Digital Service Design. We combine
                    strategy, design, technology and interaction to make the digital interactions between company and
                    customer valuable and memorable. We work for awesome brands with a team of 120 digitals from our
                    office in Amsterdam. Making great work and having a blast doing it. That’s what we believe in.</p>
            </div>
        </section>
        <section class="instagram">
            <h2>Follow us on instagram</h2>

            <h3>@tamtamnl</h3>

            <instagram></instagram>


        </section>
    </template>



@stop