<script setup>
import Card from 'primevue/card';
</script>

<template style="height: 100%;">
    <div class="card">
        <Card class="card-center">
            <template #header>
            </template>
            <template #content>
            </template>
        </Card>
    </div>
</template>

<style>
    .card {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-center {
        background-color: rgb(22, 16, 21) !important;
        width: 40%;
    }
    #app {
        height: 100%;
    }
</style>    