<template>
    <layout>


        <!--===============================
    ABOUT
===================================-->

        <section class="about-holder py-5 d-none d-md-block border-b-r-light">
            <div class="container pb-5 pt-4">

                <div class="text-center">
                    <h1 class="mt-4">الفرص التجارية والعملاءالمرتقبين الآن أقرب!</h1>
                    <ul class="list-unstyled list-inline my-4">
                        <li class="list-inline-item animate-box right-in px-2"><a href="about.html" title="تعرف علي بلوبيز"
                                class="text-primary"><i class="icofont-play-alt-1 ml-1"></i> تعرف علي بلوبيز</a></li>
                        <li class="list-inline-item animate-box left-in px-2"><a href="#ordersSec" class="smooth-a"
                                title="عرض الطلبات الجديدة">عرض الطلبات الجديدة</a></li>
                    </ul>
                    <div class="animate-box my-5">
                        <img src="bluebies/images/home-img.png" alt="image" class="home-img">
                    </div>
                </div>

                <p class="m-0">كيف يعمل بلوبيز؟</p>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h2 class="hover-primary">إنشئ ملف شركتك</h2>
                    </div>
                    <div class="col-md-4">
                        <h2 class="hover-primary">تابع الطلبات الجديدة</h2>
                    </div>
                    <div class="col-md-4">
                        <h2 class="hover-primary">المعلمين</h2>
                    </div>
                </div>

                <div class="animate-box pt-4" id="aboutSec" style="display:s!important">
                    <div class="owl-carousel">

                        <div class="item p-1">
                            <div class="row">

                                <div class="col-5 col-lg-6 pr-5">
                                    <h2 class="mt-5 pt-4 mb-3">ملئ بياناتك</h2>
                                    <h5>كتابة كافة تفاصيل ملف شركتك كالأسم, طرق التواصل, الصناعة المتخصصة فيها.</h5>
                                    <a href="register.html" class="btn btn-primary mt-3" title="اشترك الان">اشترك الان</a>
                                </div>

                                <div class="col-7 col-lg-6">
                                    <div class="card m-0 animate-box">
                                        <div class="card-body">
                                            <i class="fa fa-user-plus"></i>
                                            <h4>إشتراك جديد</h4>
                                            <form method="post" action="#">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="text-muted">اسم المؤسسة
                                                            <input type="text" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="text-muted">البريد الالكتروني
                                                            <input type="email" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="text-muted">عنوان شركتك
                                                            <input type="text" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="text-muted">رقم التواصل
                                                            <input type="tel" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="text-muted">كلمة المرور
                                                            <input type="pass" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="text-muted">تأكيد كلمة المرور
                                                            <input type="pass" class="border border-light mt-1">
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">اشترك</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="item p-1">
                            <div class="row">

                                <div class="col-5 col-lg-6 pr-5">
                                    <h2 class="mt-5 pt-4 mb-3">ملئ بياناتك</h2>
                                    <h5>كتابة كافة تفاصيل ملف شركتك كالأسم, طرق التواصل, الصناعة المتخصصة فيها.</h5>
                                    <a href="register.html" class="btn btn-primary mt-3" title="اشترك الان">اشترك الان</a>
                                </div>

                                <div class="col-7 col-lg-6">
                                    <div class="card m-0 animate-box">
                                        <div class="card-body">
                                            <i class="fa fa-users"></i>
                                            <h4>تسجيل الدخول</h4>
                                            <form method="post" action="#">
                                                <label class="text-muted d-block">اسم المؤسسة
                                                    <input type="text" class="border border-light mt-1">
                                                </label>
                                                <label class="text-muted d-block">كلمة المرور
                                                    <input type="text" class="border border-light mt-1">
                                                </label>
                                                <p><a href="#" title=".." class="text-primary">هل نسيت كلمة المرور؟</a></p>
                                                <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!--===============================
    ORDERS
===================================-->

        <section class="orders-holder pt-md-5 pb-5 bg-light border-b-l-white" id="ordersSec">
            <div class="container pt-md-4 pb-4 contain-filter">

                <div class="card text-white small-card bg-secondary d-md-none m-0 half-up">
                    <div class="card-body">
                        <i class="icofont-chart-line-alt"></i>
                        <h5>ما الجديد</h5>
                    </div>
                </div>

                <h2 class="mt-0 mb-4 d-none d-md-block">جديد الطلبات الواردة</h2>

                <div class="row d-none d-md-flex mb-3">
                    <div class="col-md-6 filter-btns">
                        <button type="button" class="btn btn-sm" data-filter="all"><i
                                class="icofont-ghost ml-1"></i>الكل</button>
                        <button type="button" class="btn btn-sm" data-filter=".food"><i
                                class="icofont-food-basket ml-1"></i>الاطعمة</button>
                        <button type="button" class="btn btn-sm" data-filter=".car"><i
                                class="icofont-car ml-1"></i>السيارات</button>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="select-with-icon">
                            <select>
                                <option>تصفية الطلبات</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <i class="icofont-filter"></i>
                        </div>
                        <div class="select-with-icon">
                            <select>
                                <option>ترتيب حسب</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <i class="fa fa-sort-amount-down"></i>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 col-lg-4 mix food">
                        <div class="animate-box">
                            <div class="card bg-primary text-white">
                                <div class="card-body py-4 countdown" data-expire="2020/6/5">
                                    <div class="row m-0">
                                        <div class="col-9 p-0">
                                            <h3 class="">تأمين صحي</h3>
                                        </div>
                                        <div class="col-3 p-0">
                                            <span class="font-2x d-block">350</span> زيارة
                                        </div>
                                    </div>

                                    <p class="mt-4 mb-0">متبقي على العرض</p>
                                    <div class="details counter-holder row m-0 mb-4">
                                        <div class="col p-0">
                                            <span class="day font-2x d-block"></span>
                                            <small>يوم</small>
                                        </div>
                                        <div class="col p-0">
                                            <span class="hours font-2x d-block"></span>
                                            <small>ساعه</small>
                                        </div>
                                        <div class="col p-0">
                                            <span class="minutes font-2x d-block"></span>
                                            <small>دقيقة</small>
                                        </div>
                                        <div class="col p-0">
                                            <span class="seconds font-2x d-block"></span>
                                            <small>ثانية</small>
                                        </div>
                                    </div>

                                    <a href="add-offer.html" title="تقدم بعرض الان"
                                        class="btn btn-sm btn-outline-white">تقدم بعرض الان</a>

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mix food">
                        <div class="animate-box">
                            <div class="card">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col"><span class="round-icon"><i class="fa fa-city"></i></span></div>
                                        <div class="col text-left">
                                            <a href="#" title="طلب عرض اسعار" class="btn btn-sm btn-outline-light mt-1">طلب
                                                عرض اسعار</a>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 mb-5">تأمين صحي</h3>

                                    <ul class="list-unstyled list-inline text-muted">
                                        <li class="list-inline-item m-0"><i class="icofont-google-map ml-1"></i> الرياض</li>
                                        <li class="list-inline-item mr-2"><i class="icofont-clock-time ml-1"></i> <span
                                                class="d-inline-block"> 14 اغسطس, 2019</span></li>
                                    </ul>

                                    <img src="bluebies/images/order-logo-1.png" alt="logo" class="order-logo">

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mix car">
                        <div class="animate-box">
                            <div class="card">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col"><span class="round-icon"><i class="fa fa-city"></i></span></div>
                                        <div class="col text-left">
                                            <a href="#" title="طلب عرض اسعار" class="btn btn-sm btn-outline-light mt-1">طلب
                                                عرض اسعار</a>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 mb-5">تأمين صحي</h3>

                                    <ul class="list-unstyled list-inline text-muted">
                                        <li class="list-inline-item m-0"><i class="icofont-google-map ml-1"></i> الرياض</li>
                                        <li class="list-inline-item mr-2"><i class="icofont-clock-time ml-1"></i> <span
                                                class="d-inline-block"> 14 اغسطس, 2019</span></li>
                                    </ul>

                                    <img src="bluebies/images/order-logo-1.png" alt="logo" class="order-logo">

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mix food">
                        <div class="animate-box">
                            <div class="card">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col"><span class="round-icon"><i class="fa fa-city"></i></span></div>
                                        <div class="col text-left">
                                            <a href="#" title="طلب عرض اسعار" class="btn btn-sm btn-outline-light mt-1">طلب
                                                عرض اسعار</a>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 mb-5">تأمين صحي</h3>

                                    <ul class="list-unstyled list-inline text-muted">
                                        <li class="list-inline-item m-0"><i class="icofont-google-map ml-1"></i> الرياض</li>
                                        <li class="list-inline-item mr-2"><i class="icofont-clock-time ml-1"></i> <span
                                                class="d-inline-block"> 14 اغسطس, 2019</span></li>
                                    </ul>

                                    <img src="bluebies/images/order-logo-1.png" alt="logo" class="order-logo">

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mix food">
                        <div class="animate-box">
                            <div class="card">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col"><span class="round-icon"><i class="fa fa-city"></i></span></div>
                                        <div class="col text-left">
                                            <a href="#" title="طلب عرض اسعار" class="btn btn-sm btn-outline-light mt-1">طلب
                                                عرض اسعار</a>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 mb-5">تأمين صحي</h3>

                                    <ul class="list-unstyled list-inline text-muted">
                                        <li class="list-inline-item m-0"><i class="icofont-google-map ml-1"></i> الرياض</li>
                                        <li class="list-inline-item mr-2"><i class="icofont-clock-time ml-1"></i> <span
                                                class="d-inline-block"> 14 اغسطس, 2019</span></li>
                                    </ul>

                                    <img src="bluebies/images/order-logo-1.png" alt="logo" class="order-logo">

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mix car">
                        <div class="animate-box">
                            <div class="card">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col"><span class="round-icon"><i class="fa fa-city"></i></span></div>
                                        <div class="col text-left">
                                            <a href="#" title="طلب عرض اسعار" class="btn btn-sm btn-outline-light mt-1">طلب
                                                عرض اسعار</a>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 mb-5">تأمين صحي</h3>

                                    <ul class="list-unstyled list-inline text-muted">
                                        <li class="list-inline-item m-0"><i class="icofont-google-map ml-1"></i> الرياض</li>
                                        <li class="list-inline-item mr-2"><i class="icofont-clock-time ml-1"></i> <span
                                                class="d-inline-block"> 14 اغسطس, 2019</span></li>
                                    </ul>

                                    <img src="bluebies/images/order-logo-1.png" alt="logo" class="order-logo">

                                    <a href="order-single.html" title="التفاصيل" class="order-btn"><i
                                            class="fa fa-chevron-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-md-left animate-box right-in mt-3">
                    <span class="d-none d-md-inline-block">يوجد أكثر من 40 طلب</span>
                    <a href="orders.html" class="btn btn-primary mr-2" title="عرض كافة الطلبات">عرض كافة الطلبات <i
                            class="icofont-arrow-left mr-1"></i></a>
                </div>

            </div>
        </section>



        <!--===============================
    PARTNERS
===================================-->

        <section class="partners-holder py-5 d-none d-md-block">
            <Partners />
        </section>



        <!--===============================
    STATISTICS
===================================-->

        <section class="statistics-holder bg-light py-5 d-none d-md-block border-t-r-white">
            <div class="container py-4">

                <p class="m-0">نجاحات بلوبيز</p>
                <h2 class="mt-0 mb-4">إحصائيات وارقام</h2>

                <div class="row text-center mt-5" id="counter">

                    <div class="col-md-3 animate-box">
                        <h2 class="mb-0 font-3x counter-value" data-count="9321">0</h2>
                        <p>عضو موجود</p>
                    </div>

                    <div class="col-md-3 animate-box">
                        <h2 class="mb-0 font-3x counter-value" data-count="6862">0</h2>
                        <p>طلب منتهي</p>
                    </div>

                    <div class="col-md-3 animate-box">
                        <h2 class="mb-0 font-3x counter-value" data-count="32014">0</h2>
                        <p>عرض على الطلبات</p>
                    </div>

                    <div class="col-md-3 animate-box">
                        <h2 class="mb-0 font-3x counter-value" data-count="2244321">0</h2>
                        <p>ريال متداول</p>
                    </div>

                </div>

            </div>
        </section>



        <!--===============================
    SUBSCRIBES
===================================-->

        <section class="subscribes-holder py-5 d-none d-md-block border-t-l-light">
            <Subscribes  />
           
        </section>



        <!--===============================
    SUPPORT + CONTACT
===================================-->

        <section class="support-holder py-5 d-none d-md-block" id="supportSec">
            <Support></Support>
        </section>


    </layout>
</template>
<script>
import Layout from './Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { useToast } from 'vue-toastification';
import Support from '../components/Support';
import Partners from '../components/Partner';
import Subscribes from '../components/Subscribes';

import Platform from './../../assets/platform.png';
import Star from './../../assets/star.png';
import faq from './../../assets/faqs.png';
import $ from 'jquery'; // Import jQuery if you haven't done so
import 'owl.carousel'; // Import Owl Carousel library


export default {
    name: 'Home',

    components: {
        Layout,
        Support,
        Partners,
        Subscribes
    },
    beforeUnmount() {

    },
    created() {

    },
    mounted() {
        // this.initOwlCarousel();
    },
    data() {
        return {
            videoSource: '/assets/video/demo-video.mkv',
            Platform,
            Star,
            faq
        }


    },
    watch: {

    },
    methods: {
        initOwlCarousesl() {
            let aboutSlider = $('.about-holder .owl-carousel');
            // Check if the slider exists and Owl Carousel is loaded
            if (aboutSlider.length && $.fn.owlCarousel) {
                // Owl Carousel initialization
                aboutSlider.owlCarousel({
                    // Owl Carousel options
                });
            }
            // Add similar initialization for other sliders (partnersSlider, onBoardingSlider)
        },

    },
    computed: {

    }
}

</script>

<style>

/*--------------------------------------
*********** CARD ***********
--------------------------------------*/

.card {
    border: 0;
    display: block;
    margin-top: 15px;
    margin-bottom: 15px;
    position: relative;
    border-radius: 10px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.12);
}

.small-card {
    width: 140px;
    max-width: 100%;
    border-radius: 20px;
}

.radius-20 {
    overflow: hidden;
    border-radius: 20px !important;
}

.width-100 {
    width: 100%;
}

.font-1x {
    font-size: 1.5em;
    line-height: 1;
}

.font-2x {
    font-size: 2em;
    line-height: 1;
}

.font-3x {
    font-size: 3em;
}

.border-t-r-white, .border-b-l-white {
    background: #fff;
}

.border-b-r-light, .border-t-l-light {
    position: relative;
    background: #fff;
}

.border-b-r-light:before, .border-t-l-light:before {
    content: '';
    position: absolute;
    z-index: -1;
    width: 150px;
    height: 150px;
    background: #f3f3f8;
}

.border-b-r-light:before {
    bottom: 0;
}

.border-t-l-light:before {
    top: 0;
}

/*--------------------------------------
*********** ANIMATION ***********
--------------------------------------*/

.animate-box {
    opacity: 0;
    position: relative;
}

.animate-box.animated {
    opacity: 1;
}

.animated {
    animation-duration: 1.4s;
    animation-fill-mode: both;
    -webkit-animation-duration: 1.4s;
    -webkit-animation-fill-mode: both;
}

/*--------------------------------------
*********** ABOUT ***********
--------------------------------------*/

.home-img {
    width: 600px;
    max-width: 100%;
}

.about-holder .owl-carousel {
    position: relative;
}

.about-holder .owl-carousel .owl-dots {
    top: 5rem;
    position: absolute;
}

.about-holder .owl-carousel button.owl-dot {
    width: 3px;
    height: 40px;
    display: block;
    background: #ccc;
}

.about-holder  .owl-carousel button.owl-dot.active {
    background: #3941D1;
}

/*--------------------------------------
*********** ORDERS ***********
--------------------------------------*/

.user-img, .round-icon {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.round-icon {
    color: #3941D1;
    font-size: 20px;
    line-height: 45px;
    text-align: center;
    display: inline-block;
    border: 1px solid #3941D1;
}

.order-logo {
    height: 45px;
}

.order-logo-sm {
    height: 35px;
}

.order-btn {
    bottom: 0;
    padding: 15px;
    position: absolute;
    background: #3941D1;
    color: #fff !important;
}

.card.bg-primary .order-btn {
    background: #fff;
    color: #3941D1 !important;
}

.order-btn i {
    display: block;
}

.orders-holder .card {
    overflow: hidden;
}

.orders-holder .card:hover {
    transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -webkit-transform: scale(1.05, 1.05);
}

.orders-holder .card:hover .order-btn  {
    transform: translateX(0);
    -o-transform: translateX(0);
    -ms-transform: translateX(0);
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
}

.half-up {
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
}

.select-with-icon {
    position: relative;
    display: inline-block;
}

.select-with-icon select {
    width: 150px;
    margin: 0 4px;
    padding: 3px 10px;
    border-radius: 15px;
    -moz-appearance: none;
    -webkit-appearance: none;
}

.select-with-icon i {
    top: 10px;
    position: absolute;
}

</style>