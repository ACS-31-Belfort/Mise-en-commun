import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import Atelier from "../views/Atelier.vue";
import About from "../views/About.vue";
import CSStagram from "../views/CSStagram.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "home",
    meta: {
      title: "ouioui - Home"
    },
    component: Home
  },
  {
    path: "/atelier",
    name: "atelier",
    meta: {
      title: "ouioui - Atelier"
    },
    component: Atelier
  },
  {
    path: "/about",
    name: "about",
    component: About
  },
  {
    path: "/csstagram",
    name: "csstagram",
    component: CSStagram
  }
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

const DEFAULT_TITLE = "Oui Oui";
router.afterEach((to) => {
  document.title = to.meta.title || DEFAULT_TITLE;
});

export default router;