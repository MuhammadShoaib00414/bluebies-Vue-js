<template>
    <layout>
        <div class="my-5">
            <div class="card br-10 mw-550 m-auto">
                <div class="card-body py-4">
                    <h4 class="font-weight-bolder my-2">Forgot Your Password?</h4>
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="my-2 ">Email</label>
                            <input type="email" v-model="email" class="my-2 form-control bg-primary text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" autocomplete="off">
                        </div>
                        <div class="error">
                            <p class="text-danger w-100 text-center bg-yellow text-red" v-if="error != undefined">{{ error }}</p>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary my-2" v-on:click="sendEmail()">Send 
                            <div v-if="loading" class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </layout>
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
            email: '',
            error: '',
            loading: false,
        }


    },
    watch: {
        
    },
    methods: {
        sendEmail() {
            this.loading = true;
            if(this.email == '') {
                this.loading = false;
                this.error = 'Please enter your valid email address';
                return;
            }
            axios.post('/api/forgot-password', {
                email: this.email
            }).then((response) => {
                this.loading = false;
                if(response.data.status == 'success') {
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                    this.$router.push('/verify?type=fp');
                } else {
                    this.error = response.data.message;
                }
            }).catch((error) => {
                this.loading = false;
                this.error = error.response.data.message;
            });
            // this.$router.push('/verify?type=fp');
        }
    },
    computed: {
       
    }
}
</script>
<style>

</style>
