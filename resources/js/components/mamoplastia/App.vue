<template>
    <div v-if="!isloaded">
        <v-navbar imagem="images/logo.png" pgonline="true"></v-navbar>
        <mamoplastiaFirstComponent></mamoplastiaFirstComponent>
        <mamoplastiaSecondComponent></mamoplastiaSecondComponent>
        <mamoplastiaThirdComponent></mamoplastiaThirdComponent>
        <mamoplastiaFourthComponent></mamoplastiaFourthComponent>
        <mamoplastiaLastComponent></mamoplastiaLastComponent>
        <v-footer mamoplastia="true"></v-footer>
    </div>
</template>

<script>
import mamoplastiaFirstComponent from './mamoplastia_components/MamoplastiaFirstComponent'
import mamoplastiaSecondComponent from './mamoplastia_components/MamoplastiaSecondComponent'
import mamoplastiaThirdComponent from './mamoplastia_components/MamoplastiaThirdComponent'
import mamoplastiaFourthComponent from './mamoplastia_components/MamoplastiaFourthComponent'
import mamoplastiaLastComponent from './mamoplastia_components/MamoplastiaLastComponent'
export default {
    components:{
        mamoplastiaFirstComponent,
        mamoplastiaSecondComponent,
        mamoplastiaThirdComponent,
        mamoplastiaFourthComponent,
        mamoplastiaLastComponent
    },
    name: 'mamoplastiaApp'
}
</script>

<style>

</style>