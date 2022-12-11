<template>
  <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-text">{{ course.name_course }}</h5>
              <p class="card-text"><b>Credits:</b> {{ course.credits }}</p>
              <button @click="seeDetails" class="btn btn-danger btn-sm btn-fill">See Details</button>
            </div>
          </div>
        </div>
</template>

<script>
import Swal from 'sweetalert2';

export default {
    props: {
        course: {
            type: Object
        }
    },
    setup(props) {

      const seeDetails = () => {
      
        Swal.fire({
          title: props.course.name_course,
          html:
            '<p><b>Credits</b> ' + props.course.credits + '</p>' +
            '<p><b>Proffesor</b> ' + props.course.name_proffesor + '</p>' +
            '<p><b>Course Pre-requisite</b> ' + props.course.course_prerequisite + '</p>' +
            '<p><b>Required Self Hours of Work</b> ' + props.course.self_work_hours + '</p>' +
            '<p><b>Required Coure Hours of Work</b> ' + props.course.class_work_hours + '</p>'
        })


      }

      return {
        seeDetails,
      }

    }
}
</script>

<style>
.btn-fill {
  width: 100%;
}
</style>