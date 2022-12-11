<template>
  <div class="container">
    <div class="mt-2 mb-2 row row-cols-1 row-cols-md-5 g-4">
      <template v-for="course in courses" :key="course.id">
        <Course :course="course" />
      </template>
    </div>
  </div>
</template>

<script>
import { getCourses } from '../services/course';
import { ref, onMounted }  from 'vue';
import Swal from 'sweetalert2';
import Course from '../components/CourseHome.vue';

export default {
  components: {
    Course
  },
  setup() {

    let courses = ref([]);

    onMounted(async () => {

      Swal.fire({
        allowOutsideClick: false,
        text: 'Loading...'
      });
      
      Swal.showLoading();
      
      const resp = await getCourses();
      const body = await resp.json();
      courses.value = body;
      Swal.close();
    
    });

    return {
      courses
    }

  },
}
</script>

<style>


</style>
