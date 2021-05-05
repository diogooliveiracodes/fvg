<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrDavid.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDavidBravo',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>