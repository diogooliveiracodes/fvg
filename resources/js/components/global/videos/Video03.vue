<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrDavid.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'videoComponent03',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>