<script setup>
import BukanLayout from "../Layouts/BukanLayout.vue";
import Fieldinput from "../Shared/Fieldinput.vue";
</script>

<template>
  <BukanLayout>
    <div class="bg-gray-300 w-full h-full min-h-screen">
      <div class="border-b-2 border-b-black pb-6">
        <p class="text-6xl text-gray-900 capitalize">Stok barang</p>
      </div>
      <div class="mt-6 text-left">
        <table class="w-full bg-gray-100 border-x border-x-black border-y border-y-black">
          <thead>
            <tr class="grid grid-cols-7 font-bold">
              <td class="capitalize border-r border-b pl-3 py-3">id</td>
              <td class="capitalize border-r border-b pl-3 py-3">nama barang</td>
              <td class="capitalize border-r border-b pl-3 py-3">stok sebelumnya</td>
              <td class="capitalize border-r border-b pl-3 py-3">h/b/t</td>
              <td class="capitalize border-r border-b pl-3 py-3">stok sekarang</td>
              <td class="capitalize border-r border-b pl-3 py-3">h/b/t</td>
              <td class="capitalize border-r border-b pl-3 py-3">aksi</td>
            </tr>
          </thead>
          <tbody>
            <tr class="grid grid-cols-7 hover:bg-gray-200">
              <td class="capitalize border-r pl-3 py-3 overflow-auto">1</td>
              <td class="capitalize border-r pl-3 py-3 overflow-auto">skm carnation</td>
              <td class="capitalize border-r pl-3 py-3 overflow-auto">1 kaleng</td>
              <td class="capitalize border-r pl-3 py-3 overflow-auto">10/8/22</td>
              <td class="capitalize border-r pl-3 py-3 overflow-auto">5 kaleng</td>
              <td class="capitalize border-r pl-3 py-3 overflow-auto">11/8/22</td>
              <td class="capitalize pl-3 py-3 overflow-auto">
                <button class="bg-blue-600 text-white p-1 rounded-md">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="img"
                    width="1em"
                    height="1em"
                    preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 16 16"
                  >
                    <g fill="currentColor">
                      <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                      />
                    </g>
                  </svg>
                </button>
                <button class="bg-red-500 text-white p-1 rounded-md">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="img"
                    width="1em"
                    height="1em"
                    preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z"
                    />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="border-b-2 border-b-black py-6">
        <p class="text-6xl text-gray-900 capitalize">tambah stok</p>
      </div>
      <div>
        <div class="mt-4">
          <form action="">
            <div>
              <select class="w-56" name="nama_barang" id="">
                <option class="capitalize" :value="null">Nama Barang</option>
                <option class="capitalize" value="skm_carnation">skm carnation</option>
                <option class="capitalize" value="gula">gula</option>
                <option class="capitalize" value="biji_kopi">biji kopi</option>
              </select>
            </div>
            <div>
              <input
                class="w-56"
                type="number"
                name="jumlah_barang"
                id="jumlah_barang"
                placeholder="Jumlah Barang"
              />
            </div>
            <div class="flex flex-row w-full max-w-64">
              <input
                class="w-56"
                type="number"
                name="no_satuan"
                id="no_satuan"
                placeholder="Satuan"
              />
              <select name="satuan" id="satuan">
                <option value="g">g</option>
                <option value="kaleng">kaleng</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
  </BukanLayout>
</template>
