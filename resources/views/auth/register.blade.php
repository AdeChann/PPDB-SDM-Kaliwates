<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    @vite("resources/css/home.css")
    <title>Document</title>
  </head>
  <body>
    <div class="font-Poppins flex items-center justify-center min-h-screen bg-gray-100">
      <div
        class=" relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Register</span>
          <span class="font-light text-gray-400 mb-8">

          </span>
          <div class="py-4 w-96">
            <span class="mb-2 text-md">Nama</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="email"
              id="email"
            />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Email</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="email"
              id="email"
            />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="pass"
              id="pass"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>


          <button
            class="  w-full bg-black border text-white border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-slate-800 hover:text-white"
          >
            Register
          </button>
          <div class="text-center text-gray-400">
            Dont'have an account?
            <span class="font-bold text-black cursor-pointer">Sign in</span>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
