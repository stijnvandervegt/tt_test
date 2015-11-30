<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,600,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body class="contact">
        <header id="header">
            <span class="icon-logo logo"></span>

            <button class="c-hamburger c-hamburger--htx mobile" @click="toggleMenu" v-bind:class="{ 'is-active': menuIsActive }">
                <span>toggle menu</span>
            </button>
            <nav v-bind:class="{ 'is-active': menuIsActive }">
                <a href="">Home</a>
                <a href="">People</a>
                <a href="">Contact</a>
            </nav>
        </header>
        <div class="contact-container" >
            <h1 class="center">
                We would love to<br/> hear from you
            </h1>
            <div id="contactForm">

                <validator name="validation">
                    <div class="global-message" v-if="formSent">
                        <span class="icon-check-icon icon"></span>
                        Thank you, we have received your message.
                    </div>
                    <form action="" novalidate @submit.prevent="sendForm" v-else>
                        <div class="global-message" v-show="globalError">
                            <span class="icon-error icon"></span> Please complete the form and try again.
                        </div>
                        <section class="form">
                            <div class="input-group">
                                <input type="text" name="firstname" placeholder="First name" v-model="firstname" v-validate:firstname.required>
                                <span class="icon-check-icon success" v-show="success($validation, 'firstname')"></span>
                                <span class="error error-firstname" v-show="validate($validation, 'firstname')">We need your first name</span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="lastname" placeholder="Last name" v-model="lastname" v-validate:lastname.required>
                                <span class="icon-check-icon success" v-show="success($validation, 'lastname')"></span>
                                <span class="error error-lastname" v-show="validate($validation, 'lastname')">We need your last name</span>
                            </div>
                            <div class="input-group">
                                <input type="email" name="email"v-model="email" placeholder="Your e-mail address"  v-validate:email.required.email>
                                <span class="icon-check-icon success" v-show="success($validation, 'email')"></span>
                                <span class="error error-email" v-show="validate($validation, 'email')">We need your e-mail address</span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="phone" v-model="phone" placeholder="Your phone number (optional)">
                                <span class="icon-check-icon success" v-show="success($validation, 'phone')"></span>
                            </div>
                            <div class="input-group full">
                                <textarea name="message" v-model="message" placeholder="Your message..."  v-validate:message.required></textarea>
                                <span class="icon-check-icon success" v-show="success($validation, 'message')"></span>
                                <span class="error error-message" v-show="validate($validation, 'message')">Sorry, your message can't be empty</span>
                            </div>
                        </section>
                        <button type="submit" name="send" class="btn contact">Send</button>
                    </form>
                </validator>
            </div>
        </div>



        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
