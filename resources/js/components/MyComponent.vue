<template>
 
    <div class="row justify-content-center">
        <div class="col-md-8">

            


         <form-component @new="addUsuario"></form-component>
           

            <usuario-component
             v-for="(usuario , index) in usuario" 
             :key="usuario.id"
             :usuario="usuario"
             @update="updateUsuario(index, ...arguments)"
             @delete="deleteUsuario(index)">
            </usuario-component>

        
    </div>
</div>
</template>

<script>
    export default {
    data(){
        return{
            usuario:[]

        }

    },
        mounted() {
            axios.get('/usuarios').then((response)=>{this.usuario = response.data;

            });
        },

        methods:{
            addUsuario(usuario){
                this.usuario.push(usuario);
            },

            deleteUsuario(index){

            this.usuario.splice(index, 1);
            },

            updateUsuario(index, usuario){

                this.usuario[index]= usuario;

            }


        }

    }
</script>
