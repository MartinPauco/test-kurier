import Home from "./components/Home.vue";
import About from "./components/About.vue";
import Eshopy from "./components/Eshopy.vue";
import Kurieri from "./components/Kurieri.vue";
import Pravidla from "./components/Pravidla.vue";
import Login from "./components/LoginForm.vue";
import Register from "./components/RegisterForm.vue";

// let base_path = "/ukf-web-kurier/public/";
let base_path = "/";

export const routes = [{
        name: 'home',
        path: base_path,
        component: Home
    },
    {
        name: 'about',
        path: base_path + 'about',
        component: About
    },
    {
        name: 'eshopy',
        path: base_path + 'eshopy',
        component: Eshopy
    },
    {
        name: 'kurieri',
        path: base_path + 'kurieri',
        component: Kurieri
    },
    {
        name: 'pravidla',
        path: base_path + 'pravidla',
        component: Pravidla
    },
    {
        name: 'login',
        path: base_path + 'login',
        component: Login
    },
    {
        name: 'register',
        path: base_path + 'register',
        component: Register
    }
];