<template>
    <div class="container py-4 " style="display:none">
      <h2 class="mt-0 mb-5">الإشتراكات</h2>
  
      <div class="row m-0">
        <div class="col-md-3 animate-box bg-primary text-white pt-3 small features-holder">
          <p v-for="(data, index) in features" :key="index">{{ data.name }}</p>
        </div>
  
        <!-- <div class="col-md-9 p-0 animate-box features-details">
          <div class="row m-0 text-center">
            <div class="col p-0 py-4 bg-white single-detail" v-for="(feature, index) in features" :key="index">
              <p class="m-0">{{ feature.name }}</p>
              <p v-if="feature.packages && feature.packages.length > 0" v-for="(datapackage, packageIndex) in feature.packages" :key="packageIndex">
                
                <a href="#" class="btn btn-outline-primary btn-sm small mt-1 mb-3" title="الاشتراك في الخطة">الاشتراك في
                  الخطة</a>
                <p v-if="isPackageSelected(datapackage)">
                  <i class="icofont-check-circled text-success"></i>
                </p>
                <p v-else>
                  <i class="icofont-check-circled text-danger"></i>
                </p>
              </p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="container py-4">

<h2 class="mt-0 mb-5">الإشتراكات</h2>

<div class="row m-0">

    <div class="col-md-3 animate-box bg-primary text-white pt-3 small features-holder">
        <p>شعار المنشأة+ نبذة تعريفية</p>
        <p>إضافة فروع</p>
        <p>إرسال وتلقي الطلبات والعروض</p>
        <p>الظهور ضمن العملاء الاكثر تفاعلا</p>
        <p>بنر أعلى الصفحة الرئيسية - 5 أشهر</p>
        <p>بنر اعلى صفحة الطلبات الخارجية - 5 أشهر</p>
        <p>بنر أعلى صفحة إنشاء الطلب - 5 أشهر</p>
        <p>بنر أعلى صفحة عملاؤنا - 5 أشهر</p>
        <p>بنر أعلى لوحة التحكم - 5 اشهر</p>
        <p>بنر أعلى صفحة العروض - 5 أشهر</p>
        <p>بنر العملاء المميزين في لوحة التحكم - 5 أشهر</p>
    </div>

    <div class="col-md-9 p-0 animate-box features-details">
        <div class="row m-0 text-center">
            <div class="col p-0 py-4 bg-white single-detail">
                <p class="m-0">الباقة الفضية</p>
                <p class="m-0 font-2x">1000</p>
                <p class="m-0 small">ريال/السنة</p>
                <a href="#" class="btn btn-outline-primary btn-sm small mt-1 mb-3"
                    title="الاشتراك في الخطة">الاشتراك في الخطة</a>

                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
            </div>

            <div class="col p-0 py-4 bg-white single-detail">
                <p class="m-0">الباقة الذهبية</p>
                <p class="m-0 font-2x">2500</p>
                <p class="m-0 small">ريال/السنة</p>
                <a href="#" class="btn btn-outline-primary btn-sm small mt-1 mb-3"
                    title="الاشتراك في الخطة">الاشتراك في الخطة</a>

                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
            </div>

            <div class="col p-0 py-4 bg-white single-detail">
                <p class="m-0">الباقة البلاتينيوم</p>
                <p class="m-0 font-2x">5000</p>
                <p class="m-0 small">ريال/السنة</p>
                <a href="#" class="btn btn-outline-primary btn-sm small mt-1 mb-3"
                    title="الاشتراك في الخطة">الاشتراك في الخطة</a>

                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
                <p><i class="icofont-close-circled text-danger"></i></p>
            </div>

            <div class="col p-0 py-4 bg-white single-detail">
                <p class="m-0">الباقة الماسية</p>
                <p class="m-0 font-2x">7500</p>
                <p class="m-0 small">ريال/السنة</p>
                <a href="#" class="btn btn-outline-primary btn-sm small mt-1 mb-3"
                    title="الاشتراك في الخطة">الاشتراك في الخطة</a>

                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
                <p><i class="icofont-check-circled text-success"></i></p>
            </div>
        </div>
    </div>

</div>

</div>
  </template>
  
  <script>
import axios from "axios";

export default {
  props: {
    features: {
      type: Array,
      required: true,
    },
    feature: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      features: [],
    };
  },
  created() {
    // Fetch data from the API when the component is created
    axios
      .get("/api/get-subscription")
      .then((response) => {
        // Update the features array with the data from the API
        this.features = response.data.features;
        console.log("features", this.features);
      })
      .catch((error) => {
        console.error("Error fetching data from the API", error);
      });
  },
  methods: {
    isPackageSelected(datapackage) {
      if (this.feature.selectedpackage) {
        const selectedPackages = JSON.parse(this.feature.selectedpackage);
        return selectedPackages.includes(datapackage.id.toString());
      }
      return false;
    },
  },
};
</script>
  
  <style></style>
  