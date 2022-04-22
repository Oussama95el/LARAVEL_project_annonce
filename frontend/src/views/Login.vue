<template>
  <div class="center">
    <div class="container p-5" >
      <div class="figure-container">
        <figure class="figure">
          <img src="src/assets/Art_login.jpg" class="figure-img img-fluid rounded" id="login-img" alt="...">
          <figcaption class="figure-caption">Discover Art You Love From the World’s Leading Online Gallery.</figcaption>
        </figure>
      </div>
      <div class="form-container">
        <form class="mb-3" method="post" @submit.prevent="submit">
          <h1 class="fw-bolder text-white mb-3 text-center">Login</h1>
          <div class="form-floating mb-5">
            <input type="email" class="form-control" id="floatingInput" v-model="email" placeholder="name@example.com">
            <label for="floatingInput" style="color:#2d3748">Email address</label>
          </div>
          <div class="form-floating mb-5">
            <input type="password" class="form-control" id="floatingPassword" v-model="password"  placeholder="Password">
            <label for="floatingPassword" style="color:#2d3748">Password</label>
            <a href="#">Forgot password?</a>
          </div>

          <div>
            <input type="submit" class="btn btn-outline-light m-3 submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import {generateFormData} from "../utils/helpers";

export default {
  name: "Login",
  data(){
    return{
      email: '',
      password: '',

    }
  },
  mounted() {
  },
  methods:{
    submit(){

      const endpoint = 'http://127.0.0.1:8000/api/login';
      const data = {email: this.email, password: this.password}
      axios.post(endpoint,data).then(res => {
        if (res.data.token){
          const token = res.data.token
          const user_id = res.data.user.id
          console.log(token)
          console.log(user_id)
          localStorage.setItem('token', token)
          localStorage.setItem('user_id', user_id)
          this.$router.push('/offers');
        }else{
          alert('Your email or password are incorrect !!!')
        }
      })
    }
  }
}
</script>


<style lang="scss" scoped>
@mixin center($justify,$align,$direction){
  display: flex;
  flex-direction: $direction !important;
  justify-content: $justify !important;
  align-items: $align !important;
}
.center{
  @include center(center,center, row)
}
#login-img{
  width: 400px;
  height: 350px;
}
.form-container{
  background-color: #2a2a2a;
  width: fit-content;
  padding: 2rem;
  border-radius: 1rem;
  margin-left: 1rem;
}
.container{
  max-width: 1440px;
  padding: 2rem;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.submit{
  width: 250px !important;
}
</style>