<template>
    <h1 class="text-center mb-4">
        {{ heading }}
    </h1>
    <div class="text-center">
        <span class="d-block mb-2">Counter: {{ counter }}</span>
        <button class="btn btn-primary me-2" @click="increment">Increment</button>
        <button class="btn btn-primary" @click="reset">Reset</button>
    </div>

</template>

<script>
export default {
    data() {
        return {
            heading: 'Vue 3 in Laravel 8'
        }
    },
    computed: {
        counter() {
            return this.$store.state.counter;
        }
    },
    methods: {
        increment() {
            this.$store.commit('incrementCounter');
        },
        reset() {
            this.$store.commit('resetCounter');
        },
    }
}
</script>
