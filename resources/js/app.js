/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const code_no = $('#category option:selected').val();
const partcat = $('#participation_category option:selected').val();
const app = new Vue({
    el: '#app',
    data: {
      dayone: true,
      daytwo: false,
      daythree: false,
      activelist1: 'active',
      activelist2: '',
      activelist3: '',

      documentRequired: false,
      category: code_no,
      disclaimer: true,
      acceptTermsNcondition: false,
      participationCategory: partcat,
    },

    mounted() {
      this.showSchedule('one');
    },

    watch: {
      category: function(){
        console.log(this.category)
        if(this.category === '1'){
          this.documentRequired = true
        }else{
          this.documentRequired = false
        }
      },

      disclaimerStatus: function(){
        console.log(this.disclaimerStatus)
      }
    },


    methods: {
      categoryChange(event){
        console.log(event.target.value)
        this.category = event.target.value
      },

      showSchedule(day){
        if(day == 'one'){
          this.dayone = true
          this.daytwo = false
          this.daythree = false
          this.activelist1 = 'active'
          this.activelist2 = ''
          this.activelist3 = ''
        }else if(day == 'two'){
          this.dayone = false
          this.daytwo = true
          this.daythree = false
          this.activelist1 = ''
          this.activelist2 = 'active'
          this.activelist3 = ''
        }else{
          this.dayone = false
          this.daytwo = false
          this.daythree = true
          this.activelist1 = ''
          this.activelist2 = ''
          this.activelist3 = 'active'
        }
      }
    }
});

require('./custom');
