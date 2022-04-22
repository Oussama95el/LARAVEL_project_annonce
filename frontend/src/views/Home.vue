<template>
    <div>
<!--      cover header-->
      <header class="header">
       <div class="container-logo">
         <img src="../assets/Logo1-noBg.png" alt="Logo image" class="cover-logo">
       </div>
        <h1 class="heading">
          <span class="main">Art Gal</span>
          <span class="sub">world wide art</span>
        </h1>
      </header>

    </div>
</template>

<script>
export default {
  name: "Home"
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
  .container-logo{
    @include center(center,center, row);
  }
  .header{
    background-image:linear-gradient(to right bottom, rgba(196, 196, 100, 0.81), rgba(255, 255, 255, 0.2)) ,url("../assets/CoverHome.jpg");
    background-size: cover;
    background-repeat:no-repeat ;
    background-position: top center;
    height: 85vh;
    width: 100%;
    clip-path: polygon(0 0, 100% 0, 100% 75vh,0 100%);
  }
  .cover-logo{
    width: 250px;
    height: 250px;
  }
  .heading{
    text-align: center;
    text-transform: uppercase;
    .main{
      display: block;
      color: black;
      letter-spacing: 20px;
      font-size: 60px;
      font-weight:500;
    }
    .sub{
      display: block;
      color: white;
      letter-spacing: 20px;
      font-size: 24px;
      font-weight: 300;
    }
  }

  @media (max-width: 480px) {
    .cover-logo{
      width: 150px;
      height: 150px;
    }
    .heading{
      text-align: center;
      text-transform: uppercase;
      .main{
        display: block;
        color: black;
        letter-spacing: 10px;
        font-size: 40px;
        font-weight:400;
      }
      .sub{
        display: block;
        color: white;
        letter-spacing: 10px;
        font-size: 18px;
        font-weight: 300;
      }
    }

  }

</style>