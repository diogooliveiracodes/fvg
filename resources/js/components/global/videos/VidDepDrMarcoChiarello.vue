<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source  src="videos/depDrMarcoChiarello.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrMarcoChiarello',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>