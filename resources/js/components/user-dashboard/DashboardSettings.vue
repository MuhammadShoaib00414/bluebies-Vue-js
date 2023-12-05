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
              <div
                class="nav flex-column mb-4"
                id="all-settings-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <a
                  class="nav-link border-bottom active"
                  id="settings-tab"
                  data-toggle="pill"
                  href="#settings"
                  role="tab"
                  aria-controls="settings"
                  aria-selected="true"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-gear font-1x ml-1"></span>إعدادات
                      عامة</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="security-tab"
                  data-toggle="pill"
                  href="#security"
                  role="tab"
                  aria-controls="security"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-lock font-1x ml-1"></span>إعدادات
                      الحماية</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="share-tab"
                  data-toggle="pill"
                  href="#share"
                  role="tab"
                  aria-controls="share"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-share font-1x ml-1"></span>إعدادات
                      المشاركة</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="payment-tab"
                  data-toggle="pill"
                  href="#payment"
                  role="tab"
                  aria-controls="payment"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-files-stack font-1x ml-1"></span
                      >إعدادات الدفع</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="interest-tab"
                  data-toggle="pill"
                  href="#interest"
                  role="tab"
                  aria-controls="interest"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-tag font-1x ml-1"></span>إعدادات
                      الاهتمامات</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="subscribe-tab"
                  data-toggle="pill"
                  href="#subscribe"
                  role="tab"
                  aria-controls="subscribe"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-money font-1x ml-1"></span>إدارة
                      الاشتراكات المدفوعة</span
                    >
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link border-bottom"
                  id="offers-tab"
                  data-toggle="pill"
                  href="#offers"
                  role="tab"
                  aria-controls="offers"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-refresh font-1x ml-1"></span>العروض
                      الاوتوماتيكية</span
                    >
                    <span class="badge badge-pill badge-info">مدفوعة</span>
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
                <a
                  class="nav-link"
                  id="advs-tab"
                  data-toggle="pill"
                  href="#advs"
                  role="tab"
                  aria-controls="advs"
                  aria-selected="false"
                >
                  <div
                    class="d-flex justify-content-between align-items-center py-3"
                  >
                    <span
                      ><span class="icofont-book-mark font-1x ml-1"></span>إدارة
                      الاعلانات</span
                    >
                    <span class="badge badge-pill badge-info">مدفوعة</span>
                    <i class="fa fa-chevron-left"></i>
                  </div>
                </a>
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

            <div class="tab-content" id="all-settings-tabContent">
              <div
                class="tab-pane fade show active"
                id="settings"
                role="tabpanel"
                aria-labelledby="settings-tab"
              >
                <h3 class="mt-5 mb-3">الاعدادات العامة</h3>
                <form @submit.prevent="updateSettings">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100"
                        >اسم الشركة
                        <input
                          type="text"
                          placeholder="اسم الشركة"
                          class="border rounded-0 mt-1"
                          v-model="user.companyname"
                        />
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-2">
                      <label class="width-100"
                        >الاسم الأول
                        <input
                          type="text"
                          placeholder="الاسم الأول"
                          class="border rounded-0 mt-1"
                          v-model="user.first_name"
                        />
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100"
                        >آخراسم
                        <input
                          type="text"
                          placeholder="آخراسم"
                          class="border rounded-0 mt-1"
                          v-model="user.last_name"
                        />
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100"
                        >البريد الالكتروني
                        <input
                          type="email"
                          placeholder="mail@email.com"
                          class="border rounded-0 mt-1"
                          v-model="user.email"
                          disabled
                        />
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100"
                        >رقم التواصل
                        <input
                          type="tel"
                          placeholder="+996123456789"
                          class="border rounded-0 mt-1"
                          v-model="user.phonenumber"
                        />
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100"
                        >الدولة
                        <input
                          type="text"
                          placeholder="الدولة"
                          class="border rounded-0 mt-1"
                          v-model="user.country"
                        />
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="width-100"
                        >عنوان الاقامة
                        <input
                          type="text"
                          placeholder="الرياض, المملكة العربية السعودية"
                          class="border rounded-0 mt-1"
                          v-model="user.address"
                        />
                      </label>
                    </div>
                  </div>
                  <div>
                    <label class="radio-holder">
                      <input
                        type="radio"
                        name="userType"
                        value="provider"
                        v-model="user.type"
                      />
                      <span class="radio-icon"
                        ><i class="fa fa-check"></i
                      ></span>
                      <span>مقدم الخدمة</span>
                    </label>
                    <label class="radio-holder mr-2">
                      <input
                        type="radio"
                        name="userType"
                        value="request"
                        v-model="user.type"
                      />
                      <span class="radio-icon"
                        ><i class="fa fa-check"></i
                      ></span>
                      <span>طالب الخدمة</span>
                    </label>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary mt-3">
                      تحديث بيانات حسابك
                    </button>
                  </div>
                </form>
                <br />
                <div
                  v-if="showSuccessMessage"
                  class="success-message alert alert-success w-50"
                >
                  تم تحديث الإعدادات بنجاح!
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="security"
                role="tabpanel"
                aria-labelledby="security-tab"
              >
                <h3 class="mt-5 mb-3">الاعدادات الحماية</h3>
                <p>تغيير كلمة المرور</p>
                <form @submit.prevent="updatePassword">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100">
                        كلمة المرور الحالية
                        <input
                          type="password"
                          placeholder="كلمة المرور الحالية"
                          class="border rounded-0 mt-1"
                          v-model="currentPassword"
                        />
                      </label>
                      <p v-if="errors.currentPassword" class="error-message">
                        {{ errors.currentPassword }}
                      </p>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100">
                        كلمة المرور الجديدة
                        <input
                          type="password"
                          placeholder="كلمة المرور الجديدة"
                          class="border rounded-0 mt-1"
                          v-model="newPassword"
                        />
                      </label>
                      <p v-if="errors.newPassword" class="error-message">
                        {{ errors.newPassword }}
                      </p>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                      <label class="width-100">
                        تأكيد كلمة المرور
                        <input
                          type="password"
                          placeholder="تأكيد كلمة المرور"
                          class="border rounded-0 mt-1"
                          v-model="confirmPassword"
                        />
                      </label>
                      <p v-if="errors.confirmPassword" class="error-message">
                        {{ errors.confirmPassword }}
                      </p>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary mt-3">
                      تحديث كلمة المرور
                    </button>
                  </div>
                </form>
                <p
                  v-if="successMessage"
                  class="success-message alert alert-success w-50"
                >
                  {{ successMessage }}
                </p>
                <p
                  v-if="errorMessage"
                  class="error-message alert alert-danger w-50"
                >
                  {{ errorMessage }}
                </p>
              </div>

              <div
                class="tab-pane fade"
                id="share"
                role="tabpanel"
                aria-labelledby="share-tab"
              >
                <h3 class="mt-5 mb-3">الاعدادات المشاركة</h3>
                <p class="m-0">دعوة مشارك جديد</p>
                <form method="post" @submit.prevent="InvitationForm">
                  <div class="row m-0">
                    <div class="col-8 col-sm-6 col-lg-4 p-0">
                      <label class="width-100">
                        <input
                          type="email"
                          placeholder="اكتب البريد الالكتروني للمشارك لدعوته"
                          class="border rounded-0 mt-1"
                          v-model="email"
                        />
                      </label>
                      <span v-if="errors.email" class="text-danger">{{
                        errors.email
                      }}</span>
                    </div>
                    <div class="col-4 col-sm-2 p-0">
                      <button
                        type="submit"
                        class="btn btn-success mt-1 rounded-0"
                        style="height: 40px"
                      >
                        دعوة
                      </button>

                      <div
                        v-if="showSuccessMessage"
                        class="success-message alert alert-success w-50"
                      >
                        تم تحديث الإعدادات بنجاح!
                      </div>
                    </div>
                  </div>
                </form>

                <h5 class="mt-4">المشاركين</h5>
                <table class="table border">
                  <thead class="thead-light">
                    <tr>
                      <th>الاسم</th>
                      <th>البريد الالكتروني</th>
                      <th>تاريخ الدعوة</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="invitation in invitations" :key="invitation.id">
                      <td>{{ invitation.receiver_name }}</td>
                      <td>{{ invitation.receiver_email }}</td>
                      <td>{{ invitation.invitation_date }}</td>
                      <td>
                        <a
                          class="text-danger"
                          title="حذف"
                          @click="deleteConfirmed(invitation.id)"
                        >
                          <i class="icofont-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div
                class="tab-pane fade"
                id="payment"
                role="tabpanel"
                aria-labelledby="payment-tab"
              >
                <h3 class="mt-5 mb-3">الاعدادات الدفع</h3>
                <h5 class="mt-4">الكروت المضافة مسبقا</h5>
                <div
                  v-for="payment in payments"
                  :key="payment.id"
                  class="card mb-3"
                >
                  <div class="card-body p-2">
                    <div class="row align-items-center">
                      <div class="col-sm-6">
                        <!-- Assuming payment.card_image_url is the URL to the card image -->
                        <img src="bluebies/images/mastercard.png" alt=".." />
                        <span>{{ formatCardNumber(payment.card_number) }}</span>
                      </div>
                      <div class="col-sm-6 text-left">
                        <span
                          v-if="payment.is_primary"
                          class="btn btn-outline-success"
                        >
                          البطاقة الاساسية
                        </span>
                        {{payment.id}}  
                        <a

                          @click="deletePayment(payment.id)"
                          class="text-danger px-2"
                        >
                          <i class="icofont-trash"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="card">
                  <div class="card-body p-2">
                    <div class="row align-items-center">
                      <div class="col-sm-6">
                        <img src="bluebies/images/mastercard.png" alt=".." />
                        <span>1234 .... .... ....</span>
                      </div>
                      <div class="col-sm-6 text-left">
                        <a
                          href="#"
                          title="اختر كالبطاقة الاساسية"
                          class="btn btn-outline-light"
                          >اختر كالبطاقة الاساسية</a
                        >
                        <a href="#" title="حذف" class="text-danger px-2"
                          ><i class="icofont-trash"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div> -->

                <h5 class="mt-4">إضافة كارت دفع جديد</h5>
                <form @submit.prevent="handleSubmit">
                  <div class="row col-lg-8 p-0">
                    <div class="col-12">
                      <label class="width-100"
                        >رقم الكارت
                        <input
                          v-model="cardNumber"
                          type="number"
                          placeholder="123456789"
                          class="border rounded-0 mt-1"
                        />
                      </label>
                    </div>
                    <div class="col-6 col-lg-4">
                      <label class="width-100">تاريخ الاصدار</label>
                      <input
                        v-model="expiryDate"
                        type="date"
                        class="border rounded-0 mt-1"
                      />
                    </div>
                    <div class="col-6 col-lg-4 pt-2">
                      <label class="width-100">
                        <select
                          v-model="expiryYear"
                          class="border rounded-0"
                          style="margin-top: 1.9rem"
                        >
                          <option value="" disabled selected>اختر السنة</option>
                          <option v-for="year in years" :key="year">
                            {{ year }}
                          </option>
                        </select>
                      </label>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-1">
                      <label class="width-100"
                        >CVV (رقم سري)
                        <input
                          v-model="cvv"
                          type="number"
                          placeholder="123"
                          class="border rounded-0 mt-1"
                        />
                      </label>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary mt-2">
                    إضافة كارت الدفع
                  </button>
                </form>
                <div
                  v-if="showSuccessMessage"
                  class="success-message alert alert-success w-50"
                >
                  تم تحديث الإعدادات بنجاح!
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="interest"
                role="tabpanel"
                aria-labelledby="interest-tab"
              >
                <h3 class="mt-5 mb-3">الاعدادات الاهتمامات</h3>
                <form method="post" action="#">
                  <label class="width-100"
                    >الاماكن المفضلة
                    <select
                      class="border rounded-0 mt-1 tag-select width-100"
                      multiple="multiple"
                    >
                      <option selected>الرياض</option>
                      <option selected>جدة</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </label>
                  <label class="width-100"
                    >القطاعات المفضلة
                    <select
                      class="border rounded-0 mt-1 tag-select width-100"
                      multiple="multiple"
                    >
                      <option selected>قطاع المطاعم</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </label>
                  <div>
                    <button type="submit" class="btn btn-primary mt-3">
                      حفظ الاهتمامات
                    </button>
                  </div>
                </form>
              </div>

              <div
                class="tab-pane fade"
                id="subscribe"
                role="tabpanel"
                aria-labelledby="subscribe-tab"
              >
                <h3 class="mt-5 mb-3">إدارة الاشتراكات المدفوعة</h3>

                <div class="table-responsive">
                  <div class="min-width">
                    <div class="icons-header bg-primary text-white">
                      <ul
                        class="list-unstyled list-inline m-0 d-flex justify-content-around"
                      >
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="far fa-window-restore"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-code-branch"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="far fa-paper-plane"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-chart-line"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-home"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="far fa-square"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="far fa-file"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-user-friends"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-th-large"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-columns"></i>
                        </li>
                        <li
                          class="list-inline-item"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="بنر اعلى لوحة التحكم - 5 اشهر"
                        >
                          <i class="fa fa-star"></i>
                        </li>
                      </ul>
                    </div>
                    <div class="card mt-0">
                      <div class="card-body p-3 d-flex">
                        <div class="subscribe-type">
                          <p class="mb-2">الباقة الفضية</p>
                          <span class="font-2x font-3x">1000</span><br /><small
                            >ريال/السنة</small
                          >
                          <div>
                            <a
                              href="#"
                              class="btn btn-sm btn-outline-primary"
                              title="الاشتراك فالخطة"
                              >الاشتراك فالخطة</a
                            >
                          </div>
                        </div>
                        <ul
                          class="list-unstyled list-inline m-0 d-flex justify-content-between align-content-stretch flex-grow-1 text-center"
                        >
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card mt-0 active-plan">
                      <div class="card-body p-3 d-flex">
                        <div class="subscribe-type">
                          <p class="mb-2">الباقة الذهبية</p>
                          <span class="font-2x font-3x">2500</span><br /><small
                            >ريال/السنة</small
                          >
                          <div>
                            <a
                              href="#"
                              class="btn btn-sm btn-outline-primary"
                              title="الاشتراك فالخطة"
                              >الاشتراك فالخطة</a
                            >
                          </div>
                        </div>
                        <ul
                          class="list-unstyled list-inline m-0 d-flex justify-content-around align-content-stretch flex-grow-1"
                        >
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                        </ul>
                      </div>

                      <div class="card move-down">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-5 text-muted pt-2">
                              <i class="fa fa-clock ml-1"></i> مشترك منذ 23
                              يناير 2019
                            </div>
                            <div class="col-sm-7 text-left">
                              <a
                                href="#"
                                title=""
                                class="btn btn-outline-primary"
                                >تجديد الاشتراك</a
                              >
                              <a href="#" title="" class="text-danger p-2">
                                إلغاء الاشتراك<i
                                  class="fa fa-times-circle mr-1"
                                ></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mt-0">
                      <div class="card-body p-3 d-flex">
                        <div class="subscribe-type">
                          <p class="mb-2">الباقة البلاتينيوم</p>
                          <span class="font-2x font-3x">5000</span><br /><small
                            >ريال/السنة</small
                          >
                          <div>
                            <a
                              href="#"
                              class="btn btn-sm btn-outline-primary"
                              title="الاشتراك فالخطة"
                              >الاشتراك فالخطة</a
                            >
                          </div>
                        </div>
                        <ul
                          class="list-unstyled list-inline m-0 d-flex justify-content-around align-content-stretch flex-grow-1"
                        >
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-times-circle text-danger"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card mt-0">
                      <div class="card-body p-3 d-flex">
                        <div class="subscribe-type">
                          <p class="mb-2">الباقة الماسية</p>
                          <span class="font-2x font-3x">7500</span><br /><small
                            >ريال/السنة</small
                          >
                          <div>
                            <a
                              href="#"
                              class="btn btn-sm btn-outline-primary"
                              title="الاشتراك فالخطة"
                              >الاشتراك فالخطة</a
                            >
                          </div>
                        </div>
                        <ul
                          class="list-unstyled list-inline m-0 d-flex justify-content-around align-content-stretch flex-grow-1"
                        >
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                          <li
                            class="list-inline-item d-flex align-items-center justify-content-center"
                          >
                            <i class="far fa-check-circle text-success"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="offers"
                role="tabpanel"
                aria-labelledby="offers-tab"
              >
                <h3 class="mt-5 mb-3">اعدادات العروض الاوتوماتيكية</h3>
                <h5 class="mt-4">العروض المضافة سابقا</h5>
                <div class="card">
                  <div class="card-body p-2">
                    <div class="row align-items-center">
                      <div class="col-10">عرض التأمين 1</div>
                      <div class="col-2 text-left">
                        <a href="#" title="حذف" class="text-danger px-2"
                          ><i class="icofont-trash"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>

                <h5 class="mt-4">العروض المراد اضافتها</h5>
                <p class="m-0">
                  حدد عروض الاسعار والاهتمام ليتم اضافتها بشكل تلقائي على
                  الطلبات
                </p>
                <div class="card">
                  <div class="card-body">
                    <form method="post" action="#">
                      <label class="width-100"
                        >اسم العرض
                        <input
                          type="text"
                          placeholder="اكتب عنوان العرض"
                          class="border rounded-0 mt-1"
                        />
                      </label>
                      <div class="files-upload-block">
                        <label class="input-style width-100">
                          <input
                            type="file"
                            class="file-uploader single d-none"
                            accept="image/*"
                          />
                          <i class="far fa-file-alt font-1x"></i><br />رفع الملف
                          التعريفي للشركة
                        </label>
                      </div>

                      <div class="row mb-2">
                        <div class="col-6">عرض السعر</div>
                        <div class="col-6 text-left">
                          <a
                            href="#"
                            title=""
                            class="btn btn-sm btn-outline-dark"
                            >ارفع ملف xlsx<i class="fa fa-file-excel mr-1"></i
                          ></a>
                        </div>
                      </div>
                      <table class="table border">
                        <thead class="thead-light">
                          <tr>
                            <th>اسم الخدمة</th>
                            <th>سعر الخدمة</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>اسم الخدمة</td>
                            <td>400 ريال</td>
                          </tr>
                          <tr>
                            <td>اسم الخدمة</td>
                            <td>400 ريال</td>
                          </tr>
                        </tbody>
                      </table>

                      <h5 class="mt-4">اهتمامتك عروضك</h5>
                      <p class="m-0">
                        الاهتمامات المراد اضافة العروض فيها عند وجود طلبات فيها
                      </p>
                      <label class="width-100"
                        >الاماكن المفضلة
                        <select
                          class="border rounded-0 mt-1 tag-select width-100"
                          multiple="multiple"
                        >
                          <option selected>الرياض</option>
                          <option selected>جدة</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </label>
                      <label class="width-100"
                        >القطاعات المفضلة
                        <select
                          class="border rounded-0 mt-1 tag-select width-100"
                          multiple="multiple"
                        >
                          <option selected>قطاع المطاعم</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </label>

                      <div>
                        <button
                          type="submit"
                          class="btn btn-outline-success mt-3"
                        >
                          حفظ العرض
                        </button>
                      </div>
                    </form>
                  </div>
                </div>

                <a href="#" class="btn btn-primary" title="إضافة اعلان اخر"
                  >إضافة عرض اخر</a
                >
              </div>

              <div
                class="tab-pane fade"
                id="advs"
                role="tabpanel"
                aria-labelledby="advs-tab"
              >
                <h3 class="mt-5 mb-3">إدارة الاعلانات</h3>
                <h5 class="mt-4">الاعلانات المضافة سابقا</h5>
                <div class="card">
                  <div class="card-body p-2">
                    <div class="row align-items-center">
                      <div class="col-10">الاعلان علوي - صفحة الطلبات</div>
                      <div class="col-2 text-left">
                        <a href="#" title="حذف" class="text-danger px-2"
                          ><i class="icofont-trash"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>

                <h5 class="mt-4">إضافة اعلان</h5>
                <p class="m-0">اضف بيانات الاعلان وحدد مكان الظهور</p>
                <div class="card">
                  <div class="card-body">
                    <form method="post" action="#">
                      <label class="width-100"
                        >عنوان الاعلان
                        <input
                          type="text"
                          placeholder="اكتب عنوان العرض"
                          class="border rounded-0 mt-1"
                        />
                      </label>
                      <div class="files-upload-block">
                        <label class="input-style width-100">
                          <input
                            type="file"
                            class="file-uploader single d-none"
                            accept="image/*"
                          />
                          <i class="far fa-file-alt font-1x"></i><br />رفع صورة
                          الاعلان
                        </label>
                      </div>
                      <label class="width-100"
                        >رابط الاعلان
                        <input
                          type="text"
                          placeholder="اكتب رابط الاعلان"
                          class="border rounded-0 mt-1"
                        />
                      </label>
                      <label class="width-100"
                        >موقع الاعلان
                        <select class="border rounded-0 mt-1 width-100">
                          <option>اختر من الاماكن المتاحة بالموقع</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </label>
                      <div>
                        <button
                          type="submit"
                          class="btn btn-outline-success mt-3"
                        >
                          إضافة الاعلان
                        </button>
                      </div>
                    </form>
                  </div>
                </div>

                <a href="#" class="btn btn-primary" title="إضافة اعلان اخر"
                  >إضافة اعلان اخر</a
                >
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
import UserTabs from "./UserTabs";
import "@fortawesome/fontawesome-free/css/all.css";

import axios from "axios";
export default {
  name: "Dashboard Settings",

  components: {
    Layout,
    UserTabs
  },
  beforeUnmount() {},
  created() {},

  data() {
    return {
      payments: [],
      currentPassword: "",
      newPassword: "",
      confirmPassword: "",
      errors: {},
      successMessage: false,
      errorMessage: false,
      showSuccessMessage: false, // Flag to show the success message
      email: "",
      editedCoupon: {
        id: null,
        code: "",
        discount: "",
        // Add other fields as needed
      },
      user: {
        id: "",
        first_name: "",
        last_name: "",
        email: "",
        phonenumber: "",
        address: "",
        country: "",
        companyname: "",
        type: "request",

        // other user properties
      },

      invitations: "",
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
      cardNumber: "",
      expiryDate: "",
      expiryYear: "",
      cvv: "",

      years: [], // Array to store years
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
    this.getpayments();
    this.generateYearOptions();
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
    axios
      .get("/api/get-invitation", {})
      .then((response) => {
        // Set the retrieved user data to the 'user' property
        this.invitations = response.data;
      })
      .catch((error) => {
        console.error("Error fetching user data:", error);
      });
  },

  methods: {
    generateYearOptions() {
      const currentYear = new Date().getFullYear();
      for (let i = 0; i < 10; i++) {
        this.years.push(currentYear + i); // Generate 10 future years
      }
    },
    updatePassword() {
      // Retrieve data from local storage
      const dataFromLocalStorage = localStorage.getItem("user"); // Replace 'user' with your storage key

      // Include the data from local storage in the payload
      const payload = {
        localStorageData: dataFromLocalStorage,
        currentPassword: this.currentPassword,
        newPassword: this.newPassword,
        confirmPassword: this.confirmPassword,
      };

      axios
        .post("api/update-password", payload)
        .then((response) => {
          console.log(response);

          // Reset form fields after a successful update
          this.currentPassword = "";
          this.newPassword = "";
          this.confirmPassword = "";

          // Show success message
          this.successMessage = "تم تحديث كلمة السر بنجاح";
          setTimeout(() => {
            this.successMessage = null;
          }, 5000);

          // Clear error message
          this.errorMessage = null;
        })
        .catch((error) => {
          if (error.response && error.response.status === 422) {
            // Handle validation errors
            this.errors = error.response.data.errors;
            this.errorMessage = "حدث خطأ أثناء تحديث كلمة المرور";
          } else {
            // Handle other errors
            console.error("Error updating password:", error);
            this.errorMessage = "حدث خطأ أثناء تحديث كلمة المرور";
          }

          // Clear success message
          this.successMessage = null;
        });
    },
    handleSubmit() {
      const formData = {
        card_number: this.cardNumber,
        expiry_date: this.expiryDate,
        expiry_year: this.expiryYear,
        cvv: this.cvv,
      };

      // Make an API call using Axios (assuming Axios is installed)
      // Replace 'apiEndpoint' with your Laravel API endpoint
      axios
        .post("api/add-payment", formData)
        .then((response) => {
          this.cardNumber = "";
          this.expiryDate = "";
          this.expiryYear = "";
          this.cvv = "";
          console.log("Payment created:", response.data);
          this.payments.push(response.data.payment);
          // Handle success as needed
          this.showSuccessMessage = "تم إنشاء الدفع بنجاح.";
          this.showSuccessMessage = true;
          setTimeout(() => {
            this.showSuccessMessage = null;
          }, 5000);
        })
        .catch((error) => {
          console.error("Error creating payment:", error.response.data);
          // Handle errors
        });
    },

    InvitationForm() {
      if (!this.email || !this.email.includes("@")) {
        setTimeout(() => {
          this.errors.email = "يرجى إدخال بريد إلكتروني صالح";
        }, 5000);

        return;
      }
      // Retrieve data from local storage
      const dataFromLocalStorage = localStorage.getItem("user"); // Replace 'user' with your storage key

      // Include the data from local storage in the payload
      const payload = {
        localStorageData: dataFromLocalStorage,
        email: this.email,
      };

      axios
        .post("api/Invitation-sent", payload)
        .then((response) => {
          console.log(response);

          // Reset form fields after a successful update
          this.email = "";

          // Show success message

          this.successMessage = "User Account updated Successfully.";
          this.showSuccessMessage = true;
          setTimeout(() => {
            this.showSuccessMessage = null;
          }, 5000);

          // Clear error message
          this.errorMessage = null;
        })
        .catch((error) => {
          if (error.response && error.response.status === 422) {
            // Handle validation errors
            this.errors = error.response.data.errors;
            this.errorMessage = "حدث خطأ أثناء تحديث كلمة المرور";
          } else {
            // Handle other errors
            console.error("Error updating password:", error);
            this.errorMessage = "حدث خطأ أثناء تحديث كلمة المرور";
          }

          // Clear success message
          this.successMessage = null;
        });
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
    getpayments() {
      axios
        .get("/api/payment")
        .then((response) => {
          this.payments = response.data.payments; // Assuming API response contains payments array
          console.log(this.payments);
        })
        .catch((error) => {
          console.error("Error fetching payments:", error);
        });
    },
    formatCardNumber(cardNumber) {
      if (typeof cardNumber === "string" && cardNumber.length >= 4) {
        // Use slice only if cardNumber is a string and has a length of at least 4
        return cardNumber.slice(-4).padStart(cardNumber.length, "*");
      }
      return "4141";
    },
 
    cancelcouponmodal() {
      this.showCouponCodeModal = false;
    },
    cancelDelete() {
      this.deleteCouponId = null;
      this.showDeleteConfirmation = false;
    },

    deleteConfirmed(id) {
      if (confirm("Are you sure you want to delete this invitation?")) {
        console.log(this.deleteInvitationId);
        console.log(id);

        axios
          .delete(`/api/delete-invitation/${id}`)
          .then(() => {
            // Remove the deleted record from the invitations array
            this.invitations = this.invitations.filter(
              (invitation) => invitation.id !== this.deleteInvitationId
            );

            // Close the confirmation dialog or do any necessary cleanup
            // For example, if using a modal for confirmation:
            this.cancelDelete(); // Assuming cancelDelete() closes the modal
          })
          .catch((error) => {
            // Handle delete error
            console.error("Error deleting invitation:", error);
            // Optionally show an error message
          });
      }
    },
    switchTab(tabNumber) {
      this.activeTab = tabNumber;
    },
    deletePayment(paymentId) {
    // alert(paymentId);
    axios
      .delete(`/api/payments/${paymentId}`)
      .then((response) => {
        // Remove the deleted payment from the local array
        this.payments = this.payments.filter(
          (payment) => payment.id !== paymentId
        );
        console.log("Payment deleted:", response.data);
      })
      .catch((error) => {
        console.error("Error deleting payment:", error);
      });
      if (confirm("Are you sure you want to delete this invitation?")) {
       
        axios
        .delete(`/api/payments/${paymentId}`)
          .then(() => {
            // Remove the deleted record from the invitations array
            this.payments = this.payments.filter(
           (payment) => payment.id !== paymentId
        );

            // Close the confirmation dialog or do any necessary cleanup
            // For example, if using a modal for confirmation:
            this.cancelDelete(); // Assuming cancelDelete() closes the modal
          })
          .catch((error) => {
            // Handle delete error
            console.error("Error deleting invitation:", error);
            // Optionally show an error message
          });
      }
  },
    updateSettings() {
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
          "/api/user/update-general-setting",
          {
            first_name: this.user.first_name,
            last_name: this.user.last_name,
            phonenumber: this.user.phonenumber,
            address: this.user.address,
            country: this.user.country,
            companyname: this.user.companyname,
            type: this.user.type,
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
          this.showSuccessMessage = true;
          setTimeout(() => {
            this.showSuccessMessage = null;
          }, 5000);
        })
        .catch((error) => {
          // Handle error, show an error message or log the error
          console.error("Error updating user:", error);
          this.errorMessage =
            "The password field must be at least 8 characters";
          setTimeout(() => {
            this.errorMessage = null;
          }, 10000);
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
<style>
.error-message {
  color: red;
  font-size: 0.9em;
  margin-top: 5px;
}

.success-message {
  color: green;
  font-size: 1.1em;
  margin-top: 10px;
}
</style>