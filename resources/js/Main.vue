<template>
    <div class="py-4 container-md">
        <Nav />
        <main class="entry" id="main">
            <router-view />
        </main>
    </div>
</template>

<script>
import Nav from './components/Nav';

export default {
    components: {
        Nav,
    }
}
</script>

