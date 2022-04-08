/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

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

const app = new Vue({
    el: '#app',
});

function loadmodal(){
    let modal = document.getElementById('modal_add');

    modal.innerHTML="<div class=\"modal\" tabindex=\"-1\">\n" +
        "  <div class=\"modal-dialog\">\n" +
        "    <div class=\"modal-content\">\n" +
        "      <div class=\"modal-header\">\n" +
        "        <h5 class=\"modal-title\">Adicione Um Departamento</h5>\n" +
        "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n" +
        "      </div>\n" +
        "      <div class=\"modal-body\">\n" +
        "        <form action=\"{{url('/departamentos/add')}}\" method='post'>" +
        "          <label name=\" departamento \">Introduza o nome do seu departamento:</label>  " +
        "           <input type=\" text \" > " +
        "       </form>\n" +
        "      </div>\n" +
        "      <div class=\"modal-footer\">\n" +
        "        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>\n" +
        "        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>\n" +
        "      </div>\n" +
        "    </div>\n" +
        "  </div>\n" +
        "</div>\n";


}
