<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <router-link class="navbar-brand" href="/">Products</router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <router-link class="nav-link" to="/products/index">Products </router-link>
      </li>
      <li class="nav-item active">
        <router-link class="nav-link" to="/products/create">Add Product </router-link>
      </li>
      <li class="nav-item active">
        <router-link class="nav-link" to="/categories/indexCategory">Categories </router-link>
      </li>
      <li class="nav-item active">
        <router-link class="nav-link" to="/categories/createCategory">Add Category </router-link>
      </li>
     
    </ul>
    
  </div>
</nav>
</template>
<script>
export default {
  name:"navBar"
}
</script>
<style scoped>
</style>