<script setup>
import Pala from "../Shared/Pala.vue";
import Sidebar from "../Shared/Sidebar.vue";
</script>

<template>
  <Pala />
  <div class="flex flex-row">
    <Sidebar />
    <div class="bg-gray-200 w-full h-full min-h-screen p-9">
      <div class="border-b-2 border-b-black pb-6">
        <p class="text-6xl text-gray-900">Dashboard</p>
      </div>
      <div class="grid grid-flow-row grid-cols-3 space-x-5">
        <section
          class="border-blue-400 border-2 flex flex-col place-items-center my-6 text-center"
        >
          <div class="bg-blue-400 w-full px-8 py-4">
            <p class="text-gray-100">Stock Barang</p>
          </div>
          <div class="py-6 text-2xl">90</div>
          <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
            <button>Tabel Barang</button>
          </div>
        </section>
        <section
          class="border-gray-300 border-2 flex flex-col place-items-center my-6 text-center"
        >
          <div class="bg-green-100 w-full px-8 py-4">
            <p class="text-green-600">Barang Masuk</p>
          </div>
          <div class="py-6 text-2xl">10</div>
          <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
            <button>Tabel Barang</button>
          </div>
        </section>
        <section
          class="border-rose-100 border-2 flex flex-col place-items-center my-6 text-center"
        >
          <div class="bg-rose-100 w-full px-8 py-4">
            <p class="text-rose-600">Menu Deka</p>
          </div>
          <div class="py-6 text-2xl">4</div>
          <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
            <button>Tabel Menu</button>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>
