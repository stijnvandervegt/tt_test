<header id="header">
    <span class="icon-logo logo"></span>

    <button class="c-hamburger c-hamburger--htx mobile" @click="toggleMenu(menuIsActive)" v-bind:class="{ 'is-active': menuIsActive }">
    <span>toggle menu</span>
    </button>
    <nav v-bind:class="{ 'is-active': menuIsActive }">
        <a v-link="{ name: 'home', exact: true }">Home</a>
        <a >People</a>
        <a v-link="{ name: 'contact' }">Contact</a>
    </nav>
</header>