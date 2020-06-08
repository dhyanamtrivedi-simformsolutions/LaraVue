<template>
    <div class="container">
        <test-data></test-data>
    </div>
</template>

<script>
    Vue.component('test-data', require('./TestComponent.vue').default);
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
