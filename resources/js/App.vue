<template>
    <div>
        <h1>PrimeVue Testando</h1>
        <Button label="Clique Aqui" icon="pi pi-check" />
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import Button from 'primevue/button';

export default defineComponent({
    components: {
        Button
    }
});
</script>
a