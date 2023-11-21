import { createRouter, createWebHistory } from 'vue-router'
import Calculator from '../components/Calculator.vue'
import Home from '../components/Index.vue'
import About from '../components/About.vue'
import Login from '../components/Auth/Login.vue'
import Register from '../components/Auth/Register.vue'
import Verify from '../components/Auth/Verify.vue'
import axios from 'axios'
import Dashboard from '../components/Dashboard.vue'
import Unauthorized from '../components/Unauthorized.vue'



const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/calculator',
        name: 'Calculator',
        component: Calculator,
        meta: {
            requiresAuth: true,
        },
    },
    {
        path: '/about',
        name: 'About',
        component: About,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/verify',
        name: 'verify',
        component: Verify,
    },
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: () => import('../components/Auth/ForgotPassword.vue'),
    },
    {
        path: '/reset-password',
        name: 'reset-password',
        component: () => import('../components/Auth/ResetPassword.vue'),
    },
    {
        path: '/subscription-plan',
        name: 'subscription-plan',
        component: () => import('../components/Auth/SubscriptionPlan.vue'),
    },
    {
        path: '/register',
        name: 'register',
        component: () => Register,
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard,
        meta: {
            requiresAuthAdmin: true,
            requiresAuth: true,

        },
    },
    {
        path: '/unauthorized',
        name: 'unauthorized',
        component: () => Unauthorized,
    },
    {
        path: '/test-s',
        name: 'test-s',
        component: () => import('../components/SubscriptionStripe.vue'),
    }
];


const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});
router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user');
    const user = JSON.parse(loggedIn);

    if (to.matched.some((record) => record.meta.requiresAuth)) {
        if (!loggedIn) {
            next('/login');
        } else {
            if (to.matched.some((record) => record.meta.requiresAuthAdmin) && user.is_admin !== 1) {
                next('/unauthorized');
            }
            next();
        }
    } else {
        next();
    }
});




export default router;
