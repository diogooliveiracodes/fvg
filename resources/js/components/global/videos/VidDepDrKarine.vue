<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrKarine.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrKarine',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>