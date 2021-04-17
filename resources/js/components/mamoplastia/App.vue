<template>
    <div v-if="!isloaded">
        <v-navbar imagem="images/logo.png" pgonline="true"></v-navbar>
        <mamoplastiaFirstComponent></mamoplastiaFirstComponent>
        <v-footer></v-footer>
    </div>
</template>

<script>
import mamoplastiaFirstComponent from './mamoplastia_components/MamoplastiaFirstComponent'
export default {
    components:{
        mamoplastiaFirstComponent
    },
    name: 'mamoplastiaApp'
}
</script>

<style>

</style>