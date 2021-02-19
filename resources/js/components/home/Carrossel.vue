<template>
    <div class="bg-white py-5">
    <h1 class="cor-azul gotham-bold text-center">O que nossos alunos falam:</h1>
    <div class="row justify-content-center px-0 mx-0">
        <coverflow :coverList="coverList" :coverWidth="260" :index="2" class="px-0 mx-0"></coverflow>
    </div>
    </div>
</template>

<style scoped>
  #playbut{
    position: relative;
    width: 50px;
    height: 50px;
    left: calc(50% - 10px);
    top: calc(50% - 10px);
  }
</style>

<script>
      export default {
        name: 'app',
        data () {
          return {
            coverList: [
              {
                cover: 'images/barbara01.jpg',
                title: 'Barbara',
                link: 'https://www.google.com'

              }, {
                cover: 'images/david01.jpg',
                title: 'David'
                
              }, {
                cover: 'images/joseneto01.jpg',
                title: 'Jose Neto'
                
              }, {
                cover: 'images/wilson01.jpg',
                title: 'Wilson'
                
              }
            ]
          }
        }
      }
</script>
