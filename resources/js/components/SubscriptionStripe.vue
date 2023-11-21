<template>
    <layout>
        <form id="payment-form">
            <div id="payment-element" class="">
                <!-- Stripe will create form elements here -->
            </div>
            <button type="submit" class="btn btn-sm btn-primary" @click="handleSubmit">Pay via Stripe</button>
        </form>
    </layout>
</template>
<script setup>
import { ref, onMounted } from "vue"

const token = ref(null)
const stripe = ref(null)
const elements = ref(null)
const card = ref(null)
const stripeAPIToken = ref('pk_test_51O9rjwHgAJ2a2cU6bxBBpmh3z11jZqTj0hkroRh2bA1eEsO89vzM0jBuxtE8E4aw20wf8XqJG5mFAA2S0gyUYlg600bekqVISk')
const intentToken = ref(null)
const paymentElement = ref(null)

onMounted(() => {
    includeStripe('js.stripe.com/v3/', function(){
        configureStripe();
    }.bind(this));
 
})

const handleSubmit = async (e) => {
    e.preventDefault();

    const { error } = await stripe.value.confirmPayment({
        elements: elements.value,
        redirect: "if_required"
    });

    if (error === undefined) {
        axios.post("api/payment/complete", {
            token: token.value,
        })
    } else {
        axios.post("api/payment/failure", {
            token: token.value,
            code: error.code,
            description: error.message,
        })
    }
}

    function includeStripe( URL, callback ){
            let documentTag = document, tag = 'script',
                object = documentTag.createElement(tag),
                scriptTag = documentTag.getElementsByTagName(tag)[0];
            object.src = '//' + URL;
            if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
            scriptTag.parentNode.insertBefore(object, scriptTag);
        }
    /*
        Configures Stripe by setting up the elements and 
        creating the card element.
    */
    function configureStripe(){
        stripe.value = Stripe( stripeAPIToken.value );
        axios.get('/api/get-intent')
            .then( function( response ){
                console.log(response);
                var options = {
                    clientSecret: response.data,
                }
        
                elements.value = stripe.value.elements(options);
                paymentElement.value = elements.value.create('payment');
                paymentElement.value.mount('#payment-element');
            }.bind(this));

    }
    /*
        Loads the payment intent key for the user to pay.
    */
    function loadIntent(){
        axios.get('/api/v1/user/setup-intent')
            .then( function( response ){
                intentToken.value = response.data;
            }.bind(this));
    }
</script>
