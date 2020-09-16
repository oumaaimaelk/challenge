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
						
<label> Name: </label>
						<input type="text" v-model ="form.name"class="form-control"name="name">

							<hr>
					<label> Description: </label>
						<input type="text" v-model ="form.description"class="form-control" name="description">

							<hr>
							<label> price: </label>
						<input type="number" v-model ="form.price" class="form-control" name="price">

							<hr>
						
							<label> Category: </label>
						<select  class="form-control action" name="category_id"   required>
							<option "selected hidden"> Select Category of Product </option>
							@foreach()
							<option value=""></option>
							@endforeach

						</select>
						<hr>
						<label for="exampleFormControlFile1">Select Product Image</label>
						<input type="file" name="image" class="form-control file">
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
		name: "edit",
		data(){
			return {
				form: new Form({
					name: '',
					description: '',
					price: ''
				}),
				products : [],
    id:'',
    name:'',
    description: '',
    price :'',
    category_id : '',
    image :''
				}
		},
		methods: {
/**
* On submit form
* */
			onSubmit(){
			
				this.form.put('/api/edit-product/'+this.id)
			},
			/**
			* Load the product by id 
			*/
			loadProduct(){
			  axios.get('/api/show-product'+this.id).then(


			  result => {
    console.log(result.data)
    this.products = result.data

   
    
   
			this.form.fill(this.products);
			});
			}
		},
	created(){
this.id = this.$route.params.id;
this.loadProduct();
	}


}
</script>
<style scoped>
</style>