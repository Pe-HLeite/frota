<script setup>
import {
    Card,
    InputText,
    Password,
} from 'primevue';
</script>

<template style="height: 100%;">
    <div class="card">
        <Card class="card-center">
            <template #header class="flex justify-center">
                <p class="text-center text-xl font-bold ">
                    Login
                </p>
            </template>
            <template #content class="flex flex justify-center ">
                <div class="informacoes-login gap-2">
                    <InputText type="text" v-model="value" />
                    <Password v-model="value" toggleMask />
                </div>
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