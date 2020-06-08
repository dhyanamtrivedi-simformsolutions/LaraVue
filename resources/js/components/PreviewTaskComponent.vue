<template>
  <!-- The Modal -->
    <div class="modal" id="previewModal">
      <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Preview Record!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>        
            <!-- Modal body -->
            <div class="modal-body">
              <label for="name"></label>
                <input type="text" class="form-control" name="name" id="name" v-model="previewData.name">
            </div>        
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>        
          </div>
      </div>
    </div>
</template>
<script type="text/javascript">
  export default{
    props:['previewData'],
  }
</script>