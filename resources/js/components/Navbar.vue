<template>
    <header class="header-sect">
        <section class="nav-holder py-4">
            <div class="container">

                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarId"
                        aria-controls="navbarId" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="navbar-brand text-white d-md-none">الرئيسية</div>

                    <a class="navbar-brand d-none d-md-inline-block" href="#" title="بلوبيز"><img
                            src="bluebies/images/80x60.png" alt="Logo image"></a>

                    <div class="collapse navbar-collapse" id="navbarId">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" title="الرئيسية" href="#">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link smooth-a" title="طريقة الاستخدام" href="#aboutSec">طريقة الاستخدام</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="الطلبات" href="orders.html">الطلبات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link smooth-a" title="الدعم والمساعده" href="#supportSec">الدعم والمساعده</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item px-md-2 d-none d-md-inline-block">
                            <a class="nav-link" title="بحث" href="openSearch">
                                <i class="icofont-search-1"></i>
                            </a>
                        </li>

                        <li class="nav-item d-none d-md-inline-block" v-if="!loggedIn">
                            <a class="btn btn-primary btn-sm mt-1" title="الاشتراك"
                                v-on:click="() => this.$router.push('/register')">الاشتراك</a>
                        </li>

                        <li class="nav-item" v-if="!loggedIn">
                            <a class="nav-link text-primary"  title="الدخول"
                                v-on:click="() => this.$router.push('/login')">
                                <span class="pl-2 d-md-none"><i class="icofont-user-alt-7"></i></span>الدخول
                            </a>
                        </li>
                        <li class="nav-item d-md-none" v-if="loggedIn">
                            <a class="nav-link position-relative" title="الاشعارات" href="notifications.html">
                                <i class="fa fa-bell text-white"></i>
                                <span class="has-notification bg-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown" v-if="loggedIn">
                            <a class="nav-link dropdown-toggle"   @click.prevent="toggleDropdown" href="#" id="userDropDown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="bluebies/images/user-small.png" class="d-inline-block align-bottom" alt="محمد">
                                <div class="d-none d-md-inline-block align-bottom pr-1">
                                    <p class="m-0"> {{ user.first_name }}</p>
                                </div>
                            </a>
                            <div class="dropdown-menu user-dropdown" :class="{ show: showDropdown }" v-if="showDropdown" aria-labelledby="userDropDown">
                                <a class="dropdown-item" href="dashboardl">لوحة التحكم</a>
                                <a class="dropdown-item" href="dashboard-offers.html">العروض</a>
                                <a class="dropdown-item" href="dashboard-settings.html">الاعدادات</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" v-if="loggedIn" v-on:click="logout()">تسجيل الخروج</a>
                            </div>
                        </li>
                    </ul>

                    <div class="text-white d-md-none width-100 mt-5 mb-3">
                        <p class="m-0">مرحبا</p>
                    </div>
                    <ul class="navbar-nav notification-menu-holder" v-if="loggedIn">
                        <li class="nav-item dropdown mt-1">
                            <button type="button" class="dropdown-toggle dropdown-toggle-split d-none d-md-inline-block"
                                id="notificationDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-reference="parent">
                                <i class="fa fa-bell text-primary"></i>
                                <span class="has-notification bg-white">21</span>
                            </button>
                            <div class="dropdown-menu notification-menu" aria-labelledby="notificationDropDown">
                            </div>
                        </li>
                    </ul>
                    <form method="post" action="search.html" class="search-form">
                        <input type="search" placeholder="ابحث عما تريد">
                        <button type="submit"><i class="icofont-search-1"></i></button>
                    </form>

                    <div class="mirror"></div>

                </nav>

            </div>
        </section>
    </header>
</template>
<style>
.dropdown-item {
    cursor: pointer;
}
</style>
<script>
import Logo from './../../assets/logo.png';
export default {
    name: 'Header',

    components: {

    },
    beforeUnmount() {

    },
    created() {

    },
    mounted() {

    },
    data() {
        return {
            showDropdown: false,
            loggedIn: false,
            isAdmin: null,
            Logo: Logo,
            user: {
                is_admin: '',
                first_name: '',
                // other user properties
            },
        }
    },

    watch: {

    },
    mounted() {
        this.loggedIn = localStorage.getItem('user') && localStorage.getItem('token');

        const userData = localStorage.getItem('user');

        
        // Check if user data exists and parse it
        if (userData) {
            const user = JSON.parse(userData);
            // Access the 'is_admin' property
            this.isAdmin = user.is_admin;
        }

        // Get the authentication token from where you store it (e.g., Vuex store or local storage)
        const authToken = 'Bearer ' + localStorage.getItem('token'); // Replace with your storage method
        // Make an API call to fetch user data with the authentication token
        axios.get('/api/user', {
            headers: {
                'Authorization': authToken,
            },
        })
            .then(response => {
                // Set the retrieved user data to the 'user' property
                this.user = response.data;
            })
            .catch(error => {
                console.error('Error fetching user data:', error);
            });
        document.addEventListener('click', this.closeDropdown);
    },
    beforeDestroy() {
        document.removeEventListener('click', this.closeDropdown);
    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown; // Toggles the dropdown menu visibility
        },
        redirectToDashboard() {
            // Redirect to the admin dashboard
            this.$router.push('/dashboard');
        },
        logout() {
            localStorage.removeItem('user');
            localStorage.removeItem('token');
            if (this.$route.path != '/')
                this.$router.push('/');
            else
                location.reload();
        }
    },
}
</script>
