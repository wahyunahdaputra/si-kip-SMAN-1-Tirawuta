<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<<<<<<< HEAD
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login - Sistem Akreditasi UHO</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"/>
        <link rel="stylesheet" href="../assets/css/tailwind.output.css"/>
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer="defer"></script>
        <script src="../assets/js/init-alpine.js"></script>
    </head>

    <body>
        <div class="flex items-center h-screen bg-gray-50 dark:bg-gray-900">
            <div class="w-full flex flex-col md:flex-row">
                <div class="flex md:h-auto md:w-full items-center justify-center">
                    <div class="logo">
                        <img
                            aria-hidden="true"
                            class="object-cover w-full h-screen dark:hidden"
                            src=" <?= base_url('assets/img/login-light.png') ?>"
                            alt="haluoleo university">
                        <img
                            aria-hidden="true"
                            class="hidden object-cover w-full h-screen dark:block"
                            src=" <?= base_url('assets/img/login-dark.png') ?> "
                            alt="haluoleo university">
                    </div>
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full items-center">
                        <h1
                            class="text-center mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Login
                        </h1>
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Username</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Masukkan username..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="***************"
                                type="password"/>
                        </label>

                        <!-- You should use a button here, as the anchor is only used for the example
                        -->
                        <a
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                            href="/data/home">
                            Log in
                        </a>

                        <hr class="my-8"/>

                        <p class="mt-4">
                            <a
                                class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                href="./forgot-password.html">
                                Forgot your password?
                            </a>
                        </p>
                        <p class="mt-1">
                            <a
                                class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                href="./create-account.html">
                                Create account
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
=======
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Sistem Akreditasi UHO</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex items-center h-screen bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col md:flex-row">
      <div class="flex md:h-auto md:w-full items-center justify-center">
        <div class="logo">
          <img aria-hidden="true" class="object-cover w-full h-screen dark:hidden" src=" <?= base_url('assets/img/login-light.png') ?>" alt="haluoleo university">
          <img aria-hidden="true" class="hidden object-cover w-full h-screen dark:block" src=" <?= base_url('assets/img/login-dark.png') ?> " alt="haluoleo university">
        </div>
      </div>
      <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
          <h1 class="text-center mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Login
          </h1>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Username</span>
            <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukkan username..." />
          </label>
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" />
          </label>

          <!-- You should use a button here, as the anchor is only used for the example  -->
          <a class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" href="/data/home">
            Log in
          </a>

          <hr class="my-8" />

          <p class="mt-4">
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="./forgot-password.html">
              Forgot your password?
            </a>
          </p>
          <p class="mt-1">
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="./create-account.html">
              Create account
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
>>>>>>> 5b617110752a594c3ffd46761c776b4fe0ac5dba

</html>