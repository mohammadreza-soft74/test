<template>


<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <input type="text" v-model="editForm.name" class="form-control" v-if="edit">
            <span v-else>mohammadreza</span>
        </td>
        <td>
            <input type="text" v-model="editForm.email" class="form-control" v-if="edit">
            <span v-else>tofig</span>
        </td>

        <td>
            <button v-on:click="editCustomer" type="button" class="btn btn-info btn-xs" v-if="!edit">edit</button>
            <button v-on:click="cancelEdit" type="button" class="btn btn-info btn-xs" v-if="edit">cancel</button>

            <button v-on:click="$emit('delete-customer',customer)" type="button" class="btn btn-danger btn-xs">Delete</button>

        </td>
    </tr>

    </tbody>

</table>


</template>

<script>
    export default {

        props:['customer'],
        data(){

            return{
               editForm:{
                   name:"",
                   email:""
               },
                edit:false

            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            add()
            {

                axios.post('./api/add',{
                    name:this.name,
                    email:this.email,


                });
                this.toggle = !this.toggle
            },
            editCustomer(){
                this.edit = true;
                this.editForm.name = this.customer.name;
                this.editForm.email = this.customer.email;
            },

            cancelEdit(){
                this.edit=false;
                this.editForm='';
                this.editForm='';
            }
        }
    }
</script>
