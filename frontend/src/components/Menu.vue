<template>
  <nav class="navbar navbar-expand-lg navbar-light custom-nav">
    <div class="container-fluid">
        <router-link class="navbar-brand" to="/">
          Syllabus IUD
        </router-link>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <router-link class="nav-link active" aria-current="page" to="/">Home</router-link>
          </div>
        </div>
    </div>
  </nav>
</template>

<script>
export default {

}
</script>

<style>
.custom-nav {
  background: white; 
}

.notification {
  background-color: #fb404b;
  border-radius: 10px;
  color: white;
  padding: 0 5px;
  font-size: 12px;
  height: 18px;
}
</style>