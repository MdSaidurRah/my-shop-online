import './bootstrap';
import { createApp } from 'vue';

import  '../../public/assets/style.css';

import App from './Master-layout.vue'


import store from "././store/index";

import router from './routes/index' 
import 'primeicons/primeicons.css'


createApp(App)
    .use(store)
    .use(router)
    .mount("#app")

