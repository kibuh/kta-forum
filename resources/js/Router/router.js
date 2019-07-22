import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import  Singup  from'../components/login/Signup'

const routes = [

    { path: '/login', component: Login },
   { path: '/signup', component: Singup },
   
  ]
  

const router = new VueRouter({
    routes, // short for `routes: routes`
    hasbang: false,
    mode:'history'
  })


  export default router