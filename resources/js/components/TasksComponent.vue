<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>All Todo Tasks</h4>
                        <span class="pull-right"><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Add Task</button></span>
                    </div>
                    <input class="form-control pull-right" v-model="search_val" placeholder="Search by task name" 
                        @keyup="search_data" type="text" name="search">
                    <div class="card-body">
                        <p class="alert alert-success" v-if="deleteRec.length > 0">{{ deleteRec }}</p>
                        <ul v-if="errors" class="list-unstyled">
                            <li v-for="err of errors" class="alert alert-danger">{{err}}</li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="task in tasks.data">{{task.id}} - {{task.name}} 
                                <span class="pull-right">
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#updateModal" @click="getRecord(task.id)">Edit</button> | 
                                    <button data-toggle="modal" data-target="#previewModal" 
                                    @click="getRecord(task.id)" class="btn btn-info btn-xs">Preview</button> | 
                                    <button class="btn btn-danger btn-xs" @click="deleteRecord(task.id)">Delete</button>
                                </span>
                            </li>
                        </ul>
                        <pagination :data="tasks" @pagination-change-page="getResults"></pagination>
                    </div>
                </div>
            </div>
        </div>
        <div id="model">
            <add_task @recordAdded="getResults"></add_task>
            <edit_task :editData="editRec" @recordUpdated="getResults"></edit_task>
            <preview_task :previewData="editRec"></preview_task>
        </div>
    </div>
</template>

<script>
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('add_task', require('./AddTaskComponent.vue').default);
Vue.component('edit_task', require('./EditTaskComponent.vue').default);
Vue.component('preview_task', require('./PreviewTaskComponent.vue').default);
    export default {
        data(){
            return{
                tasks:{},
                editRec:{},
                deleteRec:'',
                errors:[],
                search_val:''
            }
        },
        methods:{
            // Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('http://127.0.0.1:8000/task-list?page=' + page)
                    .then(response => this.tasks = response.data)
                    .catch(error => console.log(error));
            },
            getRecord(id){
                axios.get('http://127.0.0.1:8000/task-edit/'+id)
                    .then(response => this.editRec = response.data)
                    .catch(error => this.errors = error.response.data.errors);  
            },
            deleteRecord(id){
                const reply = confirm("Are you sure, you want to delete this record?");
                if(reply){
                    axios.delete('http://127.0.0.1:8000/task-delete/'+id)
                    .then(response => this.deleteRec = "Record deleted successfully")
                    .catch(error => this.errors = error.response.data.errors);
                    this.getResults();
                }else{
                    return;
                }
            },
            search_data(){
                axios.get("http://127.0.0.1:8000/task-list/"+this.search_val)
                    .then(response => this.tasks =response.data)
                    .catch(error => console.log(error));
            }
        },
        created() {
            axios.get('http://127.0.0.1:8000/task-list')
            .then((response) => this.tasks = response.data )
            .catch((error)=> console.log(error));
            console.log('Task component.');
        }
    }
</script>
<style type="text/css">
    .pull-right{
        float: right;
    }
</style>