<template>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <!-- Add a router link to the homepage (don't use the a tag!) -->
          <router-link to='/' class="nav-link" active-class="active" >Home</router-link>
          <!-- <a class="nav-link" active-class="active" href="/">Home</a> -->
        </li>
        <li class="nav-item">
          <!-- Add a router link to the create product page (don't use the a tag!) -->
          <router-link to='/createproduct' class="nav-link" active-class="active">Create Product</router-link>
          <!-- <a class="nav-link" active-class="active" href="/createproduct">Create Product</a> -->
        </li>
        <li class="nav-item">
          <!-- add a router link to the products page (don't use the a tag!) -->
          <router-link to='/productlist' class="nav-link" active-class="active">Products</router-link>
          <!-- <a class="nav-link" active-class="active" href="/productlist">Products</a> -->
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Navigation",
};
</script>

<style>
</style>