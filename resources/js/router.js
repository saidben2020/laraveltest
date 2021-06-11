import Vue from 'vue';
import VueRouter from 'vue-router';
import table from './components/table';
import hello from './components/hello';
Vue.use(VueRouter);
export default new VueRouter({
    routes:[{path:'/',component:hello},
{path:'/hello',component:hello},
 {path:'/table',component:table}],
mode:'history'
});
