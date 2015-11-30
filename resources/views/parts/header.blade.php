<header id="header">
    <span class="icon-logo logo"></span>

    <button class="c-hamburger c-hamburger--htx mobile" @click="toggleMenu" v-bind:class="{ 'is-active': menuIsActive }">
    <span>toggle menu</span>
    </button>
    <nav v-bind:class="{ 'is-active': menuIsActive }">
        <a href="{{ route('home') }}">Home</a>
        <a href="">People</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>