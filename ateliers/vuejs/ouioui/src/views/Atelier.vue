<template>
  <div class="atelier">
    <img alt="Vue logo" src="../assets/logo.png" />
    <p v-if="testPresenceMessage">{{ testMessage }}</p>
    <li v-for="item in items" :key="item.id">
      <p>{{ item.name }}</p>
      <img :src="item.url" :alt="item.name">
    </li>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      testMessage: "Bienvenue à l'accueil de notre site :)",
      items: [
        {
          id: 0,
          name: "Santa & toddler",
          url: "https://images.unsplash.com/photo-1481481525014-91e77115eace?ixlib=rb-1.2.1&auto=format&fit=crop&w=976&q=80"
        },
        {
          id: 1,
          name: "Santa Hello",
          url: "https://images.unsplash.com/photo-1511600173735-a896042389cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
        },
        {
          id: 2,
          name: "Santa boy shirt",
          url: "https://images.unsplash.com/photo-1543893419-fcc585654853?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80"
        },
        {
          id: 3,
          name: "Santa close-up",
          url: "https://images.unsplash.com/photo-1450198342040-c32e6d1ef2e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
        },
      ]
    };
  },
  methods: {
    testPresenceMessage: function() {
      if (this.testMessage !== null && this.testMessage !== "") {
        return true;
      }
    }
  },
  name: "atelier"
};
</script>

<style lang="scss" scoped>
</style>

