<template>
	<div>
		<nav class="navbar navbar-light bg-light">
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" v-model="searchQuery">
				
			</form>
			<span class="is-pulled-right" v-if="loading">
				<i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
			</span>
		</nav>

		<table class="table" >
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Status</th>
					<th scope="col">Изменить</th>
					<th scope="col">Удалить</th>
				</tr>
			</thead>
			<tbody >
				<tr v-for="item,key in temp">
					<th scope="row">{{ item.id }}</th>
					<td>{{ item.name }}</td>
					<td>{{ item.email }}</td>
					<td>{{ item.code_role }}</td>
					<td><input  class='btn btn-info' @click="openEdit(key)" type='button' value='Изменить'/></td>
					<td><input  class='btn btn-danger' @click="del(key, item.id)" type='button' value='Удалить'/></td>
				</tr>
				
			</tbody>
		</table>




		<admin-edit :openmodal='addActive' :opendisplay='addDisplay' @closeRequest='close'>
		</admin-edit>
	</div>
</template>



<script>
	


let  AdminEdit = require('./Edit.vue');


export default {
        components:{AdminEdit},


        data(){
        	return{
        		addActive : '',
        		addDisplay : '',
        		lists:{},
        		errors:{},
        		searchQuery:'',
        		temp:'',
        		loading:false,
        	}
        },
        watch:{
			searchQuery(){
				if (this.searchQuery.length > 0) {
					this.temp = this.lists.filter((item) => {
						return Object.keys(item).some((key)=>{
							let string = String(item[key]) 
							return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
							// console.log(string)
						})
					});
					// console.log(result)
				}else{
					this.temp = this.lists
				}
			}
		},

        mounted(){
        	
        	axios.post('/admin/getUsers')
        	.then((response)=>this.lists = this.temp = response.data)
        	.catch((error) =>this.errors = error.response.data.errors)
        },

        methods: {
        	openEdit(key){

        		this.$children[0].list = this.lists[key]

        		this.addActive = 'show';
        		this.addDisplay = 'block';
        	},
        	close(){
        		this.addActive = '';
        		this.addDisplay = '';
        	},

        	del(key, id){
        		// console.log(`${key} ${id}`)
        		if (confirm("вы дейстрительно хотите удалить этого пользователя?")) {

        			this.loading = !this.loading
		        	axios.delete(`/admin/user/${id}`)
		        	.then((response)=> {this.lists.splice(key,1);this.loading = !this.loading})
		        	.catch((error) =>this.errors = error.response.data.errors)
		        	}
		        	console.log(`${key} ${id}`)
		        }
        }
    }




</script>