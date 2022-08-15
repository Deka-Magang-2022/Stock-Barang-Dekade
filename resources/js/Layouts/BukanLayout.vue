<script setup>
import Sidebar from "../Shared/Sidebar.vue";
import Pala from "../Shared/Pala.vue";
</script>

<template>
  <Sidebar>
    <Pala>
      <slot />
    </Pala>
  </Sidebar>
</template>
