<template id="instagram">
    <div class="items container">
        <div class="item"  v-for="item in items">
            <img v-bind:src="item.images.low_resolution.url" alt="1" />
            <div class="content">
                <p>@{{ item.caption.text }}</p>
            </div>
        </div>
    </div>
</template>