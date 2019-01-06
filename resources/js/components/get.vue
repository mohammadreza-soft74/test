<template>

    <div  class="container">

        <div v-if="errors.length" class="container">

            <div v-for="error in errors" class="alert alert-success alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{error}}</strong>
            </div>
        </div>

        <div class="container">
            <div v-for="error in errors" class="alert alert-success alert-dismissible"  v-show='toggle' >
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>success</strong>data saved on database!
            </div>
        </div>



            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username" class="form-check-label">username</label>
                    <input type="text" v-model="username" name="username" id="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="password" class="form-check-label">password</label>
                    <input type="password" v-model="password" name="password" id="password" class="form-control">
                </div>
                <button type="button" v-on:click="add" class="btn btn-info btn-block">add</button>
            </div>

    </div>


</template>

<script>
    export default {

        data(){

            return{
                username:'',
                password:'',
                toggle:false,
                errors:[],



            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            add(event)
            {
                console.log(event);
                axios.get('./api/show',{
                    username:this.username,
                    password:this.password,
                }).then(function(response){
                    console.log(response);
                });
                this.toggle = !this.toggle
            },

        }
    }
</script>
