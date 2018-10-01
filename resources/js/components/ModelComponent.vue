<template>
    <!-- The Modal -->
    <div class="modal fade" id="addUser">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Input New User Info</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" v-model="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" v-model="email" >
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="number" class="form-control" id="phone_number" v-model="phone_number" >
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script type="text/javascript" >
    export default {
        mounted() {
            console.log('Card Component')
        },
        data(){
            return{
                name:"",
                email:"",
                phone_number:""
            }
        }
    }
</script>

<style type="text/css" scoped>

</style>