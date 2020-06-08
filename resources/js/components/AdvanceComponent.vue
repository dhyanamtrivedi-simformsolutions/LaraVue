<template>
<div class="container">
    <div class="row justify-content-center">
		<p>{{name}}</p>
	</div>
</div>
</template>
<script>
    export default {
    	//props:['name'],
    	props:{
    		name:{
    			type:String,
    			default:'default value',
    			required:true
    		}
    	},
        mounted() {
            console.log('Test Component mounted.')
        }
    }
</script>