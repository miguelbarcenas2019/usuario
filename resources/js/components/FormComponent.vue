<template>
  <div class="card">
  <div class="card-body">
  <form action="" v-on:submit.prevent="newUsuario()">
                        <div class="form-grup">
                            <label for="nombre"> Nombre:</label>
                            <input type="text" class="form-control" name="nombre" v-model="nombre">
                        </div>  
                        <div class="form-grup">
                            <label for="apellidop"> Apellido Paterno:</label>
                            <input type="text" class="form-control" name="apellidop" v-model="apellidop">
                        </div>  

                         <div class="form-grup">
                            <label for="apellidom"> Apellido Materno:</label>
                            <input type="text" class="form-control" name="apellidom"
                            v-model="apellidom">
                        </div>  
                         <div class="form-grup">
                            <label for="edad"> Edad:</label>
                            <input type="number" class="form-control" name="edad"
                            v-model="edad">
                        </div> 

                         <div class="form-grup">
                            <label for="direccion"> Direccion:</label>
                            <input type="text" class="form-control" name="direccion"
                            v-model="direccion">
                        </div> 
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                              Guardar
                          </button>
                        </div>
                   </form>
    </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return{
            nombre:'',
            apellidop:'',
            apellidom:'',
            edad:'',
            direccion:''

            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{

          newUsuario(){

              const params = {

                nombre : this.nombre,
                apellidop : this.apellidop,
                apellidom : this.apellidom,
                edad : this.edad,
                direccion : this.direccion

              };

          axios.post=('/usuarios', params)
          .then(function (response){
          const usuario = response.data;
          this.$emit('new',usuario);

          }).catch(function (error) {
                    currentObj.output = error;
                });
          
         

          }
        }
    }
</script>
