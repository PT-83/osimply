<x-guest-layout>
    @include('layouts/nav')
    <body class="container mx-auto">

        <body class="flex flex-col min-h-screen container mx-auto">
            <main class="flex-grow text-center">

                <form action="/contact"  method="POST" class="form bg-white p-6 my-10 relative" enctype="multipart/form-data">
            @csrf 
                    <h3 class="text-2xl text-gray-900 font-semibold pb-6">Contact</h3>
                    <p class="text-gray-600 pb-6">I will respond within 24 hours! 🙏</p>
     
                    <input class="border p-2 w-1/2 align-center"  type="text" name="name" id="name" placeholder="Your Name" required>
                    <input class="border p-2 w-1/2 mt-3" type="email" name="email" id="email" placeholder="Your Email"required>
     
                     <textarea class="border p-2 mt-3 w-1/2" name="body" id="body" cols="10" rows="3" placeholder="The floor is yours..." required></textarea>
     
                     <input class="w-1/2 mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3" type="submit" value="Submit" >
                 </form>
    
                 @if ($errors->any())
                 <div class="alert alert-danger mt-5">
                     <ul>
             @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
             @endforeach
                     </ul>
                 </div>
             @endif
    
             @if(session()->has('message'))
        <div class="alert alert-success bg-green-600 text-gray-200 text-lg h-10">
            {{ session()->get('message') }}
        </div>
    @endif
    </main>
        </body>

        @include('layouts/footer')

    </body>
</html>
</x-guest-layout>