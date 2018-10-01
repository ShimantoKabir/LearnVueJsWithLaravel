<template>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Learn Vue js</h1>
                <p>{{ vueName }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis eius eos esse eum fuga labore magni minus molestias, mollitia optio praesentium quidem quo reiciendis repudiandae tempora veniam, vitae voluptatum.</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kabir</td>
                        <td>Kabir3483@gmail.com</td>
                        <td>01751117995</td>
                        <td><button type="button" class="btn btn-success">Edit</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                        <td><button type="button" class="btn btn-dark">Show</button></td>
                    </tr>
                </tbody>
            </table>
            <model-component></model-component>
        </div>
    </div>
</template>

<script type="text/javascript">
    const  ModelComponent  = Vue.component('model-component', require('./ModelComponent.vue'));
    export default {
        mounted() {
            console.log('Table Component')
        },
        data(){
            return{
                vueName : "This route contain table component"
            }
        }
    }
</script>

<style type="text/css" scoped>
    h1{
        color: blueviolet;
    }
</style>
