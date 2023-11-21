<template>

        <section class="win-height login-holder">
            <div class="form-holder bg-white px-lg-4 d-flex align-items-center">
                <div class="width-100 px-4 px-md-5">

                    <img src="bluebies/images/80x60.png" alt="Logo image">
                    <h3 class="mt-3">إدخل كود التحقق</h3>
                    <p class="mb-2">تم إرسال كود التحقق على هاتفك +966123123123 يرجي كتابة الكود لتفعيل حسابك</p>

                    <form action="" autocomplete="off">
                        <label class="d-block">كود التحقق
                            <input type="text" class="border rounded-0" v-model="code" required id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="0a0DH6" autocomplete="off">

                        </label>
                        <div class="error">
                            <p class="text-danger w-100 text-center bg-yellow text-red" v-if="error != undefined">
                                {{ error }}</p>
                        </div>
                        <div class="my-3">
                            <button type="button" class="btn btn-sm btn-primary my-2" v-on:click="verify()">Verify
                                <div v-if="loading" class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                            <a href="#" title="تسجيل حساب جديد" class="px-3">إعادة إرسال كود التحقق</a>
                        </div>


                        <!-- <div class="my-3">
                            <button type="button" class="btn btn-sm btn-primary my-2" v-on:click="sendEmail()">دخول
                                <div v-if="loading" class="spinner-border spinner-border-sm text-light" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                            <a href="#" title="تسجيل حساب جديد" class="px-3">إعادة إرسال كود التحقق</a>
                        </div> -->
                    </form>

                </div>
            </div>
        </section>
 
</template>
<script>
import axios from 'axios';
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
            code: '',
            error: '',
            loading: false,
        }


    },
    watch: {

    },
    methods: {
        verify() {
            this.loading = true;
            if (this.code == '') {
                this.loading = false;
                this.error = 'Please enter the verification code';
                return;
            }

            let id = JSON.parse(localStorage.getItem('user')).id;
            axios.get('/api/verify/' + this.code + '/' + id).then((response) => {
                this.loading = false;
                if (response.data.status == 'success') {
                    let type = this.$route.query.type;
                    if (type == 'fp') {
                        this.$router.push('/reset-password');
                    } else if (type == 'l') {
                        this.$router.push('/dashboard');
                    } else if (type == 'r') {
                        this.$router.push('/dashboard');
                    }
                    this.error = '';
                } else {
                    this.error = response.data.message;
                    this.toast.error(response.data.message);
                }
            }).catch((error) => {
                this.loading = false;
                this.error = error.response.data.message
            });
        }
    },
    computed: {

    }
}
</script>
<style></style>
