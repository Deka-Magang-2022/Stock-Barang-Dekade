<script setup>
import BukanLayout from "../Layouts/BukanLayout.vue";
</script>

<template>
  <BukanLayout>
    <div class="bg-gray-300 w-full h-full min-h-screen">
      <div class="border-b-2 border-b-black pb-6">
        <p class="text-6xl text-gray-900">Akun</p>
      </div>
      <div class="p-6">
        <p class="font-semibold capitalize text-xl">profil</p>
        <div>
          <form>
            <div class="flex flex-row py-6">
              <div class="grid grid-rows-2 w-full">
                <label for="username">Username</label>
                <input
                  type="text"
                  id="username"
                  name="username"
                  placeholder="kurt knispel"
                />
                <label for="tentang">Tentang</label>
                <textarea name="tentang" id="tentang" cols="30" rows="5"></textarea>
              </div>
              <label for="foto">Foto</label>
              <input
                class="w-60 rounded-full h-auto"
                type="image"
                src="https://cdn.pixabay.com/photo/2017/06/13/12/54/profile-2398783_960_720.png"
                alt="Ini Foto"
                name="foto"
              />
            </div>
          </form>
        </div>
      </div></div
  ></BukanLayout>
</template>
