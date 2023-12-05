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

    <!--===============================
    CONTENT
===================================-->

    <section class="content-holder pb-5 move-up-2x">
      <div class="container">
        <UserTabs />

        <div class="row">
          <div class="col-md-4 col-lg-3">
            <a
              href="dashboard-offer-add.html"
              title="إضافة عرض جديد"
              class="btn btn-block btn-primary"
              ><i class="fa fa-plus fa-pull-left mt-1"></i> إضافة عرض جديد</a
            >

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
                <div class="col-md-6"><h2 class="my-4">العروض</h2></div>
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
          </div>
        </div>
      </div>
    </section>
  </layout>
</template>
<script>
import Layout from "../Layout.vue";
import "@fortawesome/fontawesome-free/css/all.css";
import UserTabs from "./UserTabs.vue";

import axios from "axios";
export default {
  name: "Dashboard Support",

  components: {
    Layout,
    UserTabs
  },
};
</script>
