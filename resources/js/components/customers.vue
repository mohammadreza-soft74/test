<template>
<div>

    <form action="" v-on:submit.prevent="createCustomer">

    <div class="form-group">

        <input type="text" class="form-control" v-model="uname">
    </div>
    <div class="form-group">

        <input type="text" class="form-control" v-model="uemail">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary"  value="Create New Customer">
    </div>
    </form>
    <table class="table table-dark table-hover table-bordered">
        <thead>
            <tr>
                    <th>name</th>
                    <th>email</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="customer in customers">
                <td>
                    <input type="text" class="form-control" v-if="edit">
                    <span v-else>{{customer.name}}</span>
                </td>
                <td>{{customer.email}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-xs" v-if="!edit" v-on:click="">edit</button>
                    <button type="button" class="btn btn-danger btn-xs" v-if="!edit">Delete</button>

                </td>

            </tr>
        </tbody>
    </table>
</div>

</template>

<script>

    export default {

        components:{},
        data()
        {
            return{

                uname: '',
                uemail:'',
                customers:[],
                edit:false,
            }
        },

        created(){
            this.fetchCustomers();
        },
        methods:{
            fetchCustomers(){
                axios.get("customer").then(response=>{this.customers = response.data.customers});
                console.log("fetch");
            },
            createCustomer(){
                console.log("create function");


                axios.post('customer', {

                    name: this.uname,
                    email: this.uemail,

                    })
                .catch(function (error) {
                    console.log(error.response);
                }).then(this.fetchCustomers());


            }
        }
    }
</script>
