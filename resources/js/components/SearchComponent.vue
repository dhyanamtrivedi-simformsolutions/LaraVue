<template>
	<div class="container">
		<div>
			<label><b>Input Box</b></label>
			<input type="text" v-model="search" class="form-control" placeholder="Search...">
			<span>Your search value : {{ search }}</span>
		</div>
		<div>
			<label><b>Text Area</b></label>
			<textarea v-model="textArea" class="form-control"></textarea>
			<span>Your textarea value : {{ textArea }}</span>
		</div>
		<div>
			<label><b>Check Box</b></label>
			<div>
				<label class="checkbox-inline">
			    	<input type="checkbox" value="Option 1" v-model="checkedIndexs">Option 1
			    </label>
			    <label class="checkbox-inline">
			    	<input type="checkbox" value="Option 2" v-model="checkedIndexs">Option 2
			    </label>
			    <label class="checkbox-inline">
			   		<input type="checkbox" value="Option 3" v-model="checkedIndexs">Option 3
			    </label>
			</div>
			<span>Your cheked checkboxes: {{checkedIndexs}}</span>
		</div>
		<div>
			<label><b>Check Box</b></label>
			<div>
				<label class="radio-inline">
			    	<input type="radio" name="optradio" value="Option 1" v-model="redioIndexs">Option 1
			    </label>
			    <label class="radio-inline">
			    	<input type="radio" name="optradio" value="Option 2" v-model="redioIndexs">Option 2
			    </label>
			</div>
			<span>Your selected redio button: {{ redioIndexs }}</span>
		</div>
		<div >
			<label><b>Drop down</b></label>
			<div>
				<select class="form-control" v-model="dropdown">
			        <option value="Option 1">Option 1</option>
			        <option value="Option 2">Option 2</option>
			        <option value="Option 3">Option 3</option>
			      </select>
			</div>
			<span>Your selected dropdown: {{ dropdown }}</span>
		</div>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				search:'',
				textArea:'',
				checkedIndexs:[],
				redioIndexs:'',
				dropdown:''
			}
		},
		mounted() {
            console.log('Test Component mounted.')
        }
	}
</script>