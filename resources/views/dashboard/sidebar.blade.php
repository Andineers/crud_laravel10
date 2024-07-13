 <!--start sidebar-->
 <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        @if (Auth::user())

                            <p class="text-lg font-medium  text-white ml-3 font-[Poppins]">{{ Auth::user()->name }}</p>

                    @endif


    </a>
    <ul class="mt-4">
        <li class="mb-1 group active">
            <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="ri-home-5-line mr-3 text-lg"></i>
                <span class="font-[Poppins] text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group active">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 w-56 hover:text-gray-100 rounded-md ">
                    <i class="ri-logout-box-r-line mr-3 text-lg"></i>

                    <span class="font-[Poppins] text-sm">Logout</span>

                </button>
            </form>
        </li>
        <!--end sidebar-->

    </ul>
</div>

