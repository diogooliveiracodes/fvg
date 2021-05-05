<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source src="videos/depDrLucasLacerda.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrLucasLacerda',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>