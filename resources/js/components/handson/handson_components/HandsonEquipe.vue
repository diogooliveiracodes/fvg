<template>
  <div class="row mx-0 px-0 justify-content-center bg-white py-5">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
            <carousel :perPageCustom=[[1,1],[556,2],[992,3]]>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/felipe-villaca.jpg"
                        >
                        <template v-slot:titulo>Felipe Villaça</template>
                        <template v-slot:crm>CRM: 48.463</template>
                        <template v-slot:texto>
                            Responsável Técnico da FVG<br>
                            Membro da Sociedade Brasileira de Cirurgia Plástica – SBCP
                            Membro Adjunto do Colégio Brasileiro de Cirurgiões Sócio Diretor do Premier Hospital Dia Sócio Diretor da Médico sem Fila
                        </template>
                    </v-card-mentores>
                </slide>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/marco-tulio.jpg"
                        >
                        <template v-slot:titulo>Marco Túlio Ferreira</template>
                        <template v-slot:crm>CRM: 48.463</template>
                        <template v-slot:texto>
                            <strong>Membro da Sociedade Brasileira de Cirurgia Plástica – SBCP</strong>
                            Especialização em Cirurgia Plástica no
                            Hospital Felício Rocho em
                            Belo Horizonte/MG
                        </template>
                    </v-card-mentores>
                </slide>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/marcus-capanema.jpg"
                        >
                        <template v-slot:titulo>Marcus Capanema</template>
                        <template v-slot:crm>CRM: 60.314</template>
                        <template v-slot:texto>
                            <strong>Membro da Sociedade Brasileira de Cirurgia Plástica – SBCP</strong>
                            Especialização Cirurgia Plástica no Hospital Socor em Belo Horizonte/MG.
                        </template>
                    </v-card-mentores>
                </slide>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/david-ordonez.jpg"
                        >
                        <template v-slot:titulo>David Ordonez</template>
                        <template v-slot:crm>CRM: 66.017</template>
                        <template v-slot:texto>
                            Especialização em Cirurgia Plástica
                            no Hospital Felício Rocho
                            em Belo Horizonte/MG
                        </template>
                    </v-card-mentores>
                </slide>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/marcio-resende.jpg"
                        >
                        <template v-slot:titulo>Márcio Resende</template>
                        <template v-slot:crm>CRM: 57.070</template>
                        <template v-slot:texto>
                            <strong>Membro da Sociedade Brasileira de Cirurgia Plástica – SBCP</strong>
                            Especialização em Cirurgia Plástica
                            no Hospital Felício Rocho
                            em Belo Horizonte/MG
                        </template>
                    </v-card-mentores>
                </slide>
                <slide>
                    <v-card-mentores
                        facebook="facbook.com/diogooliveira06"
                        instagram="instagram.com/diggx"
                        linkedin="linkedin.com/diogooliveiracodes"
                        imagem="images/handson/lucas-resende.jpg"
                        >
                        <template v-slot:titulo>Lucas Rezende</template>
                        <template v-slot:crm>CRM: 48.561</template>
                        <template v-slot:texto>
                            <strong>Membro da Sociedade Brasileira de Cirurgia Plástica – SBCP</strong>
                            Especialização em Cirurgia Plástica pelo
                            Centro de Formação e Treinamento em Cirurgia Plástica – Hospital Mater Dei
                            Belo Horizonte/MG
                        </template>
                    </v-card-mentores>
                </slide>
            </carousel>
        </div>
  </div>
</template>

<script>
export default {
    name: 'handsonEquipe'
}
</script>

<style scoped>

</style>