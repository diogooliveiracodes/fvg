<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrAlencar.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrAlencar',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>