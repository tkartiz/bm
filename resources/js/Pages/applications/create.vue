<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="新規申請" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">新規申請</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="text-gray-600 body-font relative">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-1/5">
                                            <label for="name" class="leading-7 text-sm text-gray-600">申請番号</label>
                                            <p>********</p>
                                        </div>
                                        <div class="p-2 w-2/5 flex">
                                            <div class="relative w-1/2 pe-2">
                                                <label for="family-name"
                                                    class="leading-7 text-sm text-gray-600">依頼者・姓</label>
                                                <input type="text" id="family-name" name="family-name"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                            <div class="relative w-1/2">
                                                <label for="name" class="leading-7 text-sm text-gray-600">依頼者・名</label>
                                                <input type="text" id="name" name="name"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 relative w-2/5">
                                            <label for="member" class="leading-7 text-sm text-gray-600">所属</label>
                                            <input type="text" id="member" name="member"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="p-2 relative w-1/5"></div>
                                        <div class="p-2 relative w-2/5">
                                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                            <input type="email" id="email" name="email"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="p-2 w-2/5 flex flex-wrap">
                                            <div class="relative w-1/3 pe-2">
                                                <label for="phone-num1"
                                                    class="leading-7 text-sm text-gray-600">電話番号・市外局番</label>
                                                <input type="text" id="phone-num1" name="phone-num1"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                            <div class="relative w-1/3 pe-2">
                                                <label for="phone-num2"
                                                    class="leading-7 text-sm text-gray-600">電話番号・市内局番</label>
                                                <input type="text" id="phone-num2" name="phone-num2"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                            <div class="relative w-1/3">
                                                <label for="phone-num3"
                                                    class="leading-7 text-sm text-gray-600">電話番号・個別番号</label>
                                                <input type="text" id="phone-num3" name="phone-num3"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-4/5">
                                            <div class="relative">
                                                <label for="subject" class="leading-7 text-sm text-gray-600">品名</label>
                                                <input type="text" id="subject" name="subject"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/5">
                                            <div class="relative">
                                                <label for="desired_dlvd_at"
                                                    class="leading-7 text-sm text-gray-600">希望納期</label>
                                                <input type="text" id="desired_dlvd_at" name="desired_dlvd_at"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/5">
                                            <div class="relative">
                                                <label for="works_quantity"
                                                    class="leading-7 text-sm text-gray-600">依頼点数</label>
                                                <input type="text" id="works_quantity" name="works_quantity"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-3/5"></div>
                                        <div class="p-2 w-1/5">
                                            <div class="relative">
                                                <label for="severity" class="leading-7 text-sm text-gray-600">緊急度</label>
                                                <input type="text" id="severity" name="severity"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-3/5"></div>
                                        <div class="p-2 w-2/5 flex">
                                            <p class="leading-7 text-sm text-gray-600 me-2">見積金額（税抜）</p>
                                            <p class="me-10">￥**,***</p>
                                            <p class="leading-7 text-sm text-gray-600 me-2">見積金額（税込）</p>
                                            <p>￥**,***</p>
                                        </div>
                                        <div class="p-2 w-full">内訳：</div>
                                        <div class="p-2 w-full flex text-center">
                                            <div class="p-2 w-1/12">項目</div>
                                            <div class="p-2 w-1/12">サイズ</div>
                                            <div class="p-2 w-1/12">出力形式</div>
                                            <div class="p-2 w-4/12">上段：品目／下段：内容</div>
                                            <div class="p-2 w-1/12">数量</div>
                                            <div class="p-2 w-2/12">金額（税抜）</div>
                                            <div class="p-2 w-2/12">金額（税込）</div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="subject" class="leading-7 text-sm text-gray-600">品名</label>
                                                <textarea id="subject" name="subject"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <button
                                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">入力する</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>
        </div>
    </div>
</AuthenticatedLayout></template>