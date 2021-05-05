<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source src="videos/depDrVitorMonteAlto.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'depDrVitorMonteAlto',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>