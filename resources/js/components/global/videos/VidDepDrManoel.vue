<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrManoel.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrManoel',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>