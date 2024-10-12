
import { createRouter, createWebHistory } from 'vue-router'

import Home from '../Components/Home.vue'
import Content from '../Components/Content.vue'
import Education from '../Components/Education.vue'
import Experience from '../Components/Experience.vue'
import Expertise from '../Components/Expertise.vue'
import Skills from '../Components/Skills.vue'
import AboutUs from '../Components/AboutUs.vue'
import ContactUs from '../Components/ContactUs.vue'
import Reference from '../Components/Reference.vue'
import Login from '../Components/Login.vue'
import Logout from '../Components/Logout.vue'
import Register from '../Components/Register.vue'
import Subscription from '../Components/Subscription.vue'
import Payment from '../Components/Payment.vue'
import Dashboard from '../Components/Dashboard.vue'
import Profile from '../Components/dashboard/Profile.vue'



import ProductForm from '../Components/ProductForm.vue'
import PrintForm from '../Components/PrintForm.vue'
import CopyForm from '../Components/CopyForm.vue'
import DuePayment from '../Components/DuePaymentForm.vue'




import store from '@/store';
const routes = [
    { path: '/', 
        component: Home },
    { path: '/home', 
        name:'Home',
        component: Home },    
    { path: '/product-form', 
        name:'ProductForm',
        component: ProductForm },    
    { path: '/print-form', 
        name:'PrintForm',
        component: PrintForm },    
    { path: '/copy-form', 
        name:'CopyForm',
        component: CopyForm },    
    { path: '/due-payment', 
        name:'DuePayment',
        component: DuePayment },





    { path: '/education', 
        name:'Education',
        component: Education },
    { path: '/experience',
        name:'Experience',
         component: Experience },
    { path: '/expertise', 
        name:'Expertise',
        component: Expertise },
    { path: '/skills', 
        name:'Skills',
        component: Skills },
    { path: '/about-us', 
        name:'AboutUs',
        component: AboutUs },
    { path: '/contact-us', 
        name:'ContactUs',
        component: ContactUs },
    { path: '/reference', 
        name:'Reference',
        component: Reference },
    { path: '/login', 
        name:'Login',
        component: Login },
    { path: '/register/:subscriptionkey', 
        name: 'Register', 
        component: Register },
    { path: '/get-subscription', 
        name:'Subscription',
        component: Subscription },
    { path: '/payment', 
        name:'Payment',
        component: Payment },    
    { path: '/logout', 
        name:'Logout',
        component: Logout},
    { path: '/dashboard', 
            name:'Dashbaord',
            component: Dashboard,
            meta: {
                requiresAuth: true,
              }
    }
    
]


// Create the router instance
const router = createRouter({
  history: createWebHistory(), // Use HTML5 history mode
  routes, // Short for `routes: routes`
})


router.beforeEach((to, from, next) => {
    const authenticatedUser = store.getters.getToken;
    const requiresAuth = to.matched.some(record => record.meta.requiresAuth);

    if (requiresAuth && ! authenticatedUser) 
        next('login')
    else 
        next();
});

// Export the router to use in the main file
export default router



