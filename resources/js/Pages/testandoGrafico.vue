<template>
    <div class="py-12 px-12">
        <card>
            <template #content>
                <div class="card flex justify-center">
                    <Chart type="pie" :data="chartData" :options="chartOptions" class="w-full md:w-[30rem]" />
                </div>
            </template>
        </card>
    </div>
</template>

<script setup>
import {
    Card
} from 'primevue';

import Chart from 'primevue/chart';

import { ref, onMounted } from "vue";

onMounted(() => {
    chartData.value = setChartData();
    chartOptions.value = setChartOptions();
});

const chartData = ref();
const chartOptions = ref();

const setChartData = () => {
    const documentStyle = getComputedStyle(document.body);

    return {
        labels: ['Teste', 'Teste 002', 'Teste 003'],
        datasets: [
            {
                data: [3, 3, 3],
                backgroundColor: [documentStyle.getPropertyValue('--p-cyan-500'), documentStyle.getPropertyValue('--p-orange-500'), documentStyle.getPropertyValue('--p-gray-500')],
                hoverBackgroundColor: [documentStyle.getPropertyValue('--p-cyan-400'), documentStyle.getPropertyValue('--p-orange-400'), documentStyle.getPropertyValue('--p-gray-400')]
            }
        ]
    };
};

const setChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');

    return {
        plugins: {
            legend: {
                labels: {
                    usePointStyle: true,
                    color: textColor
                }
            }
        }
    };
};
</script>