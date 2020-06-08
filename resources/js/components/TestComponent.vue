<template>
<div class="container">
    <div class="row justify-content-center">
		<h3>Test component</h3>
		<button @click="count++">Click me count {{count}}</button>
	</div>
</div>
</template>
<script>
    export default {
        data(){
        	return{
        		count:0
        	}
        },
        mounted() {
            console.log('Test Component mounted.')
        }
    }
</script>