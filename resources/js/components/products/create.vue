<template>


<div class="container">
		<div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
			<div class="jumbotron">
				<div class="form-group" style="margin-top: -50px;">
					<h1 class="text-center">
					     Add new Product
					</h1>
					</div>
					<hr>

					<form  @submit.prevent="onSubmit"  class="form-horizontal" style="margin-left: 50px;">
					<alert-success :form="form"> Product Added Successfully </alert-success>
						
<label> Name: </label>
						<input type="text" v-model ="form.name"class="form-control"name="name">

							<hr>
					<label> Description: </label>
						<input type="text" v-model ="form.description"class="form-control" name="description">

							
						<hr>
						<label> Price: </label>
						<input type="text" v-model ="form.price"class="form-control" name="description">

							
						<hr>
						<label> Category: </label>
						<input type="text" v-model ="form.category_id"class="form-control" name="description">

							
						<hr>
						<label for="exampleFormControlFile1">Select Product Image</label>
						<input type="file" name="image"  v-model ="form.image" class="form-control file">
						<hr>

						<div  class="text-center">	
							<input type="submit" name="btnaddd" class="btn btn-primary" value="Add">
							<input type="reset"  class="btn btn-danger" value="Reset">
						</div>


					</form>

				</div>
			</div>
		</div>

</template>


<script>
	export default {
		name: "create",
		data(){
			return {
				form: new Form({
					name: '',
					description: '',
					price: '',
					category_id: '',
					image:''


					
				})
			}
		},
		methods: {
/**
* On submit form
* */
			onSubmit(){
				this.form.post('/api/add-product').then((response) => {  })
							}
		}


}
</script>
<style scoped>
</style>