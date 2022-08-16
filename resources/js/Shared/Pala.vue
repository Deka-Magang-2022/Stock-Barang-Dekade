<template>
  <div class="flex flex-col w-full px-10 bg-gray-300 text-gray-900">
    <nav class="py-3 w-full h-13">
      <div class="w-full h-full text-right">
        <button class="rounded-sm py-1">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            role="img"
            style="vertical-align: -0.125em"
            width="1em"
            height="1em"
            preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 24 24"
          >
            <path
              fill="currentColor"
              d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"
            />
            <path fill="currentColor" d="m11 16l5-4l-5-4v3.001H3v2h8z" />
          </svg>
        </button>
      </div>
    </nav>
    <section class="xl:pl-60 lg:pl-60">
      <slot />
    </section>

    <footer>
      <div class="flex px-3 py-1 bg-slate-300">
        <p class="text-sm w-full capitalize text-right">
          jln keledang No. 48 Vorvo Samarinda, Kalimantan Timur
        </p>
      </div>
    </footer>
  </div>
</template>
