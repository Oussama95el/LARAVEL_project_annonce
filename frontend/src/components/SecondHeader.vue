<template>
      <div>
        <header class="p-3 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <span href="/" class="d-flex align-items-center mb-2 mb-lg-0  text-decoration-none">
              <img src="src/assets/Logo1.png" alt="logo picture" class="rounded mx-auto d-block" id="logo" >
            </span>

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><router-link to="/" href="#" class="nav-link px-2 text-white">Home</router-link></li>
                <li><router-link to="/offers"  href="#" class="nav-link px-2 text-white">Offers</router-link></li>
                <li><router-link to="/requests" href="#" class="nav-link px-2 text-white">Requests</router-link></li>
              </ul>

              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" @submit.prevent="searching">
                <input type="search" class="form-control form-control-dark" v-model="search" placeholder="Search..." aria-label="Search">
              </form>
<!--              Dropdown menu     -->
                <div class="dropdown">
                  <button class="btn btn-outline-light me-2 dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                  </button>
                  <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">

                    <li><button class="dropdown-item" @click.prevent="logout">logout</button></li>
                  </ul>
                </div>

            </div>
          </div>
        </header>
      </div>
</template>

<script>
import axios from "axios";
import {generateFormData} from "../utils/helpers";

export default {
  name: "SecondHeader",
  data(){
    return{
      token: '',
      search: '',


    }
  },
  mounted() {
    this.token = window.localStorage.getItem('token');
  },
  methods:{
    async logout(){
      const config = { mode:"no-cors", headers: {
        Authorization : `Bearer ${this.token}`
        }
      }
      const endpoint = 'http://localhost:8000/api/logout'
      await axios.post(endpoint,undefined, config).then(res => {
        console.log(res.data)
        this.$router.push('/login')
        localStorage.clear();
      })
      ;
    },
    searching(){

    }
  }
}
</script>

<style lang="scss" scoped>
#logo{
  margin-right: 50px;
  width: 50px;
}
.white{
  color: white;
}

@media (max-width:480px) {
  #logo{
    display: none !important;
  }
}
@media (max-width:720px) {

}
</style>