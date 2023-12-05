<template>
  <layout>
    <section class="about-holder border-b-l-white bg-light d-none d-md-block">
      <div class="container">
        <ul class="breadcrumb m-0 p-0">
          <li class="breadcrumb-item">
            <a href="index.html" title="الرئيسية" class="text-muted"
              >الرئيسية</a
            >
          </li>
          <li class="breadcrumb-item">ملفك الشخصي</li>
        </ul>

        <h2 class="mb-5 pb-5">ملفك الشخصي</h2>
      </div>
    </section>


    <section class="content-holder pb-5 move-up-2x">
      <div class="container">
        <UserTabs />

        <div class="row">
          <div class="col-md-4 col-lg-3">
            <div class="card animate-box border-b-l-white pb-3">
              <div class="card-body p-4 border-bottom">
                <h3 class="mt-0 mb-4">تواصل معنا</h3>

                <ul class="list-unstyled">
                  <li class="animate-box">
                    <i class="icofont-phone font-2x"></i>
                  </li>
                  <li class="animate-box">عن طريق الاتصال بنا</li>
                  <li class="animate-box">
                    <a
                      href="tel:+9660513123124"
                      class="font-1x ltr d-inline-block"
                      >+966 051 312 3124</a
                    >
                  </li>
                  <li class="animate-box mt-1">
                    <i class="icofont-mail font-2x"></i>
                  </li>
                  <li class="animate-box">عن طريق إرسال بريد الكتروني</li>
                  <li class="animate-box">
                    <a href="mailto:hello@blue-bees.com" class="font-1x"
                      >hello@blue-bees.com</a
                    >
                  </li>
                </ul>

                <div class="animate-box">
                  <a
                    href="dashboard-support-add.html"
                    class="btn btn-primary"
                    title="فتح تذكرة دعم فني"
                    ><i class="fa fa-plus ml-1"></i> فتح تذكرة دعم فني</a
                  >
                </div>
              </div>

              <div class="card-body p-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <span
                    ><span class="font-2x font-3x">320</span> <br />
                    <small>مشاهدة</small></span
                  >
                  <span class="badge shadow text-success"
                    ><i class="icofont-long-arrow-up"></i> +24</span
                  >
                </div>

                <div class="progress mt-3" style="height: 3px">
                  <div
                    class="progress-bar bg-secondary"
                    role="progressbar"
                    style="width: 60%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <p class="m-0">لقت اكملت 60% من ملفك الشخصي</p>

                <a
                  href="#"
                  title="تكملة ملفك الشخصي"
                  class="btn btn-secondary btn-sm mt-3"
                  >تكملة ملفك الشخصي</a
                >
              </div>

              <div class="card-body p-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <span
                    ><span class="font-2x font-3x">142</span> <br />
                    <small>عروض مرسلة</small></span
                  >
                  <span class="badge shadow text-success"
                    ><i class="icofont-long-arrow-up"></i> +30</span
                  >
                </div>

                <a
                  href="#"
                  title="إبحث عن فرصة"
                  class="btn btn-primary btn-sm mt-3"
                  >إبحث عن فرصة</a
                >
              </div>

              <div class="card-body p-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <span
                    ><span class="font-2x font-3x">30</span> <br />
                    <small>طلباتي</small></span
                  >
                  <span class="badge shadow text-danger"
                    ><i class="icofont-long-arrow-up"></i> +24</span
                  >
                </div>

                <a
                  href="#"
                  title="إضافة طلب"
                  class="d-inline-block text-primary py-1 mt-3"
                  ><i class="fa fa-plus"></i> إضافة طلب</a
                >
              </div>

              <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                  <span
                    ><span class="font-2x font-3x">1200</span> <br />
                    <small>ظهور للاعلانات</small></span
                  >
                  <span class="badge shadow text-success"
                    ><i class="icofont-long-arrow-up"></i> +90</span
                  >
                </div>

                <a
                  href="#"
                  title="إدارة اعلاناتك"
                  class="d-inline-block text-primary py-1 mt-3"
                  ><i class="fa fa-cog"></i> إدارة اعلاناتك</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-9">
            <div class="card bg-light pb-5 px-3 d-none d-md-block">
              <div class="owl-carousel on-boarding">
                <div class="item">
                  <div class="row m-0">
                    <div class="col-md-7 col-lg-6 text-md-right pt-5 px-0">
                      <h4>العروض الاوتوماتيكية</h4>
                      <p class="mb-5">لا وجود لتعب إضافة العروض على الطلبات</p>

                      <a
                        href="dashboard-settings.html"
                        class="btn btn-primary btn-sm mb-4"
                        title="ترقية للنسخة المدفوعة"
                      >
                        ترقية للنسخة المدفوعة</a
                      >
                    </div>
                    <div class="col-md-5 col-lg-6 py-4 px-0">
                      <img
                        src="bluebies/images/dashboard-img.png"
                        alt="..."
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="row m-0">
                    <div class="col-md-7 col-lg-6 text-md-right pt-5 px-0">
                      <h4>العروض الاوتوماتيكية</h4>
                      <p class="mb-5">لا وجود لتعب إضافة العروض على الطلبات</p>

                      <a
                        href="dashboard-settings.html"
                        class="btn btn-primary btn-sm mb-4"
                        title="ترقية للنسخة المدفوعة"
                      >
                        ترقية للنسخة المدفوعة</a
                      >
                    </div>
                    <div class="col-md-5 col-lg-6 py-4 px-0">
                      <img
                        src="bluebies/images/dashboard-img.png"
                        alt="..."
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="row m-0">
                    <div class="col-md-7 col-lg-6 text-md-right pt-5 px-0">
                      <h4>العروض الاوتوماتيكية</h4>
                      <p class="mb-5">لا وجود لتعب إضافة العروض على الطلبات</p>

                      <a
                        href="dashboard-settings.html"
                        class="btn btn-primary btn-sm mb-4"
                        title="ترقية للنسخة المدفوعة"
                      >
                        ترقية للنسخة المدفوعة</a
                      >
                    </div>
                    <div class="col-md-5 col-lg-6 py-4 px-0">
                      <img
                        src="bluebies/images/dashboard-img.png"
                        alt="..."
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5 mb-3">
              <div class="col-md-6">
                <h3>تذاكر الدعم الفني</h3>
              </div>
              <div class="col-md-6 filter-btns text-left d-none d-md-block">
                <button type="button" class="btn btn-sm" data-filter="all">
                  الكل
                </button>
                <button type="button" class="btn btn-sm" data-filter=".done">
                  تم الحل
                </button>
                <button type="button" class="btn btn-sm" data-filter=".pending">
                  جاري الحل
                </button>
                <button type="button" class="btn btn-sm" data-filter=".closed">
                  مغلقة
                </button>
              </div>
            </div>

            <div class="row contain-filter">
              <div class="col-md-6 col-lg-4 mix done">
                <div class="animate-box">
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="badge py-2 px-3 radius-20 border border-success text-success"
                        >تم الحل</span
                      >
                      <h5>مشكلة في</h5>
                      <p class="text-muted">
                        مشكلة عند فتح التطبيق على موبايل اندرويد يخرج بعد مدة
                        دقيقة
                      </p>
                      <p class="mb-2 text-muted">
                        <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                      </p>
                      <a
                        href="dashboard-support-ticket.html"
                        title="شاهد تفاصيل التذكرة"
                        class="btn btn-outline-primary btn-sm btn-block"
                        >شاهد تفاصيل التذكرة<i
                          class="fa fa-chevron-left mr-1"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mix closed">
                <div class="animate-box">
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="badge py-2 px-3 radius-20 border border-danger text-danger"
                        >مغلقة</span
                      >
                      <h5>مشكلة في</h5>
                      <p class="text-muted">
                        مشكلة عند فتح التطبيق على موبايل اندرويد يخرج بعد مدة
                        دقيقة
                      </p>
                      <p class="mb-2 text-muted">
                        <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                      </p>
                      <a
                        href="dashboard-support-ticket.html"
                        title="شاهد تفاصيل التذكرة"
                        class="btn btn-outline-primary btn-sm btn-block"
                        >شاهد تفاصيل التذكرة<i
                          class="fa fa-chevron-left mr-1"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mix pending">
                <div class="animate-box">
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="badge py-2 px-3 radius-20 border border-warning text-warning"
                        >جاري الحل</span
                      >
                      <h5>مشكلة في</h5>
                      <p class="text-muted">
                        مشكلة عند فتح التطبيق على موبايل اندرويد يخرج بعد مدة
                        دقيقة
                      </p>
                      <p class="mb-2 text-muted">
                        <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                      </p>
                      <a
                        href="dashboard-support-ticket.html"
                        title="شاهد تفاصيل التذكرة"
                        class="btn btn-outline-primary btn-sm btn-block"
                        >شاهد تفاصيل التذكرة<i
                          class="fa fa-chevron-left mr-1"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mix done">
                <div class="animate-box">
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="badge py-2 px-3 radius-20 border border-success text-success"
                        >تم الحل</span
                      >
                      <h5>مشكلة في</h5>
                      <p class="text-muted">
                        مشكلة عند فتح التطبيق على موبايل اندرويد يخرج بعد مدة
                        دقيقة
                      </p>
                      <p class="mb-2 text-muted">
                        <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                      </p>
                      <a
                        href="dashboard-support-ticket.html"
                        title="شاهد تفاصيل التذكرة"
                        class="btn btn-outline-primary btn-sm btn-block"
                        >شاهد تفاصيل التذكرة<i
                          class="fa fa-chevron-left mr-1"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </layout>
</template>
<script>
import Layout from "../Layout.vue";
import UserTabs from "./UserTabs.vue";

import "@fortawesome/fontawesome-free/css/all.css";

import axios from "axios";
export default {
  name: "Dashboard Support",

  components: {
    Layout,
    UserTabs
  },
  
};
</script>
