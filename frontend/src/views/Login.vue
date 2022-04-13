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
        <form class="mb-3">
          <h1 class="fw-bolder text-white mb-3 text-center">Login</h1>
          <div class="form-floating mb-5">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" style="color:#2d3748">Email address</label>
          </div>
          <div class="form-floating mb-5">
            <input type="password" class="form-control" id="floatingPassword"  placeholder="Password">
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
export default {
  name: "Login"
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