<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple Login Form Tailwind CSS #01</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="relative font-medium md:h-screen flex items-center content-center">
  <div class="mr-auto ml-auto w-full">
    <div class="w-full max-w-md mr-auto ml-auto mt-4 mb-1 text-center">
      <h1 class="text-gray-800 block text-3xl font-extrabold font-title">Sign in</h1>
    </div>
    <div class="w-full max-w-md mr-auto ml-auto mt-4">
      <div class="bg-white shadow-lg rounded-md px-8 py-8 mb-4 ml-auto mr-auto">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-medium mb-2" for="username"> Email
            address </label>
          <input class="shadow-sm appearance-none border border-gray-400 rounded w-full py-4 px-3 text-gray-700 text-sm leading-tight focus:outline-none focus:border-indigo-300" id="username" type="text" placeholder="user@example.com">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-medium mb-2" for="username"> Password </label>
          <input class="shadow-sm appearance-none border border-gray-400 rounded w-full py-4 px-3 text-gray-700 text-sm leading-tight focus:outline-none focus:border-indigo-300" id="password" type="password" placeholder="***************">
        </div>
        <div class="mb-6">
          <div class="grid sm:grid-cols-2 gap-4">
            <div class="text-center sm:text-left">
              <label>
                <input type="checkbox" class="mr-2">
                <span class="text-sm font-medium text-gray-700 ">Remember me</span>
              </label>
            </div>
            <div class="text-center sm:text-right">
              <a href="#" class="text-indigo-600 font-medium text-sm duration-200 transition-colors hover:text-indigo-800">Forgot
                your password?</a>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <button type="button" class="bg-indigo-500 hover:bg-indigo-600 shadow-lg text-white font-semibold text-sm py-3 px-0 rounded text-center w-full hover:bg-tertiary duration-200 transition-all">
            Sign in
          </button>
        </div>
        <div class="grid sm:grid-cols-3 gap-0 mb-6">
          <hr class="mt-3 hidden sm:block border-gray-400">
          <span class="text-center bg-white text-sm text-gray-700 font-normal">Or continue with</span>
          <hr class="mt-3 hidden sm:block border-gray-400">
        </div>
        <div class="grid grid-cols-3 gap-2">
          <button type="button" class="relative border-solid border shadow-sm border-gray-400
                        font-semibold text-gray-600 text-sm py-1 text-center rounded text-center w-full
                        focus:outline-none hover:border-indigo-600 transition-all duration-200">
            <i class="fab fa-google text-lg" style="line-height: 28px;"></i>
          </button>
          <button type="button" class="relative border-solid border shadow-sm border-gray-400
                        font-semibold text-gray-600 text-sm py-1 px-0 rounded text-center w-full
                        focus:outline-none hover:border-indigo-600 transition-all duration-200">
            <i class="fab fa-twitter text-lg" style="line-height: 28px;"></i>
          </button>
          <button type="button" class="relative border-solid border shadow-sm border-gray-400
                        font-semibold text-gray-600 text-sm py-1 px-0 rounded text-center w-full
                        focus:outline-none hover:border-indigo-600 transition-all duration-200">
            <i class="fab fa-linkedin text-lg" style="line-height: 28px;"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
