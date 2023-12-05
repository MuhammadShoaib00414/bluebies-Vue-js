<template>
  <layout>
    <section class="about-holder border-b-l-white bg-light d-none d-md-block">
      <div class="container">
        <ul class="breadcrumb m-0 p-0">
          <li class="breadcrumb-item">
            <a href="" title="الرئيسية" class="text-muted">الرئيسية</a>
          </li>
          <li class="breadcrumb-item">ملفك الشخصي</li>
        </ul>

        <h2 class="mb-5 pb-5">ملفك الشخصي</h2>
      </div>
    </section>

    <!--===============================
    CONTENT
===================================-->

    <section class="content-holder pb-5 move-up-2x">
      <div class="container">
        <div class="text-left d-none d-md-block">
          <ul class="list-unstyled list-inline m-0">
            <li class="list-inline-item mx-1">
              <div class="font-2x font-3x">70</div>
              <small>عرض</small>
            </li>
            <li class="list-inline-item mx-1">
              <div class="font-2x font-3x">60</div>
              <small>طلب</small>
            </li>
          </ul>
        </div>

        <ul
          class="list-unstyled list-inline d-flex justify-content-between align-items-center dach-links"
        >
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard')"
              class="card small-card active"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="icofont-home fa-2x"></i>
                </div>
                <p class="mt-2 mb-0">لوحة التحكم</p>
              </div>
            </a>
          </li>
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard-orders')"
              class="card small-card"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="fa fa-th-large fa-2x"></i>
                </div>
                <p class="mt-2 mb-0">الطلبات</p>
              </div>
            </a>
          </li>
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard-offers')"
              class="card small-card"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="far fa-newspaper fa-2x"></i>
                  <span class="badge bg-primary text-white">50</span>
                </div>
                <p class="mt-2 mb-0">العروض</p>
              </div>
            </a>
          </li>
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard-support')"
              class="card small-card"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="far fa-comments fa-2x"></i>
                </div>
                <p class="mt-2 mb-0">الدعم الفني</p>
              </div>
            </a>
          </li>
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard-profile')"
              class="card small-card"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="icofont-file-alt fa-2x"></i>
                </div>
                <p class="mt-2 mb-0">ملف الشركة</p>
              </div>
            </a>
          </li>
          <li class="px-1">
            <a
              v-on:click="() => this.$router.push('/dashboard-settings')"
              class="card small-card"
            >
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="icofont-gear-alt fa-2x"></i>
                </div>
                <p class="mt-2 mb-0">الاعدادات</p>
              </div>
            </a>
          </li>
        </ul>

        <div class="row">
          <div class="col-md-4 col-lg-3">
            <div class="card animate-box border-b-l-white pb-3">
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

            <div>
              <div class="row">
                <div class="col-md-6">
                  <h2 class="my-4">العروض المرسلة</h2>
                </div>
                <div class="col-md-6 d-none d-md-block text-left">
                  <ul class="list-inline list-unstyled mt-4 view-btns">
                    <li class="list-inline-item active">
                      <a href="gridView" title=".." class="round-icon border-0"
                        ><i class="fa fa-th-large"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="listView" title=".." class="round-icon border-0"
                        ><i class="fa fa-bars"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-lg-4 view-holder">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div>
                          <h3>تأمين صحي</h3>
                          <ul class="list-unstyled list-inline m-0">
                            <li class="list-inline-item mx-1">
                              <div class="font-2x font-3x">9200</div>
                              <small>ريال سعودي</small>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <img
                            src="bluebies/images/order-logo-2.png"
                            class="order-logo-sm my-2"
                            alt="..."
                          />
                          <p class="m-0 text-muted">
                            <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                          </p>
                        </div>

                        <div class="border-top">
                          <a
                            href="messages.html"
                            class="btn btn-outline-primary"
                            title="إرسال رسالة"
                            ><i class="far fa-comments ml-1"></i>إرسال رسالة</a
                          >
                          <a href="#" class="text-muted mt-2 mr-2" title="تحديث"
                            ><i class="fa fa-pencil-alt ml-1"></i>تحديث</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 view-holder">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div>
                          <h3>تأمين صحي</h3>
                          <ul class="list-unstyled list-inline m-0">
                            <li class="list-inline-item mx-1">
                              <div class="font-2x font-3x">9200</div>
                              <small>ريال سعودي</small>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <img
                            src="bluebies/images/order-logo-2.png"
                            class="order-logo-sm my-2"
                            alt="..."
                          />
                          <p class="m-0 text-muted">
                            <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                          </p>
                        </div>

                        <div class="border-top">
                          <a
                            href="messages.html"
                            class="btn btn-outline-primary"
                            title="إرسال رسالة"
                            ><i class="far fa-comments ml-1"></i>إرسال رسالة</a
                          >
                          <a href="#" class="text-muted mt-2 mr-2" title="تحديث"
                            ><i class="fa fa-pencil-alt ml-1"></i>تحديث</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 view-holder">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div>
                          <h3>تأمين صحي</h3>
                          <ul class="list-unstyled list-inline m-0">
                            <li class="list-inline-item mx-1">
                              <div class="font-2x font-3x">9200</div>
                              <small>ريال سعودي</small>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <img
                            src="bluebies/images/order-logo-2.png"
                            class="order-logo-sm my-2"
                            alt="..."
                          />
                          <p class="m-0 text-muted">
                            <i class="fa fa-clock ml-1"></i> 14 اغسطس 2019
                          </p>
                        </div>

                        <div class="border-top">
                          <a
                            href="messages.html"
                            class="btn btn-outline-primary"
                            title="إرسال رسالة"
                            ><i class="far fa-comments ml-1"></i>إرسال رسالة</a
                          >
                          <a href="#" class="text-muted mt-2 mr-2" title="تحديث"
                            ><i class="fa fa-pencil-alt ml-1"></i>تحديث</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="contain-filter">
              <h2 class="my-4">طلبات تهمك</h2>

              <div class="row mb-3">
                <div class="col-md-6 filter-btns">
                  <button type="button" class="btn btn-sm" data-filter="all">
                    <i class="icofont-ghost ml-1"></i>الكل
                  </button>
                  <button type="button" class="btn btn-sm" data-filter=".food">
                    <i class="icofont-food-basket ml-1"></i>الاطعمة
                  </button>
                  <button type="button" class="btn btn-sm" data-filter=".car">
                    <i class="icofont-car ml-1"></i>السيارات
                  </button>
                </div>
                <div class="col-md-6 text-left">
                  <a href="#" title="إعداد الأهتمامات"
                    ><i class="fa fa-cog ml-1"></i>إعداد الأهتمامات</a
                  >
                </div>
              </div>

              <div class="row orders-holder">
                <div class="col-md-6 col-lg-4 mix food">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <a
                              href="#"
                              title="طلب عرض اسعار"
                              class="btn btn-sm btn-outline-light mt-1"
                              >طلب عرض اسعار</a
                            >
                          </div>
                        </div>

                        <h3 class="mt-4 mb-5">تأمين صحي</h3>

                        <ul class="list-unstyled list-inline text-muted">
                          <li class="list-inline-item m-0">
                            <i class="icofont-google-map ml-1"></i> الرياض
                          </li>
                          <li class="list-inline-item mr-2">
                            <i class="icofont-clock-time ml-1"></i>
                            <span class="d-inline-block"> 14 اغسطس, 2019</span>
                          </li>
                        </ul>

                        <img
                          src="bluebies/images/order-logo-1.png"
                          alt="logo"
                          class="order-logo"
                        />

                        <a
                          href="order-single.html"
                          title="التفاصيل"
                          class="order-btn"
                          ><i class="fa fa-chevron-left"></i> التفاصيل</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mix food">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <a
                              href="#"
                              title="طلب عرض اسعار"
                              class="btn btn-sm btn-outline-light mt-1"
                              >طلب عرض اسعار</a
                            >
                          </div>
                        </div>

                        <h3 class="mt-4 mb-5">تأمين صحي</h3>

                        <ul class="list-unstyled list-inline text-muted">
                          <li class="list-inline-item m-0">
                            <i class="icofont-google-map ml-1"></i> الرياض
                          </li>
                          <li class="list-inline-item mr-2">
                            <i class="icofont-clock-time ml-1"></i>
                            <span class="d-inline-block"> 14 اغسطس, 2019</span>
                          </li>
                        </ul>

                        <img
                          src="bluebies/images/order-logo-1.png"
                          alt="logo"
                          class="order-logo"
                        />

                        <a
                          href="order-single.html"
                          title="التفاصيل"
                          class="order-btn"
                          ><i class="fa fa-chevron-left"></i> التفاصيل</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mix car">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <a
                              href="#"
                              title="طلب عرض اسعار"
                              class="btn btn-sm btn-outline-light mt-1"
                              >طلب عرض اسعار</a
                            >
                          </div>
                        </div>

                        <h3 class="mt-4 mb-5">تأمين صحي</h3>

                        <ul class="list-unstyled list-inline text-muted">
                          <li class="list-inline-item m-0">
                            <i class="icofont-google-map ml-1"></i> الرياض
                          </li>
                          <li class="list-inline-item mr-2">
                            <i class="icofont-clock-time ml-1"></i>
                            <span class="d-inline-block"> 14 اغسطس, 2019</span>
                          </li>
                        </ul>

                        <img
                          src="bluebies/images/order-logo-1.png"
                          alt="logo"
                          class="order-logo"
                        />

                        <a
                          href="order-single.html"
                          title="التفاصيل"
                          class="order-btn"
                          ><i class="fa fa-chevron-left"></i> التفاصيل</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-md-left animate-box right-in mt-3">
                <a
                  href="orders.html"
                  class="btn btn-primary mr-2"
                  title="المزيد من الطلبات"
                  >المزيد من الطلبات</a
                >
              </div>
            </div>

            <div>
              <h2 class="my-4">الاعلانات الخاصة بي</h2>

              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <i class="fa fa-bars font-2x mt-1"></i>
                          </div>
                        </div>

                        <h3 class="mt-4">تأمين صحي</h3>
                        <ul class="list-unstyled list-inline m-0">
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">70</div>
                            <small>المشاهدات</small>
                          </li>
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">60</div>
                            <small>العروض</small>
                          </li>
                        </ul>

                        <a
                          href="#"
                          class="btn btn-outline-primary mt-2"
                          title="شاهد تفاصيل العرض"
                          >شاهد تفاصيل العرض
                          <i class="fa fa-chevron-left mr-1"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <i class="fa fa-bars font-2x mt-1"></i>
                          </div>
                        </div>

                        <h3 class="mt-4">تأمين صحي</h3>
                        <ul class="list-unstyled list-inline m-0">
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">70</div>
                            <small>المشاهدات</small>
                          </li>
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">60</div>
                            <small>العروض</small>
                          </li>
                        </ul>

                        <a
                          href="#"
                          class="btn btn-outline-primary mt-2"
                          title="شاهد تفاصيل العرض"
                          >شاهد تفاصيل العرض
                          <i class="fa fa-chevron-left mr-1"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="animate-box">
                    <div class="card">
                      <div class="card-body py-4">
                        <div class="row">
                          <div class="col">
                            <span class="round-icon"
                              ><i class="fa fa-city"></i
                            ></span>
                          </div>
                          <div class="col text-left">
                            <i class="fa fa-bars font-2x mt-1"></i>
                          </div>
                        </div>

                        <h3 class="mt-4">تأمين صحي</h3>
                        <ul class="list-unstyled list-inline m-0">
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">70</div>
                            <small>المشاهدات</small>
                          </li>
                          <li class="list-inline-item mx-1">
                            <div class="font-2x font-3x">60</div>
                            <small>العروض</small>
                          </li>
                        </ul>

                        <a
                          href="#"
                          class="btn btn-outline-primary mt-2"
                          title="شاهد تفاصيل العرض"
                          >شاهد تفاصيل العرض
                          <i class="fa fa-chevron-left mr-1"></i
                        ></a>
                      </div>
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
import Layout from "./Layout.vue";
import "@fortawesome/fontawesome-free/css/all.css";

import axios from "axios";
export default {
  name: "Home",

  components: {
    Layout,
  },
  beforeUnmount() {},
  created() {},

  data() {
    return {
      editedCoupon: {
        id: null,
        code: "",
        discount: "",
        // Add other fields as needed
      },
      user: {
        first_name: "",
        last_name: "",
        email: "",
        password: "",
        password_confirmation: "",
        // other user properties
      },
      passwordsDoNotMatch: false,
      code: "",
      discount: 0,
      is_active: 0, // Initialize with 0 for unchecked
      successMessage: null,
      errorMessage: null,
      processing: false,
      activeTab: 1,
      coupons: [],
      deleteCouponId: null, // To store the ID of the coupon to delete
      showDeleteConfirmation: false, // To control the visibility of the delete confirmation dialog
      showCouponCodeModal: false, // To control the visibility of the delete confirmation dialog
      showCouponCodeDiscountModal: false,
      isModalVisible: false,
      discount: 0,
      loggedIn: false,
      showDiscountError: false,
    };
  },
  watch: {
    discount(newDiscount) {
      console.log(newDiscount);
      if (newDiscount < 0 || newDiscount > 100) {
        console.log("true", newDiscount);
        this.showDiscountError = true;
      } else {
        this.showDiscountError = false;
      }
    },
  },
  mounted() {
    this.getCoupons();
    // Get the authentication token from where you store it (e.g., Vuex store or local storage)
    const authToken = "Bearer " + localStorage.getItem("token"); // Replace with your storage method
    // Make an API call to fetch user data with the authentication token
    axios
      .get("/api/user", {
        headers: {
          Authorization: authToken,
        },
      })
      .then((response) => {
        // Set the retrieved user data to the 'user' property
        this.user = response.data;
      })
      .catch((error) => {
        console.error("Error fetching user data:", error);
      });
  },

  methods: {
    updateDiscount() {
      // This method is triggered on each input change
      if (this.discount < 0 || this.discount > 100) {
        this.showDiscountError = true;
      } else {
        this.showDiscountError = false;
      }
    },
    showEditCouponModal(couponId) {
      // Fetch coupon details based on the ID and set them to editedCoupon
      // This is just a placeholder; you need to implement the actual logic

      // Assuming you have an array named 'coupons' in your data
      const selectedCoupon = this.coupons.find(
        (coupon) => coupon.id === couponId
      );

      this.editedCoupon = {
        id: selectedCoupon.id,
        code: selectedCoupon.code,
        discount: selectedCoupon.discount,
        is_active: selectedCoupon.is_active === 1, // Assuming is_active is a boolean
      };

      // Show the modal
      $("#editCouponModal").modal("show");
    },

    saveEditedCoupon() {
      // Add logic to save the edited coupon to the server
      // You can use this.editedCoupon to access the edited data
      // After saving, close the modal
      axios
        .post("/api/update-coupons", {
          id: this.editedCoupon.id,
          code: this.editedCoupon.code,
          discount: this.editedCoupon.discount,
          is_active: this.editedCoupon.is_active,
        })
        .then((response) => {
          console.log("Updated Data:", response.data);
          // Handle success response
          const updatedCouponIndex = this.coupons.findIndex(
            (coupon) => coupon.id === this.editedCoupon.id
          );
          if (updatedCouponIndex !== -1) {
            this.coupons = [
              ...this.coupons.slice(0, updatedCouponIndex),
              {
                id: this.editedCoupon.id,
                code: this.editedCoupon.code,
                discount: this.editedCoupon.discount,
                is_active: this.editedCoupon.is_active,
                created_at: this.coupons[updatedCouponIndex].created_at,
              },
              ...this.coupons.slice(updatedCouponIndex + 1),
            ];
          }

          // Show success message
          this.successMessage = "Coupon Updated Successfully.";

          setTimeout(() => {
            this.successMessage = null;
          }, 3000);

          // Optionally, you can close the modal or perform other actions
          $("#editCouponModal").modal("hide");
          // Optionally, you can close the modal or perform other actions
        })
        .catch((error) => {
          // Handle error response
          console.error("Error updating coupon:", error.response.data.error);
          // Optionally, display an error message to the user
        });
      $("#editCouponModal").modal("hide");
    },
    formatDate(dateString) {
      const date = new Date(dateString);
      // Customize the date format as needed
      const options = {
        year: "numeric",
        month: "numeric",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      };
      return date.toLocaleDateString("en-US", options);
    },
    logout() {
      localStorage.removeItem("user");
      localStorage.removeItem("token");
      if (this.$route.path != "/") this.$router.push("/");
      else location.reload();
    },
    confirmDelete(couponId) {
      console.log("Coupon ID:", couponId);
      this.deleteCouponId = couponId;
      this.showDeleteConfirmation = true;
    },

    showCouponCode() {
      this.showCouponCodeModal = true;
    },
    showCouponCodeDiscount() {
      this.showCouponCodeDiscountModal = true;
      axios
        .get("/api/coupon-settings")
        .then((response) => {
          // Assuming your API response has a 'coupon' property
          this.discount = response.data.coupon;
        })
        .catch((error) => {
          console.error("Error fetching coupon data:", error);
        });
    },
    cancelcouponmodal() {
      this.showCouponCodeModal = false;
    },
    cancelDelete() {
      this.deleteCouponId = null;
      this.showDeleteConfirmation = false;
    },
    deleteConfirmed() {
      axios
        .delete(`/api/delete-coupons/${this.deleteCouponId}`)
        .then(() => {
          // Remove the deleted record from the coupons array
          this.coupons = this.coupons.filter(
            (coupon) => coupon.id !== this.deleteCouponId
          );

          // Close the confirmation dialog
          this.cancelDelete();
        })
        .catch((error) => {
          // Handle delete error
          console.error("Error deleting coupon:", error);
          // Optionally show an error message
        });
    },
    switchTab(tabNumber) {
      this.activeTab = tabNumber;
    },

    async createCoupon() {
      this.processing = true;

      try {
        const response = await axios.post("/api/coupons", {
          code: this.code,
          discount: this.discount,
          is_active: this.is_active,
        });

        console.log(response.data.message);

        if (response.data.message === "success") {
          // Close the modal after a successful submission
          $("#myModal").modal("hide");

          this.successMessage = "Coupon added Successfully.";
          this.errorMessage = null;
          this.coupons.push(response.data.coupon);
          this.code = "";
          this.discount = "";
          this.is_active = "";
          setTimeout(() => {
            this.successMessage = null;
          }, 3000);
          // Show a success toast message
          // useToast({
          //     text: 'Coupon added Successfully.',
          //     duration: 3000,
          //     gravity: 'bottom',
          //     position: 'center',
          //     backgroundColor: 'green',
          // }).showToast();

          // Redirect or perform any other actions
        } else {
          this.errorMessage = "Failed to add coupon. Please try again later.";
          setTimeout(() => {
            this.errorMessage = null;
          }, 3000);
          this.successMessage = null;
        }
      } catch (error) {
        this.errorMessage = "The code has already been taken.";
        setTimeout(() => {
          this.errorMessage = null;
        }, 3000);
        this.successMessage = null;
      } finally {
        this.processing = false;
      }
    },
    async SaveCoupon() {
      this.processing = true;

      try {
        const response = await axios.post("/api/save-coupon", {
          discount: this.discount,
        });
        console.log(response.data.message);
        if (response.data.message === "success") {
          // Close the modal after a successful submission
          $("#myModalDiscount").modal("hide");
          this.successMessage = "Add Registration Discount Successfully.";
          this.errorMessage = null;
          this.discount = "";
          setTimeout(() => {
            this.successMessage = null;
          }, 3000);
        } else {
          this.errorMessage = "Failed to add coupon. Please try again later.";
          setTimeout(() => {
            this.errorMessage = null;
          }, 3000);
          this.successMessage = null;
        }
      } catch (error) {
        this.errorMessage = "The code has already been taken.";
        setTimeout(() => {
          this.errorMessage = null;
        }, 3000);
        this.successMessage = null;
      } finally {
        this.processing = false;
      }
    },
    async getCoupons() {
      axios
        .get(`/api/get-coupons`)
        .then((response) => {
          console.log(response.status);
          this.coupons = response.data; // Store the retrieved coupons in the data property
        })
        .catch((error) => {
          console.error("Error getting coupons:", error);
          this.errorMessage = "Error getting coupons"; // Set an error message
        });
    },

    UpdateUserInfo() {
      const authToken = "Bearer " + localStorage.getItem("token"); // Replace with your storage method
      // Check if passwords match before making the API request
      if (this.user.password !== this.user.password_confirmation) {
        this.passwordsDoNotMatch = true;
        return;
      }
      // Clear the error message if passwords match
      this.passwordsDoNotMatch = false;

      // Make the API request
      axios
        .put(
          "/api/user/update",
          {
            first_name: this.user.first_name,
            last_name: this.user.last_name,
            password: this.user.password,
            password_confirmation: this.user.password_confirmation,
          },
          {
            headers: {
              Authorization: authToken,
            },
          }
        )
        .then((response) => {
          // Handle success, show a success message or redirect
          this.successMessage = "User Account updated Successfully.";
          this.user.password = ""; // Clear the password field
          this.user.password_confirmation = ""; // Clear the password confirmation field
          setTimeout(() => {
            this.successMessage = null;
          }, 3000);
        })
        .catch((error) => {
          // Handle error, show an error message or log the error
          console.error("Error updating user:", error);
          this.errorMessage =
            "The password field must be at least 8 characters";
          setTimeout(() => {
            this.errorMessage = null;
          }, 3000);
        });
    },
  },
  watch: {
    // Reset the error message when the user updates the password or confirmation
    "user.password": function () {
      this.passwordsDoNotMatch = false;
    },
    "user.password_confirmation": function () {
      this.passwordsDoNotMatch = false;
    },
  },
  computed: {
    formattedCreatedAt() {
      return moment(this.created_at).format("MMMM Do YYYY, h:mm:ss a");
    },
    mappedIsActiveValue() {
      return this.is_active ? 1 : 0;
    },
  },
};
</script>
<style scoped>
/**
 * Fonts
 */

@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
/* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap'); */

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type="number"] {
  -moz-appearance: textfield;
}

::placeholder {
  color: white !important;
  opacity: 1;
  /* Firefox */
}

::-ms-input-placeholder {
  /* Edge 12-18 */
  color: white !important;
}

:-ms-input-placeholder {
  /* Edge 19+ */
  color: white !important;
}

/* Chrome, Safari, and Opera */
input::placeholder {
  color: white !important;
}

/**
 * Article Block
 */
.article-block {
  text-align: center;
}

.article-block .entry-content > p {
  color: #666;
}

/**
 * Tabs Container
 */
.tabs-container {
  padding: 2rem;
}

/**
 * Tabs Block
 */
.tabs-block {
  display: flex;
  align-items: center;
  justify-content: center;
}

/**
 * Tabs
 */
.tabs {
  display: flex;
}

.tabs > ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
}

.tabs > ul li {
  display: block;
}

.tabs > ul li:not(:last-child) {
  border-bottom: 1px solid #262626;
}

.tabs > ul li a,
.tabs > ul li a:visited {
  display: flex;
  border-bottom: none;
  text-decoration: none;
  background-color: #cae7f7;
  color: black;
  padding: 1rem 1.5rem;
  transition: all 0.2s ease-in-out;
  word-wrap: break-word;
  cursor: pointer;
}

.tabs > ul li a:hover,
.tabs > ul li a:focus,
.tabs > ul li a:active {
  border-bottom: none;
  outline: 0;
}

.tabs > ul li a.active {
  background-color: #000;
  color: white;
}

.tabs > ul li a:hover:not(.active) {
  color: #0067b8;
}

.tabs > ul li a > span {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.tabs > ul li a > span.tab-label {
  display: none;
}

.tabs section {
  width: 85%;
  background-color: #fff;
  padding: 1rem;
  display: none;
  word-wrap: break-word;
  border-bottom: 6px solid #0067b8;
}

.tabs section > * {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.2s, transform 0.2s;
}

.tabs section > *:nth-child(1) {
  transition-delay: 0.2s;
}

.tabs section > *:nth-child(2) {
  transition-delay: 0.3s;
}

.tabs section > *:nth-child(3) {
  transition-delay: 0.4s;
}

.tabs section > *:nth-child(4) {
  transition-delay: 0.5s;
}

.tabs section > *:nth-child(5) {
  transition-delay: 0.6s;
}

.tabs section > *:nth-child(6) {
  transition-delay: 0.7s;
}

.tabs section > *:nth-child(7) {
  transition-delay: 0.8s;
}

.tabs section > *:nth-child(8) {
  transition-delay: 0.9s;
}

.tabs section > *:nth-child(9) {
  transition-delay: 1s;
}

.tabs section > *:nth-child(10) {
  transition-delay: 1.1s;
}

.tabs section > *:nth-child(11) {
  transition-delay: 1.2s;
}

.tabs section > *:nth-child(12) {
  transition-delay: 1.3s;
}

.tabs section > *:nth-child(13) {
  transition-delay: 1.4s;
}

.tabs section > *:nth-child(14) {
  transition-delay: 1.5s;
}

.tabs section > *:nth-child(15) {
  transition-delay: 1.6s;
}

.tabs section > *:nth-child(16) {
  transition-delay: 1.7s;
}

.tabs section > *:nth-child(17) {
  transition-delay: 1.8s;
}

.tabs section > *:nth-child(18) {
  transition-delay: 1.9s;
}

.tabs section > *:nth-child(19) {
  transition-delay: 2s;
}

.tabs section > *:nth-child(20) {
  transition-delay: 2.1s;
}

.tabs section.active {
  display: block;
}

.tabs section.active-content > * {
  opacity: 1;
  transform: translateY(0);
}

@media (min-width: 576px) {
  .tabs > ul {
    width: 150px;
  }

  .tabs > ul li a {
    flex-wrap: wrap;
  }

  .tabs > ul li a > span {
    width: 100%;
  }

  .tabs > ul li a > span.tab-label {
    width: 100%;
    display: block;
    margin-top: 0.2rem;
  }

  .tabs section {
    width: calc(100% - 150px);
    padding: 0rem 1rem;
  }
}

@media (min-width: 768px) {
  body {
    font-size: 1.125rem;
  }

  .tabs-container {
    padding: 4rem 4rem;
  }
}

@media (min-width: 992px) {
  .tabs {
    width: 1200px;
  }
}

.modal-header {
  display: block !important;
}

.form-control {
  background-color: #4472c4 !important;
}

.hr_line {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
  border: 0 !important;
  border-top: 2px solid rgb(0 0 0 / 38%) !important;
}
</style>
