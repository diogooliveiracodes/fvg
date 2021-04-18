<template>
    <div v-if="!isloaded">
        <v-navbar imagem="images/logo.png" pgonline="true"></v-navbar>
        <mamoplastiaFirstComponent></mamoplastiaFirstComponent>
        <mamoplastiaSecondComponent></mamoplastiaSecondComponent>
        <mamoplastiaThirdComponent></mamoplastiaThirdComponent>
        <v-footer></v-footer>
    </div>
</template>

<script>
import mamoplastiaFirstComponent from './mamoplastia_components/MamoplastiaFirstComponent'
import mamoplastiaSecondComponent from './mamoplastia_components/MamoplastiaSecondComponent'
import mamoplastiaThirdComponent from './mamoplastia_components/MamoplastiaThirdComponent'
export default {
    components:{
        mamoplastiaFirstComponent,
        mamoplastiaSecondComponent,
        mamoplastiaThirdComponent
    },
    name: 'mamoplastiaApp'
}
</script>

<style>

</style>