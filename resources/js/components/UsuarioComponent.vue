<template>
    <div class="container">
       <div class="card">
                <div class="card-header"> Usuarios Registrados</div>
                <div class="form-grup">


<table border=1 >
  <tr>
    <td>Nombre</td>
    <td>Apellido Paterno</td>
    <td>Apellido Materno</td>
    <td>Edad</td>
    <td>Direccion</td>
  </tr>
  <tr>
    <td v-if="editMode"><input   type="text" class="form-control" v-model="usuario.nombre"></td>
    <td v-else>{{usuario.nombre}}</td>

    <td v-if="editMode"><input   type="text" class="form-control" v-model="usuario.apellidop"></td>
    <td v-else>{{usuario.apellidop}}</td>

    <td v-if="editMode"><input   type="text" class="form-control" v-model="usuario.apellidom"></td>
    <td v-else>{{usuario.apellidom}}</td>

    <td v-if="editMode"><input   type="number" class="form-control" v-model="usuario.edad"></td>
    <td v-else>{{usuario.edad}}</td>

    <td v-if="editMode"><input   type="text" class="form-control" v-model="usuario.direccion"></td>
    <td v-else>{{usuario.direccion}}</td>
  </tr>
</table>
                </div>
                <div class="card-footer">
                    <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">
                        Guardar Cambios
                    </button>
                    <button v-else class="btn btn-primary" v-on:click="onClickEdit()">
                        Editar
                    </button>
                    <button class="btn btn-danger" v-on:click="onClickDelete()">
                        Eliminar
                    </button>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
    props: ['usuario'],
        data(){
            return{

            editMode: false
            };

        },
        mounted() {
            console.log('Component mounted.')
        },

        methods:{

           onClickDelete() {

                axios.delete('/usuarios/${this.usuario.id}').then(() => {
                    this.$emit('delete');
                });
            },

            onClickEdit(){

                this.editMode= true;

            },
             onClickUpdate() {
             
                const params = {
                    nombre: this.usuario.nombre,
                    apellidop:this.usuario.apellidop,
                    apellidom:this.usuario.apellidom,
                    edad:this.usuario.edad,
                    direccion:this.usuario.direccion

                };
                axios.put('/usuarios/${this.usuario.id}', params).then((response) => {

                    this.editMode = false;
                    const usuario = response.data;
                    this.$emit('update', usuario);
                });
            }

        }

    }
</script>

