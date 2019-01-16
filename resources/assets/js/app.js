
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
  { path: '/admin/match/edit/', component: AdminMatches },
  
]

const router = new VueRouter({
	mode: 'history',
  routes // сокращение от `routes: routes`
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
let AdminUsers = require('./components/User.vue');
let AdminMatches = require('./components/admin/matches/Matches.vue');
// let  AdminEdit = require('./components/Edit.vue');



const app = new Vue({
    el: '#admin-users',

    components:{AdminUsers}
});

const matches = new Vue({
    el: '#admin-matches',
    router,

    components:{AdminMatches}
});


const match_edit = new Vue({
    el: '#admin-match-edit',

    data(){
			return {
				addActive : '',
        		addDisplay : '',
        		lists:{},
        		errors:{},
        		searchQuery:'',
        		temp:'',
        		loading:false,
			}
		},

		methods: {
        	openEdit(key){

        		// this.$children[0].list = this.lists[key]

        		this.addActive = 'show';
        		this.addDisplay = 'block';
        	},
        	close(){
        		this.addActive = '';
        		this.addDisplay = '';
        	},
        }
});
