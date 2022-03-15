<template>
  <div>
    <div v-if="type ==='success' && showAlert" class="p-2.5 bg-success-transparent text-success mb-2 flex items-center justify-between">
      <div class="">
        <span class="font-bold text-success">Success!</span>
        {{message}}
      </div>
      <a href="#" class="text-lg text-primary" @click="hide">x</a>
    </div>

    <div v-if="type ==='warning' && showAlert" class="p-2.5 bg-warning-transparent text-warning mb-2 flex items-center justify-between">
      <div class="">
        <span class="font-bold text-warning">Warning!</span>
        {{message}}
      </div>
      <a href="#" class="text-lg text-warning" @click="hide">x</a>
    </div>

    <div v-if="type ==='danger' && showAlert" class="p-2.5 bg-danger-transparent text-danger mb-2 flex items-center justify-between">
      <div class="">
        <span class="font-bold text-danger">Error!</span>
        {{message}}
      </div>
      <a href="#" class="text-lg text-danger" @click="hide">x</a>
    </div>

  </div>
</template>

<script>
export default {
 props : ['message', 'type'],
  data(){
   return {
     showAlert : true
   }
  },
  methods : {
    hide(){
      this.showAlert = false;
    }
  }
}
</script>
