
import { createRouter, createWebHistory } from 'vue-router'

import Home from '../Components/Home.vue'
import Summery from '../Components/summery.vue'
import Report from '../Components/report.vue'
import Shop from '../Components/shop.vue'
import MobileBanking from '../Components/mobile-banking/Mobile-banking.vue'
import TransactionForm from '../Components/mobile-banking/transaction-form.vue'
import ProductForm from '../Components/ProductForm.vue'
import PrintForm from '../Components/PrintForm.vue'
import CopyForm from '../Components/CopyForm.vue'
import DuePayment from '../Components/DuePaymentForm.vue'
import Collection from '../Components/CollectionForm.vue'
import Cashamount from '../Components/CashamountForm.vue'
import DueTransaction from '../Components/DueTransaction.vue'
import Expenses from '../Components/ExpenseForm.vue'



import store from '@/store';
const routes = [
    { path: '/', 
        component: Home },
    { path: '/home', 
        name:'Home',
        component: Home },        
    { path: '/shop', 
        name:'Shop',
        component: Shop },       
    { path: '/product-form', 
        name:'ProductForm',
        component: ProductForm },    
    { path: '/print-form', 
        name:'PrintForm',
        component: PrintForm },    
    { path: '/copy-form', 
        name:'CopyForm',
        component: CopyForm },  


    { path: '/mobile-banking',         name:'Mobile-banking',        component: MobileBanking },        
    { path: '/make-trasaction',         name:'TransactionForm',        component: TransactionForm },        
    

    { path: '/due-payment', 
        name:'DuePayment',
        component: DuePayment },    


    { path: '/collection', 
        name:'Collection',
        component: Collection },         
        
    { path: '/cash-amount', 
        name:'/CashAmount',
        component: Cashamount },     

    { path: '/expenses', 
        name:'Expenses',
        component: Expenses },        
    { path: '/summery', 
        name:'Summery',
        component: Summery },        
    { path: '/report', 
        name:'Report',
        component: Report },    
    
    { path: '/due-transaction', 
        name:'Due-Transaction',
        component: DueTransaction },    
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



