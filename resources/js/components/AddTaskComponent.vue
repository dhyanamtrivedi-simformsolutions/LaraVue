<template>
	<!-- The Modal -->
  	<div class="modal" id="myModal">
    	<div class="modal-dialog">
      		<div class="modal-content">
		        <!-- Modal Header -->
		        <div class="modal-header">
          			<h4 class="modal-title">Add New Record!</h4>
          			<button type="button" class="close" @click="clearModel" data-dismiss="modal">&times;</button>
        		</div>        
        		<!-- Modal body -->
        		<div class="modal-body">
        			<p class="alert alert-success" v-if="success.length > 0">{{ success }}</p>
        			<label for="name"></label>
          			<input type="text" class="form-control" name="name" id="name" v-model="record">
          			<ul v-if="errors.name" class="list-unstyled">
          				<li v-for="err of errors.name" class="alert alert-danger">{{err}}</li>
          			</ul>
        		</div>
        		<!-- Modal footer -->
        		<div class="modal-footer">
          			<button type="button" class="btn btn-danger" @click="clearModel" data-dismiss="modal">Close</button>
          			<button type="button" class="btn btn-primary" @click="addrecord">Save</button>
        		</div>        
      		</div>
    	</div>
  	</div>
</template>
<script type="text/javascript">
	export default{
		data(){
			return {
				success:'',
				errors:[],
				record:''
			}
		},
		methods:{
			addrecord(){
				axios.post("task-add",{
					'name':this.record,
				})
				.then(data => {
					this.$emit('recordAdded');
					this.success = "Record Added Successfully!";
					this.record ='';
				})
				.catch(error => this.errors = error.response.data.errors)
			},
			clearModel(){
				this.errors = [];
				this.record='';
				this.success='';
			}
		}
	}
</script>