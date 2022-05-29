<template>
  <div>
    <header class="header">
      <div class="container-logo">
        <h1 class="heading mt-2">
          <span class="main">Art Gal</span>
          <span class="sub">world wide art</span>
        </h1>
      </div>
      <h1 class="heading">
        <span class="sub-sub">share with the world your offers</span>
      </h1>
    </header>
    <!--        Section of demandes  -->
    <div class="d-flex justify-content-between align-items-center m-3">
      <h1 class="text-center">
        View All Users Offers
      </h1>
      <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="resetForm">
        Add Offer
      </button>
    </div>
    <div class="card-container">

      <section class="container-content ">
        <div class="card d-flex" v-for="item in offers" :key="item.id">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <div class="ratio">
                <img src="../assets/profile.jpg" alt="profile picture" class="rounded-circle profile-img">
              </div>
              <h5 class="card-title username">{{item.user_offer.nom}}<br>{{item.user_offer.prenom}}</h5>
            </div>
            <div v-if="item.user_id == userId ? true : false">
            <div class="img-fluid d-flex">
              <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="startUpdate(item)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                     viewBox="0 0 16 16">
                  <path
                      d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>
              </button>
              <button class="btn" @click="destroy(item.id)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                     viewBox="0 0 16 16">
                  <path
                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
              </button>
            </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ item.title }}</h5>
            <h5 class="card-title">{{ item.type }}</h5>
            <p class="card-text">{{ item.description }}</p>
            <p class="card-text float-end">${{ item.price }}</p>
          </div>

          <img :src="'/assets/Art/' + item.picture" class="card-img-bottom" alt="content image type offers">
          <p class="card-text"><small class="text-muted">Added at {{ item.created_at }}</small></p>
        </div>
        <!--   pagination   -->
      </section>
      <div class="center">
        <nav aria-label="pagination" class="mt-3">
          <ul class="pagination">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
              <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!--    Add form for offers -->

    <!--    modal body -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog bg-dark">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Your Publicity</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="#" @submit="submit" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" v-model="form.title" id="title" placeholder="Title">
              </div>
              <div class="mb-3">
                <label for="select" class="form-label">Select Type</label>
                <select class="form-select" v-model="form.type" id="select">
                  <option disabled>Select type</option>
                  <option value="offer">Offer</option>
                  <option value="request" disabled>Request</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" v-model="form.description"
                       placeholder="Description">
              </div>
              <div class="mb-3">
                <label for="file" class="form-label">Image</label>
                <input type="file" class="form-control" ref="myFiles" id="file" @change="previewFiles">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" v-model="form.price" placeholder="$$$">
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-outline-light" data-bs-dismiss="modal" value="Close">
                <input type="submit" class="btn btn-warning" value="submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import axios from "axios";
const initialFormState = {
  title: '',
  type: '',
  description: '',
  file: '',
  price: '',
  user: window.localStorage.getItem('user_id')
}
export default {
  name: "Offers",
  data() {
    return {
      userId:window.localStorage.getItem('user_id'),
      form: initialFormState,
      files: [],
      token: window.localStorage.getItem('token'),
      offers: [],
      showing: false,
    }
  },
  mounted() {
    this.getAllPost();

  },
  methods: {
    getAllPost(){
      const endpoint = `http://127.0.0.1:8000/api/offer`
      axios.get(endpoint).then(res => {
        this.offers = res.data
        console.log(res)
      })
    },
    startUpdate(item){
      this.form = item;
    },
    resetForm(){
      this.form = initialFormState;
    },
    previewFiles() {
      this.files = this.$refs.myFiles.files
      this.form.file = this.files[0].name
    },
    submit: function () {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`
        }
      }
      const endpoint = `http://127.0.0.1:8000/api/offer/${this.form.id ?? ""}`

      const action = this.form.id ? axios.put : axios.post;

      action(endpoint, {
        title: this.form.title,
        type: this.form.type,
        description: this.form.description,
        picture: this.form.file,
        price: this.form.price,
        user_id: this.form.user
      }, config).then(res => {
        if (!res) {
          console.log('error')
        } else {
          document.getElementById('exampleModal').modal('hide');
        }
      })
    },
    destroy(id) {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`
        }
      }
      console.log(this.offers.id)
      const endpoint = `http://127.0.0.1:8000/api/offer/${id}`
      axios.delete(endpoint, config).then(res => {
        // this.offers = this.offers.filter(e => e.id != id)
        if (res){
          this.getAllPost();
        }
      })
    }
  }
}
</script>

<style lang="scss" scoped>
@mixin center($justify,$align,$direction) {
  display: flex;
  flex-direction: $direction !important;
  justify-content: $justify !important;
  align-items: $align !important;
}
.username{
  font-size: 14px;
  margin-left: 8px;
}
.center {
  @include center(center, center, row)
}

.container-logo {
  @include center(center, center, row);
}

.card-container {
  background-color: rgba(203, 203, 243, 0.76);
  width: 100%;
  padding: 20px;
}

.container-content {
  @include center(center, center, row);
  width: 100%;
  flex-wrap: wrap;
  gap: 1rem;
}

.card-img-bottom {
  height: 300px;
  width: 100%;
}
.card{
  width: 350px !important;
}

.ratio {
  display: block;
  position: relative;
}

.ratio:before {
  content: '';
  display: block;
  width: 50px;
  padding-top: 100%;
}

.profile-img {
  flex-grow: 1;
}

.header {
  background-image: linear-gradient(to right bottom, rgba(164, 100, 196, 0.81), rgba(255, 255, 255, 0.2)), url("../assets/offerCover.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;
  height: 85vh;
  width: 100%;
  clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
}

.cover-logo {
  width: 250px;
  height: 250px;
}

.heading {
  text-align: center;
  text-transform: uppercase;

  .main {
    display: block;
    color: black;
    letter-spacing: 20px;
    font-size: 60px;
    font-weight: 500;
  }

  .sub {
    display: block;
    color: white;
    letter-spacing: 20px;
    font-size: 24px;
    font-weight: 300;
  }
}

@media (max-width: 480px) {
  .cover-logo {
    width: 150px;
    height: 150px;
  }
  .heading {
    text-align: center;
    text-transform: uppercase;

    .main {
      display: block;
      color: black;
      letter-spacing: 10px;
      font-size: 40px;
      font-weight: 400;
    }

    .sub {
      display: block;
      color: white;
      letter-spacing: 10px;
      font-size: 18px;
      font-weight: 300;
    }

    .card-container {
      padding: 10px;
    }

    .container-content {
      width: 90% !important;
    }
  }

}
</style>