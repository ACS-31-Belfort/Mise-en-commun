<template>
<!-- Une template doit toujours n'avoir qu'une seule balise à la racine -->
  <div class="csstagram">
    <p>Bonjour, je suis la page {{ pageName }}</p>
    <div class="container">
        <div v-for="post in posts" :key="post.id" class="post">
            <h2>{{ post.titre }}</h2>
            <img :src="post.url" :alt="post.alt">
            <p @click="liker(post.id)">Likes : {{ post.likes }}</p>
        </div>
    </div>
    <!-- <p v-if="testLogique">A vendre</p> -->
    <!-- <input type="text" name="jeanmichel" id="jeanmichel" v-model="input">
    <h1>Voici mon input : {{ input }}</h1> -->
  </div>
</template>
    
<script>
export default {
    data: function(){
        return{
           pageName: "jeanmichel",
        //    nombre1: 1,
        //    nombre2: 2,
        //    input: ""
            posts: [
                {
                    id: 0,
                    url: "https://images.unsplash.com/photo-1544144414-ac819b0ca347?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80",
                    alt: "Photo d'un T shirt oui",
                    titre: "T-shirt Oui pour homme",
                    likes: 58988
                },
                {
                    id: 1,
                    url: "https://images.unsplash.com/photo-1538685677320-54ee767ebd9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1090&q=80",
                    alt: "Photo de maïs",
                    titre: "Maïs multicolore",
                    likes: 15
                },
                {
                    id: 2,
                    url: "https://images.unsplash.com/photo-1560984396-046e6af5db3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1021&q=80",
                    alt: "Photo no smoking",
                    titre: "No smoking please",
                    likes: 0
                },
                {
                    id: 3,
                    url: "https://images.unsplash.com/photo-1529773464063-f6810c569277?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80",
                    alt: "Photo empreinte",
                    titre: "Empreinte de chaussure",
                    likes: 13
                }
            ]
        }
    },
    methods: {
        liker: function(id){
            return this.posts[id].likes++
        }
        // testLogique: function(){
        //     if(this.nombre1 < this.nombre2){
        //         return true
        //     }
        //     else{
        //         return false
        //     }
        // }
    },
    name: "csstagram"
}
</script>

<style lang="scss" scoped>
    body *{
        color: red
    }
    img{
        max-width: 400px;
        height: auto;
    }
</style>