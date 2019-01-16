<template>
	<div>
	<table class="table" style="overflow-x: hidden" >
			<thead>
				<tr>
					<!-- <th scope="col">#</th> -->
					<th scope="col">Время</th>
					<th scope="col">Лига</th>
					<th scope="col">Команда 1</th>
					<th scope="col">Команда 2</th>
					<th scope="col">Сумма 1</th>
					<th scope="col">Сумма 2</th>
					<th scope="col">Коеф 1</th>
					<th scope="col">Коеф 2</th>
					<th scope="col">Процент 1</th>
					<th scope="col">Процент 2</th>
					<th scope="col">Результат</th>
					<th scope="col">Изменить</th>
					<!-- <th scope="col">Удалить</th> -->
				</tr>
			</thead>
			<tbody >
				<tr v-for="item,key in lists">
					<th scope="row">{{ item.date }}</th>
					<td>{{ item.game }}</td>
					<td>{{ item.team1 }}</td>
					<td>{{ item.team2 }}</td>
					<td>{{ item.sum_t1 }}</td>
					<td>{{ item.sum_t2 }}</td>
					<td>{{ item.coef_t1 }}</td>
					<td>{{ item.coef_t2 }}</td>
					<td>{{ item.percent_t1 }}</td>
					<td>{{ item.percent_t2 }}</td>
					<td>{{ item.result }}</td>
					<td><router-link :to="'/admin/match/edit/' + item.id" class="btn btn-primary">Edit</router-link></td>

					<td>

						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Изменить
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<input  class="btn btn-info" type="button" @click="openEdit(key)" value="Изменить"/>
						<input  class="btn btn-danger" type="button" @click="del(key, item.id)" value="Удалить"/>
								<!-- <a class="dropdown-item" href="#">Удалить</a> -->
							</div>
						</div>
					</td>
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
		mounted(){
        	
        	axios.post('/admin/getMatches')
        	.then((response)=>this.lists =  response.data)
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
        }
	}
 </script>