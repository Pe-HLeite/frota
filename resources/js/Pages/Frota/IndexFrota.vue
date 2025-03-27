
<script setup lang="ts">
    import {
        Button,
        Card,
    } from 'primevue';
</script>

<template>
    <div>
        <h1>Testando PrimeVue</h1>
        <Button label="Clique Aqui" icon="pi pi-check" severity="danger" />
    </div>
    <Button label="Secondary" severity="secondary" />
    <Card>
        <template  #title>Card teste</template>
        <template #content>
            Corpo do card de teste
        </template>
    </Card>
</template>


