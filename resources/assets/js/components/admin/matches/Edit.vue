<template>
	
<!-- Modal -->
<div class="modal fade show" :class='openmodal' id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 14px; " v-bind:style="{ display: opendisplay}">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
				<button type="button" @click="close" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.date}" type="text" class="form-control" placeholder="Время" v-model="list.date">
				</div>
					<small v-if="errors.date" class="has-text-danger">{{ errors.date[0] }}</small>


				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.game}" type="text" class="form-control" placeholder="Лига" v-model="list.game">
				</div>
					<small v-if="errors.name" class="has-text-danger">{{ errors.game[0] }}</small>

				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.team1}" type="text" class="form-control" placeholder="Команда 1" v-model="list.team1">
				</div>
					<small v-if="errors.team1" class="has-text-danger">{{ errors.team1[0] }}</small>

				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.team2}" type="text" class="form-control" placeholder="Команда 2" v-model="list.team2" >
				</div>
					<small v-if="errors.team2" class="has-text-danger">{{ errors.team2[0] }}</small>



				
				  <div class="card" style="width:200px;">
				    <img class="card-img-top" :src="'/images/' + list.emblem_t1" alt="Card image cap" >
				    <div class="card-body" style="padding:0">
				      <h5 class="card-title" style="text-align:center">Эмблема команды 1</h5>
				      
				    </div>
				  </div>
				    <label style="margin:15px 0 15px 0">Изменить</label>
				    <input type="file"  @change="fieldChange">



				  <div class="card" style="width:200px;">
				    <img class="card-img-top" :src="'/images/' + list.emblem_t2" alt="Card image cap" >
				    <div class="card-body" style="padding:0">
				      <h5 class="card-title" style="text-align:center">Эмблема команды 2</h5>
				      
				    </div>
				  </div>
				    <label style="margin:15px 0 15px 0">Изменить</label>
				    <input type="file"  @change="fieldChange">

				<!-- <div class="input-group col-sm-13" style="margin-top:18px"> -->
					<!-- <div>
						<img :src="'/images/' + list.emblem_t2" >
						
					</div> -->
				<!-- </div> -->

				<!-- <div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.sum_t1}" type="text" class="form-control" placeholder="Сумма команды 1" v-model="list.sum_t1" >
				</div> -->





					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.sum_t1}" type="text" class="form-control" placeholder="Сумма команды 1" v-model="list.sum_t1" >
				</div>
					<small v-if="errors.emblem_t2" class="has-text-danger">{{ errors.sum_t1[0] }}</small>
					
					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.sum_t2}" type="text" class="form-control" placeholder="Сумма команды 2" v-model="list.sum_t2" >
				</div>
					<small v-if="errors.code_role" class="has-text-danger">{{ errors.sum_t2[0] }}</small>
					
					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.coef_t1}" type="text" class="form-control" placeholder="Коеф команды 1" v-model="list.coef_t1" >
				</div>
					<small v-if="errors.coef_t1" class="has-text-danger">{{ errors.coef_t1[0] }}</small>


					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.coef_t2}" type="text" class="form-control" placeholder="Коеф команды 2" v-model="list.coef_t2" >
				</div>
					<small v-if="errors.coef_t1" class="has-text-danger">{{ errors.coef_t2[0] }}</small>


					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.percent_t1}" type="text" class="form-control" placeholder="Процент команды 1" v-model="list.percent_t1" >
				</div>
					<small v-if="errors.coef_t1" class="has-text-danger">{{ errors.percent_t1[0] }}</small>



					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.percent_t2}" type="text" class="form-control" placeholder="Процент команды 2" v-model="list.percent_t2" >
				</div>
					<small v-if="errors.coef_t1" class="has-text-danger">{{ errors.percent_t2[0] }}</small>


					<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.result}" type="text" class="form-control" placeholder="Коеф команды 2" v-model="list.result" >
				</div>
					<small v-if="errors.coef_t1" class="has-text-danger">{{ errors.result[0] }}</small>


					  <div class="form-group">
                                <label>Upload Files</label>
                                <input id="upload-file" type="file" multiple class="form-control" @change="fieldChange">
						</div>

					
				<button class="btn btn-primary" @click="uploadFile">Submit</button>
					

			</div>
			<div class="modal-footer">
				<button type="button" @click="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" @click="update" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
</template>
<style scoped>
    img{
        width:  100px;
        margin: auto;
        display: block;
        margin-bottom: 10px;
    }
</style>


<script>
    export default {
        props: ['openmodal', 'opendisplay'],

        data(){
			return{
				list:{},
				errors:{},
				// emblem1: null,
				// file: null,
				attachment: null,
				form: new FormData
				// image2: '',
				// imagePath: '/img/' + this.list.emblem_t1
			}
		},

		mounted(){
        	
        	// axios.post('/admin/getUsers')
        	// .then((response)=>this.lists = this.temp = response.data)
        	// .catch((error) =>this.errors = error.response.data.errors)
        	// image: '/img/' + this.list.emblem_t1
        },

        methods:{

        	fieldChange(e){
        		console.log(e);
        		let selectedFile = e.target.files[0];
        		this.attachment = selectedFile; 

        		return;
        		this.createImage(files[0]);
        	},
        	createImage(file){
        		var image = new Image();
        		var reader = new FileReader();
        		var vm = this;
        		reader.onload = (e) => {
        			vm.image = e.target.result;
        			this.$data.list.emblem_t1 = e.target.result
        			// console(this.list)
        		}
        	},
        	// uploadFile(){
        	// 	this.form.append('pic', this.attachment);
        	// 	console.log(this.form)

        	// 	const config = { headers: {'Content-Type': 'multipart/form-data'} };

        	// 	// console.log(this.form);
        	// 	axios.post('/upload', this.form, config).then(response=>{

        	// 	})
        	// 		.catch(response=>{

        	// 		})
        	// },
        	// GetImage(e) {
        	// 	// console.log(e);
         //        let image = e.target.files[0];
         //        this.read(image);
         //        let form = new FormData();
         //        form.append('pic', image);
         //        this.file = form;
         //    },
            // read(image){
            // 	let reader = new FileReader();
            //     reader.readAsDataURL(image);
            //     reader.onload = e => {
            //     	this.emblem1 = e.target.result
            //     }
            // },
            // removeImage: function(e){
            // 	this.emblem1 = null;
            // 	// this.image = '';
            // },
        	close(){
        		this.$emit('closeRequest')
        	},

        	update(){
        		this.form.append('pic', this.attachment);

        		const config = { headers: {'Content-Type': 'multipart/form-data'} };
			 axios.post(`/admin/match/${this.list.id}`,this.$data.list, this.form,config).then(response=> this.close())
				  .catch((error) => this.errors = error.response.data)
			}
        }
    }
</script>

<style>
	.modal{
		background: rgba(0,0,0, 0.77);
		overflow: auto;
	}
</style>
