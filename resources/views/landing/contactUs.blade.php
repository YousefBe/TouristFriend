<x-guest-layout>
    @section('styles')
        <link rel="stylesheet" href="{{asset('css/shared.css')}}">
    @endsection
    <div class="cont flex justify-center items-center  w-full relative min-h-screen p-8  overflow-hidden" x-data="{nameLabel: false,emailLabel:false ,phoneLabel:false,messageLabel:false }">
        <span class="big-circle"></span>
        <img src="{{url('/images/shape.png')}}" alt="" class="square absolute top-1/2 left-1/2">

        {{--         
        <div class="custom-shape-divider-top-1612736823">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
          </svg>
        </div> --}}
        <div class="form-container w-full  max-w-4xl bg-white   rounded-xl z-50  grid grid-cols-1 md:grid-cols-2 overflow-hidden ">
            <div class="contact-info py-9 px-8 relative ">
                <h3 class="title text-blue-400 text-4xl">Let's go  in touch</h3>
                <p class="text text-xl text-gray-600"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quisquam, facilis tenetur velit nemo et illo non voluptates nostrum consequatur! </p>
                <div class="info">
                    <div class="information flex my-3 items-center text-sm  ">
                        <img src="" alt="">
                        <p>some random location</p>
                    </div>
                    <div class="information flex my-3 items-center text-sm  ">
                        <img src="{{url('/images/email.png')}}"  class=" w-7  mr-3" alt="">
                        <p>some random email</p>
                    </div>
                    <div class="information flex my-3 items-center text-sm  ">
                        <img src="{{url('/images/phone.png')}}"  class=" w-7  mr-3" alt="">
                        <p>some random phone</p>
                    </div>
                    <div class="information flex my-3 items-center text-sm  ">
                        <img src="{{url('/images/location.png')}}"  class=" w-7 mr-3"  alt="">
                        <p>some random location</p>
                    </div>
                </div>
                <div class="socials pt-8">
                    <p class=" text-base text-gray-500">Connect with us</p>
                    <div class="social-icons flex mt-2 ">
                        <a href="" class=" w-9 h-9 rounded-full border-2 border-blue-600  text-center text-blue-600  mr-6 leading-8 hover:text-white hover:bg-blue-600 duration-300 ease-in-out ">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="" class=" w-9 h-9 rounded-full border-2 border-blue-400  text-center text-blue-400  mr-6 leading-8 hover:text-white hover:bg-blue-400 duration-300 ease-in-out ">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class=" w-9 h-9 rounded-full border-2 border-gray-400  text-center text-gray-600  mr-6 leading-8 hover:text-white hover:bg-gray-600 duration-300 ease-in-out ">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="" class=" w-9 h-9 rounded-full border-2 border-blue-400  text-center text-blue-400  mr-6 leading-8 hover:text-white hover:bg-blue-600 duration-300 ease-in-out ">
                            <i class="fab fa-instagram"></i>
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="contact-form bg-blue-400 relative  " >
                <div class="absolute w-32 h-32 top-32 -right-9 rounded-full bg-red-400  circle"></div>
                <div class="absolute w-20 h-20 top-3 right-8 rounded-full bg-red-400  circle"></div>

                <form action="" class=" p-9 z-10 overflow-hidden relative"  >
                    <h3 class="title text-white font-medium text-2xl  mb-3">Contact Us</h3>
                    <div class="input-container relative m-4  "  :class="{'focus': nameLabel}">
                        <input @click=" nameLabel = true" @blur="nameLabel = false"  type="text" name="name" id="name" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl ">
                        <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" :class="{'focus': nameLabel }" for="name" @click="nameLabel = !nameLabel " @blur="nameLabel = false ">Name</label>
                        <span>name</span>
                    </div>
                    <div class="input-container relative m-4 "  :class="{'focus': emailLabel}">
                        <input @click=" emailLabel = true" @blur="emailLabel = false" type="email" name="email" id="email" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl ">
                        <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="email">Email</label>
                        <span >email</span>
                        
                    </div>
                    <div class="input-container relative m-4 "  :class="{'focus': phoneLabel}">
                        <input  @click=" phoneLabel = true" @blur="phoneLabel = false"  type="tel" name="phone" id="phone" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl">
                        <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="phone">Phone</label>
                        <span >phone</span> 
                    </div>
                    <div class="input-container relative m-4  textArea"  :class="{'focus': messageLabel}">
                        <textarea  @click=" messageLabel = true" @blur="messageLabel = false"  name="message"   class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-3 px-5 text-white font-medium  text-base rounded-xl resize-none  overflow-y-auto TextArea "></textarea>
                        <label class=" absolute  top-4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="name">Message</label>
                        <span >message</span>
                    </div>
                    <div class="text-center">
                    <input type="submit" class=" px-5 py-2 border-2 border-solid border-gray-50 cursor-pointer  rounded-3xl bg-white text-base text-blue-400 outline-none duration-500 hover:bg-transparent hover:text-white" value="Send" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</x-guest-layout>