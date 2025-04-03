<template>
    Dentro do template de listagem de usuarios
    <div class="w-3/5 ">
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
    </div>
</template>

<script setup>
    import {
        DataTable,
        Column
    } from 'primevue'
</script>
