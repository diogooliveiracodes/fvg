<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrBarbara.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    props: {
        videoplay: true,
    }
}
</script>

<style>

</style>