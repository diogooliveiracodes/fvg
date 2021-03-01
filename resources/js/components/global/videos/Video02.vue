<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source src="videos/depDrWilson.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'videoComponent02',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>