<template>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="inputUsername" class="form-label">Username</label>
              <input
                id="inputUsername"
                type="text"
                class="form-control"
                v-model="username"
              />
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="inputPassword"
                v-model="password"
              />
            </div>
            <button type='button' @click="login()" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from '../axios-auth';

export default {
  name: "Login",
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {
    login() {
        axios
        .post("http://localhost/users/login", {
            username: this.username,
            password: this.password 
        })
        .then(res => {
            axios.defaults.headers.common["Authorization"] = "Bearer " + res.data.token;
            console.log(res.data.token);
        //   this.$router.push('/products')
        })
        .catch((error) => console.log(error));
    },
  }
};
</script>

<style>
</style>