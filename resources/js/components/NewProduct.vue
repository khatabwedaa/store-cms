<template>
    <div>
        <button @click="modelOpen = true" class="mt-3 w-full sm:w-auto py-2 px-4 sm:mt-0 text-sm capitalize tracking-wide bg-gray-800 text-white font-medium rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
            اضافة منتج جديد
        </button>

        <div v-show="modelOpen" class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="px-5 py-3 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <h2 class="text-gray-800 text-xl font-medium text-right">اضافة منتج جديد</h2>

                    <input v-model="name" class="form-input w-full mt-3" type="text" placeholder="اسم المنتج">
                    <input v-model="start_price" class="form-input w-full mt-3" type="text" placeholder="سعر القطعة">
                    <input v-model="sale_price" class="form-input w-full mt-3" type="text" placeholder="سعر بيع القطعة">
                    <input v-model="total" class="form-input w-full mt-3" type="text" placeholder="الكمية">
                    
                    <button @click="addProduct" class="mt-3 w-full py-2 px-4 text-sm capitalize tracking-wide bg-gray-800 text-white font-medium rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                        اضافة
                    </button>

                    <button @click="modelOpen = false" class="mt-3 w-full py-2 px-4 text-sm capitalize tracking-wide bg-red-500 text-white font-medium rounded hover:bg-red-400 focus:outline-none focus:bg-red-400">
                        الغاء
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                start_price: '',
                sale_price: '',
                total: '',
                modelOpen: false
            }
        },

        methods: {
            addProduct() {
                axios.post('/products' , { 
                        name: this.name,
                        start_price: this.start_price,
                        sale_price: this.sale_price,
                        total: this.total
                    })
                    .then(() => { window.location.reload() });
            }
        }
    }
</script>