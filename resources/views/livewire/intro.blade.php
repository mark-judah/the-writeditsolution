<div class="bg-white ">
    @if (Session::has('message_sent'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
             role="alert">
            <div>
                {{Session::get('message_sent')}}
            </div>
        </div>
    @endif
        <div class=" sm:hidden">
            <div class="flex justify-center mx-3">
                <img src="{{ url('/images/intro.svg') }}"
                     class="h-auto object-cover">
            </div>
            <div class=" justify-center mt-2 gap-5">
                <div class="flex justify-center">
                    <p class="text-3xl font-sans text-orange-light">
                        Quality <span><img src="{{url('/images/intro-line-two.svg')}}" style="width: 90px"> </span>
                    <div>
                        <span class=" text-3xl font-sans"> &nbsp; services</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center"><p class="text-3xl font-sans">by Lydia Ngetich</p></div>
            <div class="flex justify-center"><p class="text-2xl font-sans">freelance writer | editor</p></div>
        </div>


<div class="flex justify-evenly items-center mx-6 hidden sm:flex">
    <div class="  justify-center">
        <img src="{{ url('/images/intro.svg') }}"
             class="h-auto object-cover">
    </div>
    <div class=" justify-center mt-14 flex-row  gap-5">
        <div class="flex justify-center">
            <p class="text-6xl font-sans text-orange-light">
                Quality <span><img src="{{url('/images/intro-line-two.svg')}}"> </span>
            <div>
                <span class=" text-6xl font-sans"> &nbsp; services</span>
            </div>
        </div>
        <div><p class="text-6xl font-sans">by Lydia Ngetich</p></div>
        <div><p class="text-4xl font-sans">freelance writer | editor</p></div>

    </div>
</div>

{{--    ########Web View######--}}

</div>
