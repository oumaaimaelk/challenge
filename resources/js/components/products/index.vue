<template>
<h2> Products </h2>
<table class="table">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
       <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      
      
     
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   
     <tr v-for="product in products">
<td >{{product.id}}</td>
<td  >{{product.name}}</td>
<td >{{product.description}}</td>
<td >{{product.price}}</td>
<td >{{product.category_id}}</td>
<td><image height="50px" :src="'/storage/images/products/'+ product.image "/></td>


<td> <router-link :to = "'/api/edit-product/' + product.id"> Edit </router-link>
<button @click="onDelete(product.id,product.name)" class="btn btn-danger ">Delete</button > </td>
    
  
    </tr>
  
  </tbody>
</table>       
</template>

<script> 
export default {
	name : "index",
  data(){
  return {
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
  getProducts(){
    axios.get('/api/products').then(
    result => {
    console.log(result.data)
    this.products = result.data
    }
    )
  },
  onDelete(id,name){
if(confirm('Are you sure')){
  axios.delete('/api/delete-product/'+ id)
  .then(result => { this.getProducts();
 })
 }
 }
  },
  created(){
this.getProducts();
  }


}
</script>
<style scoped>
</style>