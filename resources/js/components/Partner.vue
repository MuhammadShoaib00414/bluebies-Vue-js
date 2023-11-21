<template>
    <div class="container py-4 text-center">
      <p class="m-0">{{ partnerCompanies.title }}</p>
      <h2 class="mt-0 mb-5">{{ partnerCompanies.heading }}</h2>
  
      <div class="animate-box">
        <div class="owl-carousel mt-5">
         
          <div class="item" v-for="(image, index) in partnerCompaniesImages" :key="index">
  
            <a href="#">
              <img :src="'http://127.0.0.1:8000/' + image">
  
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="animate-box d-none">
        <div class="owl-carousel mt-5">
        
          <div class="item" v-for="(image, index) in partnerCompaniesImages" :key="index">
            <a href="#" title="اسم الشركة"><img src="images/company-1.png" alt="اسم الشركة"></a>
          </div>
        </div>
      </div> -->
  
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        partnerCompanies: [],
        partnerCompaniesImages: [],
  
      };
    },
    created() {
      // Fetch data from the API when the component is created
      axios
        .get('/api/get-partners')
        .then((response) => {
  console.log(response);
          // Update the partnerCompanies array with the data from the API
          this.partnerCompanies = response.data[0];
          this.partnerCompaniesImages = JSON.parse(this.partnerCompanies.images);
          console.log('array', this.partnerCompaniesImages);
        })
        .catch((error) => {
          console.error('Error fetching data from the API', error);
        });
    },
  };
  </script>
  
  <style></style>
  