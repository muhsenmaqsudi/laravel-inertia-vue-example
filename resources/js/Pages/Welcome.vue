<template>
    <layout>
        <h2>This is a welcome page {{ foo }} </h2>
    </layout>
</template>

<script>
    import Layout from '@/Shared/Layout';
    export default {
        name: "Welcome",
        props: ['foo'],
        components: {
            Layout
        }
    }
</script>

<style scoped>

</style>
