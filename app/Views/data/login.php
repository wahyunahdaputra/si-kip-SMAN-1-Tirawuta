<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

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
                <div class="flex md:h-auto md:w-1/2 items-center justify-start">
                    <!-- <div class="logo">
                        
                    </div> -->
                    <img
                            aria-hidden="true"
                            class="object-cover w-3/4 h-screen dark:hidden"
                            src=" <?= base_url('assets/img/login-color.jpg') ?>"
                            alt="haluoleo university">
                        <img
                            aria-hidden="true"
                            class="hidden object-cover w-full h-screen dark:block"
                            src=" <?= base_url('assets/img/login-dark.png') ?> "
                            alt="haluoleo university">
                </div>
                <div class="w-full flex justify-center items-center p-6 sm:p-12">
                    <div class="md:w-1/2 items-center">
                        <h1
                            class="text-center mb-2 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Login
                        </h1>
                        <h3 class="text-center text-lg mb-8">
                            Sistem Akreditasi Universitas Halu Oleo
                        </h3>
                        <label class="block text-sm my-4">
                            <span class="text-gray-700 dark:text-gray-400">Username</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Masukkan username..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="********"
                                type="password"/>
                        </label>

                        <!-- You should use a button here, as the anchor is only used for the example
                        -->
                        <a
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                            href="/data/home">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>