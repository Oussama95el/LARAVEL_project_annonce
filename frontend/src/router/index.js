import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Offers from  "../views/Offers.vue";
import Requests from  "../views/Requests.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/login", component: Login },
  { path: "/offers", component: Offers },
  { path: "/requests", component: Requests },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
