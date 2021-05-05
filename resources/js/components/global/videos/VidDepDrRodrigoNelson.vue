<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrRodrigoNelson.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrRodrigoNelson',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>