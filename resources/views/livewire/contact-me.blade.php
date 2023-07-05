<div id="work-with-me" class="bg-white mt-10">
    <h3 class="font-bold text-3xl sm:text:5xl text-orange-light text-center">WORK WITH ME</h3>

    <p class="text:xs sm:text-xl sm:text-2xl text-center p-3">Fill in the form with your details and the service you
        need/inquiry and I will get back to you shortly.</p>

    <div class="flex justify-evenly items-center">

        <div class="hidden sm:block">
            <img src="{{ url('/images/contact.svg') }}" class="rounded-tl-xl w-63 h-auto">
        </div>
        <div class="w-full md:w-3/4 mt-0 sm:mt-12">
            @if (Session::has('message_sent'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                     role="alert">
                    <div>
                        {{Session::get('message_sent')}}
                    </div>
                </div>
            @endif
            <form method="POST" action="{{ url('/send-email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="p-3">
                    <input
                        class="bg-orange-light block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300"
                        type="text" placeholder="Name" id="name" name="name" required>
                </div>
                <div class="p-3">
                    <input
                        class="bg-orange-light block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300"
                        type="email" placeholder="Email" id="email" name="email" required>
                </div>

                <div class="p-3">
                    <input
                        class="bg-orange-light block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300"
                        type="text" placeholder="Subject" id="subject" name="subject" required>
                </div>

                <div class="p-3">
                        <textarea
                            class="bg-orange-light resize-none border rounded-md block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300 h-56"
                            placeholder="Message" id="message" name="message" required></textarea>
                </div>
                <div class="p-3 pt-4">
                    <button
                        class="w-full  bg-warning hover: bg-orange-dark text-white font-bold py-3 px-4 rounded text-2xl">
                        Send
                    </button>
                </div>
            </form>
        </div>


    </div>

</div>
