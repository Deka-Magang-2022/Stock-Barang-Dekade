<template>
  <div
    class="sm:justify-center flex flex-col w-full h-full min-h-screen bg-no-repeat bg-cover bg-[url(https://img.freepik.com/free-vector/realistic-coffee-time-background-with-coffee-cup_79603-1560.jpg?w=2000)] dark:bg-gray-800"
  >
    <div class="pr-32">
      <section
        class="w-full h-full min-h-screen flex flex-col place-content-center place-items-end"
      >
        <div class="w-full max-w-lg bg-black/5 px-7 py-5 rounded-lg">
          <slot name="logo" />

          <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            <slot />
          </div>
        </div>
      </section>
    </div>
  </div>
</template>
