<script setup>
import JetNavLink from "@/Jetstream/NavLink.vue";
</script>

<template>
  <div class="grid grid-cols-1 grid-rows-1 w-full">
    <div
      class="w-full h-full bg-[image:linear-gradient(to_right,theme(colors.blue.500)_85%,theme(colors.blue.900))] max-h-12"
    >
      <div
        class="p-2 w-full h-full flex flex-row text-gray-100 text-2xl text-[times-new-roman] justify-between place-items-center"
      >
        <div class="flex place-items-center">
          <JetNavLink class="text-gray-100 text-2xl" href="#home"
            >DEKADE COFFEE</JetNavLink
          >
          <p class="pl-4 text-sm">jln keledang No. 48 Vorvo Samarinda,Kalimantan Timur</p>
        </div>
        <section class="text-center place-items-center place-content-center pr-4">
          <button
            class="hover:text-white text-sm active:bg-gray-500 bg-red-500 hover:bg-red-200 rounded-sm px-2 py-1"
          >
            Log out
          </button>
        </section>
      </div>
    </div>
  </div>
</template>
