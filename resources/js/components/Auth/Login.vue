<template>
    <section class="win-height login-holder">
        <div class="form-holder bg-white px-lg-4 d-flex align-items-center">
            <div class="width-100 px-4 px-md-5">

                <img src="bluebies/images/80x60.png" alt="Logo image">
                <h3 class="mt-3">تسجيل الدخول</h3>

                <form action autocomplete="off">
                    <label class="d-block">رقم الهاتف
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0 bg-white" id="basic-addon1">+966</span>
                            </div>
                            <input type="tel" class="form-control rounded-0" v-model="phonenumber"
                                placeholder="اكتب رقم الهاتف" aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                    </label>
                   
                    <label class="checkbox-holder d-block">
                        <input type="checkbox" v-model="checkbox" autocomplete="off">
                        <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                        <span>تذكرني</span>
                    </label>
                    <div class="error">
                        <p class="text-danger w-100 text-center bg-yellow text-red" v-if="error != undefined">{{ error }}
                        </p>
                    </div>


                    <div class="my-3">
                        <button class="btn btn-sm btn-primary my-2" @click.prevent="login()">تسجيل الدخول
                            <div v-if="loading" class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                        <a href="javascript:void(0)" v-on:click="() => $router.push('/register')"
                            class="text-dark text-underline px-3" title="تسجيل حساب جديد">تسجيل حساب جديد</a>
                    </div>
                </form>


            </div>
        </div>
    </section>
</template>
<script>
import Layout from '../Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';


export default {
    name: 'Home',

    components: {
        Layout
    },
    beforeUnmount() {

    },
    created() {

    },
    mounted() {

    },
    data() {
        return {
            phonenumber: '',
            checkbox: '',
            error: '',
            loading: false,
        }


    },
    watch: {

    },
    methods: {
        login() {
            this.loading = true;
           
           
            if (!this.phonenumber) {
                this.error = 'Please enter your Phone Number';
                this.loading = false;
                return;
            }
            if (!this.checkbox) {
                this.error = 'الرجاء تحديد هذا الخيار للمتابعة';
                this.loading = false;
                return;
            }

            this.error = '';
            axios.post('/api/login', {
                phonenumber: this.phonenumber,
                checkbox: this.checkbox,
            }).then((response) => {
                console.log(response);
                this.loading = false;
                if (response.data.status == 'success') {
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                    localStorage.setItem('token', response.data.token);
                    localStorage.setItem('varification', false);
                    this.$router.push('/verify?type=l');
                } else {
                    this.error = response.data.message;
                }
            }).catch((error) => {
                this.loading = false;
                this.error = error.response.data.message;
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

label {
    font-weight: 600;
    font-size: 16px;
}

.form-control {
    font-size: 16px !important;
}
</style>
