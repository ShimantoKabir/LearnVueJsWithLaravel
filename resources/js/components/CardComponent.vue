<template>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>Learn Vue js</h1>
                <p>{{ vueName }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda consectetur cumque doloremque est ex labore nesciunt nisi, obcaecati odit optio perspiciatis placeat quod ratione rem repellat sint totam veritatis!</p>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Card Component')
        },
        data(){
            return{
                vueName:"This router contain card component"
            }
        }
    }
</script>

<style type="text/css" scoped>
    h1{
        color: darkolivegreen;
    }
</style>