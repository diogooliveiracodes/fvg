<template>
    <div>
        <h5>{{cardTitulo}}</h5>
        <br>
        <p><slot></slot></p>
    </div>
</template>

<script>
export default {
    props: ['cardTitulo']
}
</script>

<style scoped>
    h5{
        color: white;
    }
    p{
        color: white;
    }
    div{
        border: 2px solid rgb(147 187 194);
        border-radius: 5px;
        padding: 31px 15px 15px 15px;
        text-align: center;
        margin: 10px;
        width: 256px;
        
    }

</style>