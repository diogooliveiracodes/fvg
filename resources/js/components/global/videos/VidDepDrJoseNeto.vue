<template>
    <video :autoplay="true" controls v-if="videoplay">
        <source src="videos/depDrJoseNeto.mp4" type="video/mp4">
    </video>
</template>

<script>
export default {
    name: 'vidDepDrJoseNeto',
    props: {
        videoplay: false,
    }
}
</script>

<style>

</style>