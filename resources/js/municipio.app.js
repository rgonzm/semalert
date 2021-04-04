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
        irCruce(cruceId) {
            window.location.href = '/cruce/' + cruceId;
            this.$emit();
        }
    },
    mounted() {
    },
});
