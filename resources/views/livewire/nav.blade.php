<div>
    {{--    ########Mobile View######--}}
    <div class="justify-between flex sm:hidden px-5 mb-5">
        <div class="col-span-2 mt-5  text-2xl font-bold ">
            <a href="#intro"><span class="text-orange-light">WritEdit</span>Solution</a>
            <img src="{{url('/images/intro-line-one.svg')}}" class="w-25" style="width: 200px">
        </div>

        <div>
            <button id="dropdown" data-dropdown-toggle="dropdownNavbar" type="button">
                <img class="w-14 h-14 p-2" src="images/menu.svg">
            </button>
        </div>
    </div>


    {{--    ########Mobile View######--}}
    {{--    ########Tablet View######--}}

    {{--    ########Tablet View######--}}


    {{--    ########Web View######--}}
    <div class=" justify-between hidden sm:flex">
        <div class="col-span-2 mt-5 p-8 mr-14 text-4xl font-bold ">
            <a href="#intro"><span class="text-orange-light">WritEdit</span>Solution</a>
            <img src="{{url('/images/intro-line-one.svg')}}" class="w-50">
        </div>


        <div class="mt-5 p-8 text-3xl font-semibold hidden sm:block space-x-4">
            <a href="/#services">Services</a>
            <a href="/#about">About Me</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/#work-with-me">Work With Me</a>
        </div>

    </div>
    {{--    ########Web View######--}}

<!-- Dropdown menu -->
    <div id="dropdownNavbar" class="z-10 hidden  divide-y divide-gray-100 rounded shadow w-60">
        <ul class="py-1 text-2xl text-[#A91B60]" aria-labelledby="dropdownDefault">
            <li>
                <a href="/#services" class="block px-4 font-thin py-2 bg-white text-orange-light">Services</a>
            </li>
            <li>
                <a href="/#about" class="block px-4 font-thin py-2 bg-white text-orange-light">About Me</a>
            </li>
            <li>
                <a href="/portfolio" class="block px-4 font-thin py-2 bg-white text-orange-light">Portfolio</a>
            </li>
            <li>
                <a href="/#work-with-me" class="block px-4 font-thin py-2 bg-white text-orange-light">Work With Me</a>
            </li>

        </ul>
    </div>
</div>
