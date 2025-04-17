<template>
    <Card class="py-12">
        <template #content>
            <div class="w-full">
                <Form>
                    <div class="w-full flex flex-col gap-2">
                        <FloatLabel variant="on" >
                            <InputText id="nomeUsuario" type="text" />
                            <label for="nomeUsuario">Nome usuário:</label>
                        </FloatLabel>

                        <FloatLabel variant="on">
                            <InputText id="emailUsuario" type="email" />
                            <label for="emailUsuario">E-mail usuário:</label>
                        </FloatLabel>

                        <FloatLabel variant="on">
                            <Password id="senhaUsuario" type="password" toggleMask  />
                            <label for="senhaUsuario">Senha usuário:</label>
                        </FloatLabel>
                    </div>
                </Form>
            </div>
        </template>
    </Card>
</template>

<script setup>
import {
    Card,
    Button,
    Dialog,
    InputText,
    FloatLabel,
    Password 
} from 'primevue'

import { ref } from 'vue';

const visible = ref(false);

import { Form } from '@primevue/forms';
</script>
