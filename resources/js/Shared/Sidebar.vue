<script setup>
import JetNavLink from "@/Jetstream/NavLink.vue";
import Dropdown from "@/Jetstream/Dropdown.vue";
import DropdownLink from "@/Jetstream/DropdownLink.vue";
</script>

<template>
  <div class="flex flex-row">
    <div
      class="h-auto min-h-screen bg-gray-200 text-gray-900 w-56 font-[Helvetica] overflow-auto fixed"
    >
      <!-- sidenav menu -->
      <section class="pt-5 pb-5">
        <section class="hover:text-blue-300 hover:bg-blue-900">
          <JetNavLink class="flex flex-row items-center pl-3 py-2" href="/dashboard">
            <span>
              <svg
                class="w-8 h-8 pr-2"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                role="img"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  d="M11 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h6v18zm2 0h6c1.1 0 2-.9 2-2v-7h-8v9zm8-11V5c0-1.1-.9-2-2-2h-6v7h8z"
                />
              </svg> </span
            >DashBoard
          </JetNavLink>
        </section>
        <section class="hover:text-blue-300 hover:bg-blue-900">
          <JetNavLink class="flex flex-row items-center pl-3 py-2" href="/transaksi">
            <span>
              <svg
                class="w-8 h-8 pr-2"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                role="img"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24"
              >
                <g
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                >
                  <path
                    d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Z"
                  />
                  <circle cx="12" cy="12" r="3" />
                  <path d="M2 9v0a4 4 0 0 0 4-4v0m12 14v0a4 4 0 0 1 4-4v0" />
                </g>
              </svg> </span
            >Transaksi
          </JetNavLink>
        </section>
        <section class="hover:text-blue-300 hover:bg-blue-900">
          <JetNavLink class="flex flex-row items-center pl-3 py-2" href="/stok">
            <span>
              <svg
                class="w-8 h-8 pr-2"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                role="img"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 32 32"
              >
                <path
                  fill="currentColor"
                  d="M24 21c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C11.2 9 11 8.5 11 8s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm0 24c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C3.2 17 3 16.5 3 16s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3z"
                />
              </svg> </span
            >Stok
          </JetNavLink>
        </section>
        <section class="hover:text-blue-300 hover:bg-blue-900">
          <JetNavLink class="flex flex-row items-center pl-3 py-2" href="/barangmasuk">
            <span>
              <svg
                class="w-8 h-8 pr-2"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                role="img"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 20 20"
              >
                <path
                  fill="currentColor"
                  d="M11 3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V3Zm4 0h-3v2h3V3Zm-1.5 4a.5.5 0 0 1 .5.5v5.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L13 13.293V7.5a.5.5 0 0 1 .5-.5ZM4 12a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2Zm4 0H5v2h3v-2Zm-5.5 1a.5.5 0 0 1 .5.5V15a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1.5a.5.5 0 0 1 1 0V15a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1.5a.5.5 0 0 1 .5-.5Z"
                />
              </svg> </span
            >Barang Masuk
          </JetNavLink>
        </section>
        <section class="hover:text-blue-300 hover:bg-blue-900">
          <Dropdown>
            <template #trigger>
              <div class="flex flex-row items-center pl-3 py-2 cursor-pointer">
                <span>
                  <svg
                    class="w-8 h-8 pr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="img"
                    width="1em"
                    height="1em"
                    preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="m12 23l-9.5-5.5v-11L12 1l9.5 5.5v11L12 23Zm0-19.688L4.5 7.653v8.694l7.5 4.342l7.5-4.342V7.653L12 3.311v.001ZM12 16a4 4 0 1 1 2.828-1.172A4.027 4.027 0 0 1 12 16Zm0-6a2 2 0 1 0-.001 4A2 2 0 0 0 12 10Z"
                    />
                  </svg> </span
                >Pengaturan
              </div>
            </template>
            <template #content>
              <div class="flex flex-col">
                <DropdownLink
                  href="/akun"
                  class="pl-10 py-2 hover:text-blue-900 text-white"
                  >Akun</DropdownLink
                >
                <DropdownLink
                  href="/password"
                  class="pl-10 py-2 hover:text-blue-900 text-white"
                  >Password</DropdownLink
                >
              </div>
            </template>
          </Dropdown>
        </section>
      </section>
      <!-- end sidenav menu -->
    </div>

    <slot />
  </div>
</template>
