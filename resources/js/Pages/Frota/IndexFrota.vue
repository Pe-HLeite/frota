<script setup>
import {
    Card,
    Password
} from 'primevue';
</script>

<template style="height: 100%;">
    <div class="card">
        <Card class="card-center">
            <template #header class="">
                Aqui vem o titulo do card
            </template>
            <template #content class="flex text-3xl font-bold underline">
                Corpo do card Prime-Vue
                <Password v-model="value" toggleMask />
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
        /* background-color: rgb(22, 16, 21) !important; */
        width: 25%;
    }
    #app {
        height: 100%;
    }
</style>    