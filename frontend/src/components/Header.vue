<template>
    <div>
      <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <span href="/" class="d-flex align-items-center mb-2 mb-lg-0  text-decoration-none">
              <img src="src/assets/Logo1.png" alt="logo picture" class="rounded mx-auto d-block" id="logo" >
            </span>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Offers</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Requests</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Login</button>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign-up</button>
            </div>
          </div>
        </div>
      </header>

      <!-- Register Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-dark white">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark white">
              <form class="mb-3" method="post" @submit.prevent="submit">
                <div class="mb-3">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" v-model="nom" required>
                </div>
                <div class="mb-3">
                  <label>Prenom</label>
                  <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom" v-model="prenom" required>
                </div>
                <div class="mb-3">
                  <label>Email </label>
                  <input type="email" name="email" class="form-control" placeholder="Entrez votre email" v-model="email" required>
                </div>
                <div class="mb-3">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="" v-model="password" required>
                </div>
                <p>Etes-vous dèja enregistrer ? <router-link to="/login"><u> Clicker ici </u></router-link></p>
              </form>
            </div>
            <div class="modal-footer bg-dark">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Register Modal-->
    </div>
</template>
<script>
export default {
    name:"Header",
    
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

    }
    @media (max-width:720px) {

    }
</style>
