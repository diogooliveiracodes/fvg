<template>
    <div class="div-main">
        <div class="row mx-0 px-0">
            <h5>{{cardTitulo}}</h5>
        </div>
        <div class="row mx-0 px-0">
            <p><slot></slot></p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['cardTitulo']
}
</script>

<style scoped>
@media screen and (min-width: 577px) {
    .div-main{
        width: 256px;
    }
}
@media screen and (max-width: 576px) {
    .div-main{
        width: 100%;
    }
}
    h5{
        color: white;
    }
    p{
        color: white;
    }
    .div-main{
        border: 2px solid rgb(147 187 194);
        border-radius: 5px;
        padding: 31px 15px 15px 15px;
        text-align: center;
        margin: 10px;
    }

</style>