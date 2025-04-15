<template>
    Dentro do template de listagem de usuarios
    <div class="w-full bg-red-50 flex justify-center">
        Parte de usuarios
        <Button type="button" label="Criar novo cadasstro" />
    </div>
    <!-- <div class="w-3/5 ">
        <DataTable 
        >
            <Column 
                field="nome"
                header="Nome"
            />
            <Column 
                field="cargo"
                header="Cargo"
            />
            <Column 
                field="secretaria_id"
                header="Secretaria vinculado(a)"
            />
            <Column 
                field="created_at"
                header="Data de cadastro"
            />
    
        </DataTable>
    </div> -->
</template>

<script setup>
    import {
        DataTable,
        Column, 
        Button,

    } from 'primevue'
</script>
