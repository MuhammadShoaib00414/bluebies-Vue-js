<template>
    <div class="container pb-5 pt-4">
        <div class="row">

            <div class="col-md-6">
                <h3 class="mt-0 mb-4">الدعم والمساعدة</h3>

                <div class="supportAccordion">

                    <div class="card animate-box active" v-for="(data, index) in faqs" :key="data.id">

                        <div v-if="data.status == 1" class="card-header" @click="toggleAccordion(index)">
                            {{ data.question }}
                            <i class="fa fa-chevron-down" :class="{ 'fa-chevron-up': activeIndex === index }"></i>
                        </div>
                        <div class="card-body" v-show="activeIndex === index">{{ data.answer }}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5">
                <h3 class="mt-0 mb-4">التواصل مع بلوبيز</h3>

                <ul class="list-unstyled">
                    <li class="animate-box"><i class="icofont-phone font-2x"></i></li>
                    <li class="animate-box">عن طريق الاتصال بنا</li>
                    <li class="animate-box"><a href="tel:+9660513123124"
                            class="font-1x ltr d-inline-block">{{ contacts.phoneNumber }}</a>
                    </li>
                    <li class="animate-box mt-1"><i class="icofont-mail font-2x"></i></li>
                    <li class="animate-box">عن طريق إرسال بريد الكتروني</li>
                    <li class="animate-box"><a href="mailto:hello@blue-bees.com" class="font-1x">{{ contacts.email }}</a>
                    </li>
                </ul>

                <div class="animate-box"><a href="dashboard-support-add.html" class="btn btn-primary"
                        title="فتح تذكرة دعم فني"><i class="fa fa-plus ml-1"></i> فتح تذكرة دعم فني</a></div>
            </div>

        </div>
    </div>
   
</template>
  
<script>
import axios from 'axios';
import Layout from './Layout.vue';

export default {
    name: 'Support',
    components: {
        Layout,
    },
    data() {
        return {
            code: '',
            contacts: {},
            faqs: [],
            activeIndex: -1,
            response: [],
        };
    },
    async mounted() {
        await this.getDataFromAPI();
    },
    methods: {
        toggleAccordion(index) {
            if (this.activeIndex === index) {
                this.activeIndex = -1;
            } else {
                this.activeIndex = index;
            }
        },
        async getDataFromAPI() {
            try {
                const res = await axios.get('/api/get-faqs');
                if (res && res.data && res.data.data) {
                    const { contacts, faqs } = res.data.data;
                    this.contacts = contacts || {}; // Assign contacts or an empty object if not available
                    this.faqs = faqs || []; // Assign faqs or an empty array if not available
                }
            } catch (error) {
                console.error('Error fetching data:', error);
                // Handle error if needed
            }
        },
    },
};
</script>



<style></style>
