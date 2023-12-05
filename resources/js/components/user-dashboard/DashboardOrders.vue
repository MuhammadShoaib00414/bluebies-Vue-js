<template>
  <layout>
   <!--===============================
    HEADING
===================================-->

<section class="about-holder border-b-l-white bg-light d-none d-md-block">
    <div class="container">
        <ul class="breadcrumb m-0 p-0">
            <li class="breadcrumb-item"><a href="index.html" title="الرئيسية" class="text-muted">الرئيسية</a></li>
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
                <a href="dashboard-order-add.html" title="إضافة طلب جديد" class="btn btn-block btn-primary"><i class="fa fa-plus fa-pull-left mt-1"></i> إضافة طلب جديد</a>
                
                <div class="card animate-box border-b-l-white pb-3">
                    
                    <div class="card-body p-4 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><span class="font-2x font-3x">320</span> <br> <small>مشاهدة</small></span>
                            <span class="badge shadow text-success"><i class="icofont-long-arrow-up"></i> +24</span>
                        </div>
    
                        <div class="progress mt-3" style="height: 3px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0">لقت اكملت 60% من ملفك الشخصي</p>
                        
                        <a href="#" title="تكملة ملفك الشخصي" class="btn btn-secondary btn-sm mt-3">تكملة ملفك الشخصي</a>
                    </div>
                    
                    <div class="card-body p-4 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><span class="font-2x font-3x">142</span> <br> <small>عروض مرسلة</small></span>
                            <span class="badge shadow text-success"><i class="icofont-long-arrow-up"></i> +30</span>
                        </div>
                        
                        <a href="#" title="إبحث عن فرصة" class="btn btn-primary btn-sm mt-3">إبحث عن فرصة</a>
                    </div>
                    
                    <div class="card-body p-4 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><span class="font-2x font-3x">30</span> <br> <small>طلباتي</small></span>
                            <span class="badge shadow text-danger"><i class="icofont-long-arrow-up"></i> +24</span>
                        </div>
                        
                        <a href="#" title="إضافة طلب" class="d-inline-block text-primary py-1 mt-3"><i class="fa fa-plus"></i> إضافة طلب</a>
                    </div>
                    
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><span class="font-2x font-3x">1200</span> <br> <small>ظهور للاعلانات</small></span>
                            <span class="badge shadow text-success"><i class="icofont-long-arrow-up"></i> +90</span>
                        </div>
                        
                        <a href="#" title="إدارة اعلاناتك" class="d-inline-block text-primary py-1 mt-3"><i class="fa fa-cog"></i> إدارة اعلاناتك</a>
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
                    
                                    <a href="dashboard-settings.html" class="btn btn-primary btn-sm mb-4" title="ترقية للنسخة المدفوعة"> ترقية للنسخة المدفوعة</a>
                                </div>
                                <div class="col-md-5 col-lg-6 py-4 px-0">
                                    <img src="bluebies/images/dashboard-img.png" alt="..." class="img-fluid">
                                </div>
                            </div>
                        </div>
        
                        <div class="item">
                            <div class="row m-0">
                                <div class="col-md-7 col-lg-6 text-md-right pt-5 px-0">
                                    <h4>العروض الاوتوماتيكية</h4>
                                    <p class="mb-5">لا وجود لتعب إضافة العروض على الطلبات</p>
                    
                                    <a href="dashboard-settings.html" class="btn btn-primary btn-sm mb-4" title="ترقية للنسخة المدفوعة"> ترقية للنسخة المدفوعة</a>
                                </div>
                                <div class="col-md-5 col-lg-6 py-4 px-0">
                                    <img src="bluebies/images/dashboard-img.png" alt="..." class="img-fluid">
                                </div>
                            </div>
                        </div>
        
                        <div class="item">
                            <div class="row m-0">
                                <div class="col-md-7 col-lg-6 text-md-right pt-5 px-0">
                                    <h4>العروض الاوتوماتيكية</h4>
                                    <p class="mb-5">لا وجود لتعب إضافة العروض على الطلبات</p>
                    
                                    <a href="dashboard-settings.html" class="btn btn-primary btn-sm mb-4" title="ترقية للنسخة المدفوعة"> ترقية للنسخة المدفوعة</a>
                                </div>
                                <div class="col-md-5 col-lg-6 py-4 px-0">
                                    <img src="bluebies/images/dashboard-img.png" alt="..." class="img-fluid">
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
    
                
                <div>
                    <div class="row">
                        <div class="col-md-6"><h2 class="my-4">الطلبات</h2></div>
                        <div class="col-md-6 d-none d-md-block text-left">
                            <ul class="list-inline list-unstyled mt-4 view-btns">
                                <li class="list-inline-item"><a href="gridView" title=".." class="round-icon border-0"><i class="fa fa-th-large"></i></a></li>
                                <li class="list-inline-item active"><a href="listView" title=".." class="round-icon border-0"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="row">
    
                        <div class="col-md-6 col-lg-4 view-holder list-view">
                            <div class="animate-box">
                                <div class="card">
                                    <div class="card-body py-4">
                                        <div>
                                            <span class="round-icon"><i class="fa fa-city"></i></span>
                                            <h3 class="in-block">تأمين صحي</h3>
                                        </div>
                                        <div>
                                            <ul class="list-unstyled list-inline m-0">
                                                <li class="list-inline-item mx-1"><div class="font-2x">30</div><small>مشاهدات</small></li>
                                                <li class="list-inline-item mx-1"><div class="font-2x">3</div><small>عروض</small></li>
                                            </ul>
                                        </div>
                    
                                        <div class="border-top">
                                            <a data-toggle="collapse" href="#card-1" class="d-inline-block mb-2 ml-2 hide-grid" title="معاينة العروض">معاينة العروض<i class="fa fa-chevron-down mr-1"></i></a>
                                            <a href="dashboard-order-page.html" class="btn btn-outline-primary" title="إدارة الطلب"><i class="far fa-comments ml-1"></i>إدارة الطلب</a>
                                        </div>
                                    </div>
                                    
                                    <div id="card-1" class="border-top p-4 collapse">
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>اخر العروض</h4>
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <div class="select-with-icon">
                                                    <select>
                                                        <option>ترتيب حسب</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="icofont-sort"></i>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="text-md-left animate-box right-in mt-3">
                                            <span class="d-none d-md-inline-block">ككل يوجد 40 عرض</span>
                                            <a href="orders.html" class="btn btn-primary mr-2" title="كافة العروض">كافة العروض</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-lg-4 view-holder list-view">
                            <div class="animate-box">
                                <div class="card">
                                    <div class="card-body py-4">
                                        <div>
                                            <span class="round-icon"><i class="fa fa-city"></i></span>
                                            <h3 class="in-block">تأمين صحي</h3>
                                        </div>
                                        <div>
                                            <ul class="list-unstyled list-inline m-0">
                                                <li class="list-inline-item mx-1"><div class="font-2x">30</div><small>مشاهدات</small></li>
                                                <li class="list-inline-item mx-1"><div class="font-2x">3</div><small>عروض</small></li>
                                            </ul>
                                        </div>
                    
                                        <div class="border-top">
                                            <a data-toggle="collapse" href="#card-2" class="d-inline-block mb-2 ml-2 hide-grid" title="معاينة العروض">معاينة العروض<i class="fa fa-chevron-down mr-1"></i></a>
                                            <a href="dashboard-order-page.html" class="btn btn-outline-primary" title="إدارة الطلب"><i class="far fa-comments ml-1"></i>إدارة الطلب</a>
                                        </div>
                                    </div>
                                    
                                    <div id="card-2" class="border-top p-4 collapse">
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>اخر العروض</h4>
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <div class="select-with-icon">
                                                    <select>
                                                        <option>ترتيب حسب</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="icofont-sort"></i>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="text-md-left animate-box right-in mt-3">
                                            <span class="d-none d-md-inline-block">ككل يوجد 40 عرض</span>
                                            <a href="orders.html" class="btn btn-primary mr-2" title="كافة العروض">كافة العروض</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-lg-4 view-holder list-view">
                            <div class="animate-box">
                                <div class="card">
                                    <div class="card-body py-4">
                                        <div>
                                            <span class="round-icon"><i class="fa fa-city"></i></span>
                                            <h3 class="in-block">تأمين صحي</h3>
                                        </div>
                                        <div>
                                            <ul class="list-unstyled list-inline m-0">
                                                <li class="list-inline-item mx-1"><div class="font-2x">30</div><small>مشاهدات</small></li>
                                                <li class="list-inline-item mx-1"><div class="font-2x">3</div><small>عروض</small></li>
                                            </ul>
                                        </div>
                    
                                        <div class="border-top">
                                            <a data-toggle="collapse" href="#card-3" class="d-inline-block mb-2 ml-2 hide-grid" title="معاينة العروض">معاينة العروض<i class="fa fa-chevron-down mr-1"></i></a>
                                            <a href="dashboard-order-page.html" class="btn btn-outline-primary" title="إدارة الطلب"><i class="far fa-comments ml-1"></i>إدارة الطلب</a>
                                        </div>
                                    </div>
                                    
                                    <div id="card-3" class="border-top p-4 collapse">
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>اخر العروض</h4>
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <div class="select-with-icon">
                                                    <select>
                                                        <option>ترتيب حسب</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="icofont-sort"></i>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="card shadow-none border p-3">
                                            <div class="row m-0 align-items-center">
                                                <div class="col-sm-5 col-lg-6 p-0">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-lg-6 p-0"><img src="bluebies/images/order-logo-2.png" alt="..." class="order-logo-sm"></div>
                                                        <div class="col-lg-6 p-0 text-lg-center">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                            <i class="far fa-star text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 p-0 text-sm-center"><p class="my-3 text-muted"><i class="fa fa-clock ml-1"></i> 14 اغسطس 2019</p></div>
                                                <div class="col-sm-3 col-lg-3 p-0 text-sm-center">
                                                    <div class="row m-0 align-items-center">
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><div class="font-2x">2900</div><small>ريال السعودي</small></div>
                                                        <div class="col-6 col-sm-12 col-lg-6 p-0"><a href="#" title=".." class="btn btn-outline-primary btn-sm">التفاصيل</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="text-md-left animate-box right-in mt-3">
                                            <span class="d-none d-md-inline-block">ككل يوجد 40 عرض</span>
                                            <a href="orders.html" class="btn btn-primary mr-2" title="كافة العروض">كافة العروض</a>
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
