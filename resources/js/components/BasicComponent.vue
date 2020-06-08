<template>
<div class="container">
    <div class="row justify-content-center">
		<advance_task name="My first component call"></advance_task>
		<advance_task name="My second component call"></advance_task>
		<advance_task name="My third component call"></advance_task>
	</div>
</div>
</template>
<script>
    Vue.component('advance_task', require('./AdvanceComponent.vue').default);
    export default {
        mounted() {
            console.log('Test Component mounted.')
        }
    }
</script>