<template>
    <div>
        <button @clic = "$emit('clicked',counter++)">
            {{text}}
        </button>
    </div>
</template>

<script>
    export default {
    props:{
        type: String,
        default:'Default text'
    },
      data(){
          return{

          };
      },
        methods: {

        }
    }
</script>

<style scoped>

</style>