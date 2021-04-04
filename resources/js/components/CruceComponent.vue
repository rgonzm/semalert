<template>
    <table
        class="table"
    >
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Municipio</td>
            <td>Acciones</td>
        </tr>
        </thead>
        <tbody>
        <tr
            v-for="cruce in cruces"
            :key="cruce.id"
        >
            <td>{{cruce.interseccion}}</td>
            <td>{{cruce.municipio.nombre}}</td>
            <td>
                <a class="btn" :href="'/cruce/'+cruce.id">Ver</a>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        name: "CruceComponent",
        props: {
            cruces: {
                type: Array,
                default: [],
            }
        },
        data() {
            return {}
        },
    }
</script>

<style scoped>

</style>
