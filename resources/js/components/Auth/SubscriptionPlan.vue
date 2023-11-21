<template>
    <layout>
        <div class="container-fluid">
            <div class="row justify-content-center outer-div">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-9 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li :class="{ active: currentStep === 0 }" id="account"><strong>Step1</strong></li>
                                <li :class="{ active: currentStep === 1 }" id="personal"><strong>Step2</strong></li>
                                <li :class="{ active: currentStep === 2 }" id="payment"><strong>Step3</strong></li>
                                <li :class="{ active: currentStep === 3 }" id="confirm"><strong>Finish</strong></li>
                            </ul>
                          
                            <!-- fieldsets -->
                            <fieldset v-if="currentStep === 0">
                                <div class="form-card">
                                    <h3 class="font-weight-bolder">Payment Plan</h3>
                                    <label style="font-weight: 400;font-size: 24px;" class="info-text col-12">In The free
                                        trail,
                                        <strong>Crypto Wiz Guy</strong> Verifies your card for $0.99, and this fee is
                                        subtract from the plan cost upon subscription.</label>
                                </div>
                                <div class="row ">
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" checked="checked" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h2>(BEST VALUE)</h2>
                                                        <h3>Bitcoin introductory rate</h3>
                                                        <p>Payable Annually</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 9.89 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h3>Standard Introductory rate</h3>
                                                        <p>Payable Annually</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 10.39 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h3>Standard Bitcoin rate</h3>
                                                        <p>Payable Annually</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 10.91 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h3>Standard rate</h3>
                                                        <p>Payable Annually</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 11.45 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h3>Introductory rate</h3>
                                                        <p>Payable Quarterly</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 12.03 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <div class="radio-card">
                                            <div class="inner-content" style="display: flex;">
                                                <div class="radio-btn-green">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="radio" />
                                                    </label>
                                                </div>
                                                <div class="content-sect">
                                                    <div class="value-text justify-content-left text-left pl-3 pb-0">
                                                        <h3>Standard rate</h3>
                                                        <p>Payable Quarterly</p>
                                                    </div>
                                                    <div class="price-month">
                                                        <p>$ 12.63 / mo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-12 p-0 mt-3 mb-2"
                                        id="payment-section">
                                        <p><span class="number">1. </span> Introductory rates are good until midnight US
                                            Central
                                            time, December 31, 2023.</p>
                                        <p><span class="number">2. </span> The Standard rate will automatically be charged
                                            on the day after the
                                            expiration
                                            date, unless user unsubscribes before the expiration date/time.</p>
                                        <p><span class="number">3. </span> A one week free trial period is part of every
                                            initial subscription, and can be
                                            canceled within 7 days. Charges will take place on the eighth day.</p>
                                        <p><span class="number">4. </span> No full or partial refunds given after 7 day
                                            free trial.</p>

                                    </div>
                                </div>
                                <button @click="nextStep" class="next action-button btn-sm btn btn-primary">Next</button>
                            </fieldset>
                            <fieldset v-if="currentStep === 1">
                                <div class="form-card">
                                    <div class="form-card">
                                        <h3 class="font-weight-bolder">Payment Options</h3>
                                        <div class="btn-options">
                                            <button class="btn btn-primary btn-sm mt-4">Bitscoin</button>
                                            <button class="btn btn-primary btn-sm mt-4" @click="nextStep">
                                                Stripe
                                            </button>
                                            <button class="btn btn-primary btn-sm mt-4">Paypal</button>
                                        </div>


                                    </div>
                                </div>
                                <button @click="nextStep" class="next action-button btn btn-primary btn-sm ">Next</button>
                                <button @click="previousStep"
                                    class="previous action-button-previous  btn-sm">Previous</button>
                            </fieldset>
                            <fieldset v-if="currentStep === 2">
                                <div class="form-card">
                                    <SubscriptionStripe></SubscriptionStripe>
                                    <PayPalButton />
                                </div>
                                <button @click="nextStep" class="next action-button btn btn-primary btn-sm">Submit</button>
                                <button @click="previousStep"
                                    class="previous action-button-previous btn-sm">Previous</button>
                            </fieldset>
                            <fieldset v-if="currentStep === 3">
                                <div class="form-card">
                                    Finish
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>
<script>
import Layout from '../Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { StripeCheckout } from '@vue-stripe/vue-stripe';
import SubscriptionStripe from '../SubscriptionStripe.vue'
import PayPalButton from '../SubscriptionPaypal.vue';
export default {
    data() {
        return {
            publishableKey: 'pk_test_51O9rjwHgAJ2a2cU6bxBBpmh3z11jZqTj0hkroRh2bA1eEsO89vzM0jBuxtE8E4aw20wf8XqJG5mFAA2S0gyUYlg600bekqVISk',
            loading: false,
            lineItems: [
                {
                    price: 'some-price-id', // The id of the recurring price you created in your Stripe dashboard
                    quantity: 1,
                },
            ],
            successURL: 'http://127.0.0.1:8000/',
            cancelURL: 'http://127.0.0.1:8000/',
            currentStep: 0,
            steps: 4,
            progressBarWidth: '0%',
            
        };
    },
    components: {
        Layout,
        StripeCheckout,
        SubscriptionStripe,
        PayPalButton
    },
    computed: {
        progressBarWidth() {
            return `${((this.currentStep + 1) / this.steps) * 100}%`;
        },
    },
    mounted() {
        this.includeStripe('js.stripe.com/v3/', function () {
            this.configureStripe();
        }.bind(this));
        this.loadIntent();
        this.selectedPlan = this.$route.query.plan;
        this.loadPlanDetail(this.selectedPlan);
        this.loadPaymentMethods();
        this.checkSubscription();
    },
    methods: {

        loadIntent() {
            axios.get('/api/get-stripe-intent')
                .then(function (response) {
                    this.intentToken = response.data?.token;
                }.bind(this));
        },
        loadPlanDetail(id) {
            this.isLoading = true;
            document.body.style.overflow = "hidden";
            axios.get('/api/v1/plan/' + id)
                .then(function (response) {
                    this.planDetail = response.data;
                    this.isLoading = false;
                    document.body.style.overflow = "visible";
                }.bind(this));
        },
        checkSubscription() {
            axios({
                method: 'GET',
                headers: { 'content-type': 'application/x-www-form-urlencoded', 'Authorization': 'Bearer ' + localStorage.userToken, 'X-Requested-With': 'XMLHttpRequest' },
                url: 'api/v1/user/subscription',
            })
                .then(res => {
                    this.isSubscribed = res.data.subscription;
                    this.isLoading = false;
                    document.body.style.overflow = "visible";
                })
                .catch(error => {
                    if (error.response) {
                        this.isSubscribed = false;
                    } else {
                        this.isSubscribed = false;
                    }
                    this.isLoading = false;
                    document.body.style.overflow = "visible";
                });
        },
        loadPaymentMethods() {
            this.paymentMethodsLoadStatus = 1;
            axios.get('/api/v1/user/payment-methods')
                .then(function (response) {
                    this.paymentMethods = response.data;
                    this.paymentMethodsLoadStatus = 2;
                }.bind(this));
            // this.isLoading = false;
            document.body.style.overflow = "hidden";
        },
        configureStripe() {
            this.stripe = Stripe('pi_3OCNbDHgAJ2a2cU60XlGfbzX_secret_1Fd5ScVP2k42dQLJzyuJt7ah3');
                    this.elements = this.stripe.elements();
                    this.card = this.elements.create('payment');
                    this.card.mount('#card-element');
         
        },
        nextStep() {
            if (this.currentStep < this.steps - 1) {
                this.currentStep++;
            }
        },
        includeStripe(URL, callback) {
            let documentTag = document, tag = 'script',
                object = documentTag.createElement(tag),
                scriptTag = documentTag.getElementsByTagName(tag)[0];
            object.src = '//' + URL;
            if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
            scriptTag.parentNode.insertBefore(object, scriptTag);
        },
        previousStep() {
            if (this.currentStep > 0) {
                this.currentStep--;
            }
        },
        submit() {
            // You will be redirected to Stripe's secure checkout page
            this.$refs.checkoutRef.redirectToCheckout();
        },
    },
};
</script>
<style scoped>
.inner-content {
    /* display: flex; */
    align-items: start;
    width: 100%;
}

.btn-options button {
    margin: 7px;
}

.value-text h2 {
    margin: 0;
}

.value-text h3 {
    margin: 6px 0;
    font-weight: 700;

}

.price-month p {
    color: black;
    font-size: 23px;
}

.subscription-info {
    max-width: 600px;
    margin: 0 auto;
}

.info-item {
    margin-bottom: 15px;
}

.value-text p {
    margin: 0;
    color: black;
    font-size: 22px;
    font-weight: 500;
}

label.custom-radio input {
    margin-top: 10px;
    margin-right: 16px;
}

.content-sect {
    display: flex;
    justify-content: space-between;
    width: 97%;
}

.radio-btn-green {
    width: 3%;
}

.radio-card {
    border: 1px solid grey;
    width: 100%;
    margin: auto;
    border-radius: 16px;
    padding: 25px;
}

* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 13px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

div#payment-section p {
    text-align: justify;
    margin-bottom: 12px;
    font-size: 21px;
    color: #000;
    font-weight: 500;
}

#msform .action-button {
    width: 100px;

    padding: 10px 19px;
    margin-top: 10px;
    float: right;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-sm,
.btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {

    background: #616161;
    font-weight: bold;

    border: 0 none;
    border-radius: 0px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    padding: 10px 19px;
    margin: 10px 5px 10px 0px;
    float: right;
    background: #616161;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000;
}

/*The background card*/
.card {
    z-index: 0;
    border: none;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left;
}

.purple-text {
    color: #673AB7;
    font-weight: normal;
}

/*Step Count*/
.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right;
}

/*Field names*/
.fieldlabels {
    color: gray;
    text-align: left;
}

/*Icon progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #673AB7;
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

/*Icons in the ProgressBar*/
#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #payment:before {
    font-family: FontAwesome;

    content: "\f030";

    content: "\f030"
}


#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;

    padding: 2px;
}

/*ProgressBar connectors*/

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;

    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7;
}

/*Animated Progress Bar*/
.progress {
    height: 20px;
}

.progress-bar {
    background-color: #673AB7;
}

/*Fit image in bootstrap div*/
.fit-image {
    width: 100%;
    object-fit: cover;


}


#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}

.outer-div {
    border: 1px solid gray;
    width: 100%;
    max-width: 950px;
    margin: auto;
    margin-bottom: 100px;
    margin-top: 50px;
    border-radius: 30px;
}

.inner-div {
    border: 1px solid gray;
    width: 100%;
    max-width: 780px;
    margin: auto;
    margin-bottom: 100px;
    margin-top: 50px;
    border-radius: 10px;
}

#payment-section h2 {
    font-weight: 800;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.radio {
    margin: 0.5rem;

    input[type="radio"] {
        position: absolute;
        opacity: 0;

        +.radio-label {
            &:before {
                content: '';
                background: #f4f4f4;
                border-radius: 100%;
                border: 1px solid darken(#f4f4f4, 25%);
                display: inline-block;
                width: 1.4em;
                height: 1.4em;
                position: relative;
                top: -0.2em;
                margin-right: 1em;
                vertical-align: top;
                cursor: pointer;
                text-align: center;
                transition: all 250ms ease;
            }
        }

        &:checked {
            +.radio-label {
                &:before {
                    background-color: #3197EE;
                    box-shadow: inset 0 0 0 4px #f4f4f4;
                }
            }
        }

        &:focus {
            +.radio-label {
                &:before {
                    outline: none;
                    border-color: #3197EE;
                }
            }
        }

        &:disabled {
            +.radio-label {
                &:before {
                    box-shadow: inset 0 0 0 4px #f4f4f4;
                    border-color: darken(#f4f4f4, 25%);
                    background: darken(#f4f4f4, 25%);
                }
            }
        }

        +.radio-label {
            &:empty {
                &:before {
                    margin-right: 0;
                }
            }
        }
    }
}
</style>

