<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login - Sistem Akreditasi UHO</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"/>
        <link rel="stylesheet" href="/assets/css/tailwind.output.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer="defer"></script>
        <script src="/assets/js/init-alpine.js"></script>
        <script>
            window.onload = function () {
                var year = new Date().getFullYear();
                document.getElementById('year').innerHTML = year;
            };
        </script>
    </head>

    <body>
        <div class="flex items-center h-screen bg-gray-50 dark:bg-gray-900">
            <div class="w-full flex flex-col md:flex-row">
                <!-- <div class="flex md:h-auto md:w-1/2 items-center justify-start">
                        <img
                            aria-hidden="true"
                            class="object-cover w-full h-screen dark:block"
                            src=" <?= base_url('assets/img/login-color.jpg') ?> "
                            alt="haluoleo university">
                </div> -->
                <div class="w-full flex justify-center items-center p-6 sm:p-12" style="background-image: url('assets/img/bglogin.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="md:w-1/2 justify-center items-center">
                        <div class="logo flex items-center justify-center ">
                            <img class="mb-4 items-center justify-items-center" src="<?= base_url('assets/img/logo.png') ?>" alt="loginlogo" style="width: 112px; height: 105px;">
                        </div> 
                        <h1
                            class="text-center mb-4 text-2xl font-semibold">
                            Login Akun
                        </h1>
                        <span class="block text-center items-center text-lg mb-8">
                            Sistem Penentuan Kelayakan Penerima KIP <br> SMAN 1 Tirawuta
                        </span>
                        <hr>    
                        <form action="<?= base_url('auth') ?>" method="POST">
                            <?php if (session()->getFlashdata('success')) { ?>
                                <div class="text-center bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
                                    <span class="block sm:inline font-semibold"><?php echo session()->getFlashdata('success'); ?></span>
                                </div>
                            <?php } ?>
                            <?php if (session()->getFlashdata('error')) { ?>
                                <div class="text-center bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                    <span class="block sm:inline font-semibold"><?php echo session()->getFlashdata('error'); ?></span>
                                </div>
                            <?php } ?>
                            <label for="inputUsername" class="block text-sm my-4">
                                <span class="text-gray-700 font-semibold">Username</span>
                                <input class="block w-full mt-1 text-sm dark:border-gray-600 focus:border-purple-400 rounded-lg focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" name="username" id="inputUsername" value="<?= old('username') ?>" placeholder="Username..." />
                            </label>
                            <label for="inputPassword" class="block mt-4 text-sm">
                                <span class="text-gray-700 font-semibold">Password</span>
                                <div class="relative">
                                    <input 
                                    class="block w-full mt-1 text-sm pr-10 dark:border-gray-600 focus:border-purple-400 rounded-lg focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                    name="password"
                                    id="inputPassword"
                                    placeholder="********"
                                    type="password"
                                    />
                                    <!-- Toggle Button -->
                                    <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                    <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    </button>
                                </div>
                            </label>
                            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="login">Login</button>
                        </form>
                        <br>
                        <p class="text-center text-sm mt-8">&copy; <span id="year"></span> - SMAN 1 Tirawuta</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
                function togglePassword() {
                    const input = document.getElementById('inputPassword');
                    const icon = document.getElementById('eyeIcon');
                    if (input.type === 'password') {
                    input.type = 'text';
                    icon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.542-7a9.977 
                        9.977 0 012.293-3.95m1.414-1.414A9.956 9.956 0 0112 
                        5c4.478 0 8.269 2.943 9.542 7a9.976 9.976 0 01-4.137 
                        5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3l18 18" />
                    `;
                    } else {
                    input.type = 'password';
                    icon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 
                        8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 
                        7-4.477 0-8.268-2.943-9.542-7z" />
                    `;
                    }
                }
        </script>
    </body>

</html>