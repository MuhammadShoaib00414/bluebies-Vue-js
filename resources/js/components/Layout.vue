<template>
    <Navbar />
    <div class="custom-container container-fluid">
        <slot></slot>
    </div>
    <Footer />
</template>
<script>
import Navbar from './Navbar.vue';
import Footer from './Footer.vue';
export default {
    name: 'Home',
    components: {
        Navbar,
        Footer
    },
}
</script>
