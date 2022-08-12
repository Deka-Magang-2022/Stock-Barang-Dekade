<script setup></script>

<template>
  <form class="p-8">
    <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200">
      <!-- textarea-nya -->
      <div
        class="py-2 px-4 bg-white rounded-b-lg focus:border-b-gray-900 focus:border-b-4"
      >
        <textarea
          id=""
          rows="8"
          class="block px-0 w-full text-sm text-gray-800 bg-white border-0 placeholder:text-gray-300 focus:ring-0"
          placeholder="Textarea"
          required=""
        ></textarea>
      </div>
    </div>
    <button
      type="submit"
      class="flex gap-2 items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800"
    >
      Posting
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="w-4 h-4"
        aria-hidden="true"
        role="img"
        width="1em"
        height="1em"
        preserveAspectRatio="xMidYMid meet"
        viewBox="0 0 24 24"
      >
        <path
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M9.912 12H4L2.023 4.135A.662.662 0 0 1 2 3.995c-.022-.721.772-1.221 1.46-.891L22 12L3.46 20.896c-.68.327-1.464-.159-1.46-.867a.66.66 0 0 1 .033-.186L3.5 15"
        />
      </svg>
    </button>
  </form>
</template>
