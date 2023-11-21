<template>
    <section class="win-height login-holder">
        <div class="form-holder bg-white px-lg-4 d-flex align-items-center">
            <div class="width-100 px-4 px-md-5">

                <img src="bluebies/images/80x60.png" alt="Logo image">
                <h3 class="mt-3">تسجيل عضوية جديدة</h3>

                <form method="post" action="verification-code.html">
                    <label class="d-block">اسم المستخدم
                        <input type="text" placeholder="اسم المستخدم" class="border rounded-0" v-model="user.firstName" autocomplete="off">
                    </label>
                    <div class="error">
                        <p class="text-danger w-100 text-center bg-yellow text-red" v-if="errors && errors.firstName">
                            {{ errors.firstName[0] }}</p>
                    </div>

                    <label class="d-block">رقم الهاتف
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0 bg-white" id="basic-addon1">+966</span>
                            </div>
                            <input type="tel" class="form-control rounded-0" v-model="user.phonenumber "
                                placeholder="اكتب رقم الهاتف" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </label>
                    <div class="error">
                        <p class="text-danger w-100 text-center bg-yellow text-red"
                            v-if="errors && errors.phonenumber  != undefined">{{ errors.phonenumber[0] }}</p>
                    </div>

                    <label class="d-block">البريد الالكتروني
                        <input type="email" placeholder="البريد الالكتروني" v-model="user.email" class="border rounded-0" autocomplete="off">
                    </label>
                    <div class="error">
                        <p class="text-danger w-100 text-center bg-yellow text-red"
                            v-if="errors && errors.email != undefined">{{ errors.email[0] }}</p>
                    </div>

                    <label class="d-block">كلمة المرور
                        <input type="password" v-model="user.password" placeholder="********" class="border rounded-0" autocomplete="off">
                    </label>
                    <div class="error">
                            <p class="text-danger w-100 text-center bg-yellow text-red" v-if="errors && errors.password != undefined">{{ errors.password[0] }}</p>
                        </div>

                    <label class="d-block">تأكيد كلمة المرور
                        <input type="password"  v-model="user.password_confirmation"  placeholder="********" class="border rounded-0" autocomplete="off">
                    </label>

                    <div>
                        <label class="radio-holder">
                            <input type="radio" v-modal="user.service_provider">
                            <span class="radio-icon"><i class="fa fa-check"></i></span>
                            <span>مقدم الخدمة</span>
                        </label>
                        <label class="radio-holder mr-2">
                            <input type="radio" v-modal="user.service_requester">
                            <span class="radio-icon"><i class="fa fa-check"></i></span>
                            <span>طالب الخدمة</span>
                        </label>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary my-2" v-on:click="createAccount()">تسجيل حساب جديد
                            <div v-if="loading" class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    <!-- <div class="my-3">
                        <button type="submit" class="btn btn-primary">تسجيل حساب جديد</button>
                        <a href="login.html" title="تسجيل حساب جديد" class="px-3">تسجيل الدخول</a>
                    </div> -->
                </form>

                <!-- <h5 class="mt-5">او تسجيل عن طريق</h5>
                <ul class="list-unstyled list-inline social">
                    <li class="list-inline-item m-0 ml-2"><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item m-0 ml-2"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item m-0 ml-2"><a href="#" title="google+"><i
                                class="fab fa-google-plus-g"></i></a></li>
                </ul> -->

            </div>
        </div>
    </section>
</template>
<script>
import Layout from '../Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { useToast } from 'vue-toastification';

export default {
    name: 'Home',

    components: {
        Layout,

    },
    beforeUnmount() {

    },
    created() {
        this.toast = useToast();
    },
    mounted() {

    },
    data() {
        return {
            user: {
                firstName: '',
                phonenumber : '',
                email: '',
                password: '',
                password_confirmation: '',
            },
            loading: false,
            errors: {
                firstName: [],
                phonenumber : [],
                email: [],
                password: [],
                password_confirmation: [],
            },
            toast: null
        }


    },
    watch: {

    },

    methods: {
        createAccount() {
            this.loading = true;
            axios.post('/api/register', this.user).then((response) => {
                console.log(response.data);
                this.loading = false;
                if (response.data.status == 'success') {
                    localStorage.setItem('verification', false);
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                    localStorage.setItem('token', response.data.access_token.plainTextToken);
                    this.$router.push('/verify?type=r');
                } else {
                    this.error = response.data.message;
                }
            }).catch((error) => {
                console.log(error.response.data);
                this.loading = false;
                this.errors = error.response.data.errors;
                console.log(this.errors);
            });
        }
    },
    computed: {

    }
}
</script>
<style>
.mw-550 {
    max-width: 550px;
}

.w-100px {
    width: 100px !important;
}

.bg-primary {
    background-color: #4472C4 !important;
}

input.bg-primary {
    background-color: #4472C4 !important;
    color: #fff;
}

input.bg-primary::placeholder {
    color: #fff;
}

input.bg-primary:focus {
    background-color: #4472C4 !important;
    color: #fff;
}

input.bg-primary:focus::placeholder {
    color: #fff;
}

p {
    font-size: 16px;
}</style>
