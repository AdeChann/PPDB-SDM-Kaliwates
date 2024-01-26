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
        class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
    <form action="{{route('login-proses')}}" method="post">
        @csrf
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Login</span>
          @if ($errors->any())
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <ul>
                    @foreach ($errors->all() as $item )
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
              </div>
          @endif
          <span class="font-light text-gray-400 mb-8">

          </span>
          <div class="py-4">
            <span class="mb-2 text-md">Email</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="email"
              value="{{old('email')}}"
              id="email"
            />
          </div>
          @error('email')
          <small>{{$message}}</small>

          @enderror

          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="password"
              id="pass"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>

          @error('password')
          <small>{{$message}}</small>

          @enderror
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2" />
              <span class="text-md">Remember for 30 days</span>
            </div>
            <span class="font-bold text-md">Forgot password</span>
          </div>
          <button
            class="w-full bg-brightRed text-white p-2 rounded-lg mb-6 hover:bg-brightRedLight hover:text-black hover:border hover:border-gray-300"
          >
            Login
          </button>
          <button
            class="  w-full bg-black border text-white border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-slate-800 hover:text-white"
          >
            Register
          </button>
          <div class="text-center text-gray-400">
            Dont'have an account?
            <span class="font-bold text-black">Sign up for free</span>
          </div>
        </div>
    </form>
        <!-- {/* right side */} -->
      </div>
    </div>
    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($message = Session::get('failed'))
<script>
    swal("email dan password salah");
</script>
@endif

@if($message = Session::get('Success'))
<script>
    swal.fire("{{ $message }}");
</script>
@endif
  </body>
</html>
