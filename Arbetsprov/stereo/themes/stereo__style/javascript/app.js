import Vue from 'vue'
import App from './App.vue'
import Header from './components/Header.vue'
import Footer from './components/Footer'
import Welcome from './components/Welcome'

Vue.config.productionTip = false

Vue.component('app-header', Header);
Vue.component('app-footer', Footer);
Vue.component('app-welcome', Welcome);

new Vue({
  el: '#app',
  render: h => h(App)
})