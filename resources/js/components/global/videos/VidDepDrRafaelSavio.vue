<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source src="videos/depDrRafaelSavio.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrRafaelSavio',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>