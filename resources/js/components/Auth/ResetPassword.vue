<template>
    <layout>
        <div class="my-5">
            <div class="card br-10 mw-550 m-auto">
                <div class="card-body py-4">
                    <h4 class="font-weight-bolder my-2">Reset Your Password</h4>
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="my-2 ">New Password</label>
                            <input type="password" v-model="password" class="my-2 form-control bg-primary text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="********" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="my-2 ">Confirmed Password</label>
                            <input type="password" v-model="password_confirmation" class="my-2 form-control bg-primary text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="********" autocomplete="off">
                        </div>
                        <div class="error">
                            <p class="text-danger w-100 text-center bg-yellow text-red" v-if="error != undefined">{{ error }}</p>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary my-2" v-on:click="updatePassword()">Send 
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
            password: '',
            password_confirmation: '',
            error: '',
            loading: false,
        }


    },
    watch: {
        
    },
    methods: {
        updatePassword() {
            this.loading = true;
            if(this.password == '') {
                this.loading = false;
                this.error = 'Please enter your new password';
                return;
            } else if(this.password_confirmation == '') {
                this.loading = false;
                this.error = 'Please confirm your new password';
                return;
            } else if(this.password != this.password_confirmation) {
                this.loading = false;
                this.error = 'Password and confirmed password does not match';
                return;
            }

            axios.post('/api/reset-password', {
                password: this.password,
                password_confirmation: this.password_confirmation,
                id: JSON.parse(localStorage.getItem('user')).id
            }).then((response) => {
                this.loading = false;
                if(response.data.status == 'success') {
                    this.$router.push('/login');
                } else {
                    this.error = response.data.message;
                }
            }).catch((error) => {
                this.loading = false;
                this.error = 'Something went wrong. Please try again later';
            });
            // this.$router.push('/calculator');
        }
    },
    computed: {
       
    }
}
</script>
<style>

</style>
