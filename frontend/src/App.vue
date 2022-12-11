<template>
  <Menu />
  <router-view />
</template>

<script>
import Menu from './components/Menu.vue'
import { onMounted } from 'vue';

export default {
  components: {
    Menu
  },
  setup() {
    onMounted( async () => {

    })
  }
}
</script>

<style>
body {
  background: #f1f5f8;
  font-size: 14px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
</style>