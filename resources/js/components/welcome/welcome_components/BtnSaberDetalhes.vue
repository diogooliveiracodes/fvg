<template>
    <div class="div-text">
        <a class="btn btn-md" :href="linkroute">Quero saber os detalhes</a>
    </div>
</template>

<style scoped>
@media only screen and (max-width: 576px) {
    .div-text{
        margin-top: 30px;
        justify-content: center;
        text-align: center;
    }
}
a{
    transition: all 0.3s ease-in-out 0s;
    background-color:rgb(147 187 194);
    border: none;
    border-radius: 20px;
    color: rgb(61 57 53);
}
a:hover{
    transform: scale3d(1.2, 1.2, 2);
    background-color:rgb(147 187 194);
    color: rgb(61 57 53);
}
a:after{
    transition: all 0.3s ease-in-out 0s;
    background-color:rgb(147 187 194);
    border: none;
    border-radius: 20px;
    color: rgb(61 57 53);
}
 
</style>
<script>
export default {
    props:[
        'linkroute'
    ],
    name: 'btnSaberDetalhes'
}

</script>
