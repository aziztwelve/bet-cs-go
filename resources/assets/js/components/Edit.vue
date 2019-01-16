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
					<input :class="{'is-danger':errors.name}" type="text" class="form-control" placeholder="Name" v-model="list.name">
				</div>
					<small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.email}" type="text" class="form-control" placeholder="Email" v-model="list.email">
				</div>
					<small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
				<div class="input-group col-sm-13" style="margin-top:18px">
					<input :class="{'is-danger':errors.code_role}" type="text" class="form-control" placeholder="Admin status" v-model="list.code_role" >
				</div>
					<small v-if="errors.code_role" class="has-text-danger">{{ errors.code_role[0] }}</small>
				
			</div>
			<div class="modal-footer">
				<button type="button" @click="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" @click="update" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
</template>


<script>
    export default {
        props: ['openmodal', 'opendisplay'],

        data(){
			return{
				list:{},
				errors:{}
			}
		},

        methods:{
        	close(){
        		this.$emit('closeRequest')
        	},

        	update(){
			 axios.patch(`/admin/user/${this.list.id}`,this.$data.list).then((response)=> this.close())
				  .catch((error) => this.errors = error.response.data.errors)
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
