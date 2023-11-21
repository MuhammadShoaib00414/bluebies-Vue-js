import './bootstrap';
import {createApp} from 'vue';
import AppComponent from './components/App.vue';
import router from './router/index.js';
// import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.js';
import Select2 from 'vue3-select2-component';
import Toast,{POSITION} from "vue-toastification";
import "vue-toastification/dist/index.css";
import $ from 'jquery';
import axios from 'axios';



// Create a Vue application
const app = createApp({
    components: {
        AppComponent,
    }
});
const options = {
    type: 'default',
    duration: null,
  };
app.use($);
app.use(jQuery);
app.component('Select2', Select2);

app.config.globalProperties.axios = axios;
// axios.defaults.baseURL = 'https://dev.cryptowizguy.com';
axios.defaults.baseURL = 'http://127.0.0.1:8000';


app.use(Toast, options);
app.use(router);
app.mount('#app');


