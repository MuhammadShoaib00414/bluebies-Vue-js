<template>
  <div class="text-left d-none d-md-block">
    <ul class="list-unstyled list-inline m-0">
      <li class="list-inline-item mx-1">
        <div class="font-2x font-3x">70</div>
        <small>عرض</small>
      </li>
      <li class="list-inline-item mx-1">
        <div class="font-2x font-3x">60</div>
        <small>طلب</small>
      </li>
    </ul>
  </div>

  <ul
    class="list-unstyled list-inline d-flex justify-content-between align-items-center dach-links"
  >
     <li class="px-1">
      <a
        @click="navigateTo('/dashboard')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard') }"
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="icofont-home fa-2x"></i>
          </div>
          <p class="mt-2 mb-0">لوحة التحكم</p>
        </div>
      </a>
    </li>
    <li class="px-1">
      <a
        @click="navigateTo('/dashboard-orders')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard-orders') }"
      
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-th-large fa-2x"></i>
          </div>
          <p class="mt-2 mb-0">الطلبات</p>
        </div>
      </a>
    </li>
    <li class="px-1">
      <a
       
        @click="navigateTo('/dashboard-offers')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard-offers') }"
      
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="far fa-newspaper fa-2x"></i>
            <span class="badge bg-primary text-white">50</span>
          </div>
          <p class="mt-2 mb-0">العروض</p>
        </div>
      </a>
    </li>
    <li class="px-1">
      <a
      
        @click="navigateTo('/dashboard-support')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard-support') }"
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="far fa-comments fa-2x"></i>
          </div>
          <p class="mt-2 mb-0">الدعم الفني</p>
        </div>
      </a>
    </li>
    <li class="px-1">
      <a
        
        @click="navigateTo('/dashboard-profile')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard-profile') }"
       
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="icofont-file-alt fa-2x"></i>
          </div>
          <p class="mt-2 mb-0">ملف الشركة</p>
        </div>
      </a>
    </li>
    <li class="px-1">
      <a
        @click="navigateTo('/dashboard-settings')"
        :class="{ 'card': true, 'small-card': true, 'active': isActive('/dashboard-settings') }"
      >
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <i class="icofont-gear-alt fa-2x"></i>
          </div>
          <p class="mt-2 mb-0">الاعدادات</p>
        </div>
      </a>
    </li>
  </ul>
</template>
 
<script>
export default {
  methods: {
    navigateTo(path) {
      // Use Vue Router to navigate when links are clicked
      this.$router.push(path);
    },
    isActive(route) {
      // Check if the current route matches the provided route
      return this.$route.path === route;
    }
  }
};
</script>