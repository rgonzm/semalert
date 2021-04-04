import Vue from 'vue';

const app = new Vue({
    el: '#app',
    components: {},
    data() {
        return {
            prueba: 'asd',
        }
    },
    computed: {},
    methods: {
        irMunicipio(municipioId) {
            window.location.href = 'municipio/' + municipioId;
        }
    },
    mounted() {
    }
    ,
});
