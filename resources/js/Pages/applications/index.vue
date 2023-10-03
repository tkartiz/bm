<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
defineProps({ applications: Array })
</script>

<template>
    <Head title="Application" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">制作依頼受付</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="group p-6 text-gray-900 space-x-5">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>申請者ID</th>
                                    <th>品名</th>
                                    <th>制作数</th>
                                    <th>申請日</th>
                                    <th>希望納期</th>
                                    <th>改定No.</th>
                                    <th>制作物1_ID</th>
                                    <th>制作物2_ID</th>
                                    <th>制作物3_ID</th>
                                    <th>制作物4_ID</th>
                                    <th>制作物5_ID</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr v-for="application in applications" :key="application.id">
                                    <td>{{ application.id }}</td>
                                    <td>{{ application.client_id }}</td>
                                    <td>{{ application.subject }}</td>
                                    <td>{{ application.works_quantity }}</td>
                                    <td>{{ application.applicated_at }}</td>
                                    <td>{{ application.desired_dlvd_at }}</td>
                                    <td>{{ application.revision }}</td>
                                    <td>{{ application.works1_id }}</td>
                                    <td>{{ application.works2_id }}</td>
                                    <td>{{ application.works3_id }}</td>
                                    <td>{{ application.works4_id }}</td>
                                    <td>{{ application.works5_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <Link as="button" :href="route('applications.create')" class="w-full bg-indigo-700 font-semibold text-white py-2 px-4 rounded">新規申請</Link> -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
