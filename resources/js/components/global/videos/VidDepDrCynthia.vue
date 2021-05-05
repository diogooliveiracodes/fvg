<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrCynthia.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrCynthia',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>