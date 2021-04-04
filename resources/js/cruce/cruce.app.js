import Vue from 'vue';
import Api from './../api';

const store = window.__store__;

const app = new Vue({
    el: '#app',
    components: {},
    data() {
        return {
            cruce: store.cruce,
            fasesTransciciones: [],
            send: false,
        }
    },
    computed: {},
    methods: {
        get() {
            setTimeout(() => {
                Api.get('/api/fase-transicion', {params: {cruce_id: this.cruce.id}}).then(({data}) => {
                    this.fasesTransciciones = data;
                    this.send = true;
                });
            }, 5000);
        }
    },
    mounted() {
        // this.send = true;
    },
    watch: {
        send(valor) {
            if (valor) {
                this.send = false;
                this.get();
            }
        }
    }
});
