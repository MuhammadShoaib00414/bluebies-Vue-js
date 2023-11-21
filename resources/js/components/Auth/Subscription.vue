<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Sign Up Your User Account</h2>
                    <p>Fill all form fields to go to the next step</p>

                    <form @submit.prevent="submitForm">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li :class="{ active: currentStep === 1 }"><strong>Account</strong></li>
                            <li :class="{ active: currentStep === 2 }"><strong>Personal</strong></li>
                            <li :class="{ active: currentStep === 3 }"><strong>Image</strong></li>
                            <li :class="{ active: currentStep === 4 }"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                :style="{ width: progress + '%' }"></div>
                        </div>
                        <br>

                        <!-- fieldsets -->
                        <fieldset v-for="(fieldset, index) in fieldsets" :key="index" v-show="currentStep === index + 1">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">{{ fieldset.title }}</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step {{ currentStep }} - 4</h2>
                                    </div>
                                </div>
                                <div v-for="field in fieldset.fields" :key="field.name">
                                    <label class="fieldlabels">{{ field.label }}{{ field.required ? ' *' : '' }}</label>
                                    <input :type="field.type" :name="field.name" :placeholder="field.placeholder"
                                        v-model="formData[field.name]" />
                                </div>
                            </div>
                            <button v-if="currentStep < fieldsets.length" @click="nextStep">Next</button>
                            <button v-if="currentStep > 1" @click="previousStep">Previous</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
import Layout from '../Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { useToast } from 'vue-toastification';
export default {

    data() {
        return {
            currentStep: 1,
            progress: 0,
            formData: {
                email: '',
                uname: '',
                pwd: '',
                cpwd: '',
                fname: '',
                lname: '',
                phno: '',
                phno_2: '',
                pic: '',
                // Add other form fields here
            },
            fieldsets: [
                {
                    title: 'Account Information:',
                    fields: [
                        { name: 'email', label: 'Email', type: 'email', placeholder: 'Email Id', required: true },
                        { name: 'uname', label: 'Username', type: 'text', placeholder: 'UserName', required: true },
                        { name: 'pwd', label: 'Password', type: 'password', placeholder: 'Password', required: true },
                        { name: 'cpwd', label: 'Confirm Password', type: 'password', placeholder: 'Confirm Password', required: true },
                    ],
                },
                {
                    title: 'Personal Information:',
                    fields: [
                        { name: 'fname', label: 'First Name', type: 'text', placeholder: 'First Name', required: true },
                        { name: 'lname', label: 'Last Name', type: 'text', placeholder: 'Last Name', required: true },
                        { name: 'phno', label: 'Contact No.', type: 'text', placeholder: 'Contact No.', required: true },
                        { name: 'phno_2', label: 'Alternate Contact No.', type: 'text', placeholder: 'Alternate Contact No.', required: true },
                    ],
                },
                {
                    title: 'Image Upload:',
                    fields: [
                        { name: 'pic', label: 'Upload Your Photo', type: 'file', placeholder: '', required: false },
                        { name: 'pic_signature', label: 'Upload Signature Photo', type: 'file', placeholder: '', required: false },
                    ],
                },
                {
                    title: 'Finish:',
                    fields: [],
                },
            ],
        };
    },
    methods: {
        nextStep() {
            if (this.currentStep < this.fieldsets.length) {
                this.currentStep++;
                this.updateProgress();
            }
        },
        previousStep() {
            if (this.currentStep > 1) {
                this.currentStep--;
                this.updateProgress();
            }
        },
        updateProgress() {
            this.progress = ((this.currentStep - 1) / (this.fieldsets.length - 1)) * 100;
        },
        submitForm() {
            // Handle form submission here
            // You can access form data from this.formData
            // e.g., this.formData.email, this.formData.uname, etc.
        },
    },
};
</script>
<style>
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
}

p {
	color: grey;
}

#heading {
	text-transform: uppercase;
	color: #673AB7;
	font-weight: normal;
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    position: relative;
}

.form-card {
	text-align: left;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform input, #msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0;
}

/*Next Buttons*/
#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right;
}

#msform .action-button:hover, #msform .action-button:focus {
    background-color: #311B92;
}

/*Previous Buttons*/
#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
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
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

/*Icon ProgressBar before any progress*/
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
#progressbar li.active:before, #progressbar li.active:after {
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
.fit-image{
    width: 100%;
    object-fit: cover;
}
</style>
  