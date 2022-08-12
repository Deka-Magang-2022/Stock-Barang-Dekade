<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form
    .transform((data) => ({
      ...data,
      remember: form.remember ? "on" : "",
    }))
    .post(route("login"), {
      onFinish: () => form.reset("password"),
    });
};
</script>

<template>
  <Head title="Log in" />

  <JetAuthenticationCard>
    <template #logo>
      <p class="text-6xl place-items-center text-center font-[Helvetica]">DEKA STOCK</p>
    </template>

    <JetValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <div class="flex flex-row space-x-3">
        <svg
          class="w-10 h-auto"
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          role="img"
          width="1em"
          height="1em"
          preserveAspectRatio="xMidYMid meet"
          viewBox="0 0 48 48"
        >
          <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
            <path
              d="M14.809 34.714c6.845-1 11.558-.914 18.412.035A2.077 2.077 0 0 1 35 36.818c0 .48-.165.946-.463 1.31A61.165 61.165 0 0 1 32.941 40h2.641c.166-.198.333-.4.502-.605A4.071 4.071 0 0 0 37 36.819c0-2.025-1.478-3.77-3.505-4.05c-7.016-.971-11.92-1.064-18.975-.033c-2.048.299-3.52 2.071-3.52 4.11c0 .905.295 1.8.854 2.525c.165.214.328.424.49.63h2.577a57.88 57.88 0 0 1-1.482-1.85A2.144 2.144 0 0 1 13 36.845c0-1.077.774-1.98 1.809-2.131ZM24 25a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z"
            />
            <path
              d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"
            />
          </g>
        </svg>
        <JetInput
          id="email"
          v-model="form.email"
          type="email"
          class="form-control border-transparent focus:placeholder:text-transparent block text-black bg-transparent transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none border-b-2 focus:ring-0 focus:border-b-black focus:border-transparent"
          placeholder="E-mail"
          required
          autofocus
        />
      </div>
      <div class="flex flex-row mt-4 space-x-3">
        <svg
          class="w-10 h-auto"
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
            d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304zM484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 1 0-56 0z"
          />
        </svg>
        <JetInput
          id="password"
          v-model="form.password"
          type="password"
          class="form-control border-transparent focus:placeholder:text-transparent block text-black bg-transparent transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none border-b-2 focus:ring-0 focus:border-b-black focus:border-transparent"
          placeholder="Password"
          required
        />
      </div>
      <div class="block mt-4">
        <label class="flex items-center">
          <JetCheckbox v-model:checked="form.remember" name="remember" />
          <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
      </div>
      <div class="flex items-center justify-end mt-4">
        <Link
          v-if="canResetPassword"
          :href="route('password.request')"
          class="underline text-sm text-gray-600 hover:text-gray-900"
        >
          Forgot your password?
        </Link>
        <JetButton
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Log in
        </JetButton>
      </div>
    </form>
  </JetAuthenticationCard>
</template>
