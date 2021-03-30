  
<div class=" flex justify-center items-center  w-full relative min-h-screen mt-8 lg:mt-0  overflow-hidden mb-8 lg:mb-0" x-data="{nameLabel: false,emailLabel:false ,phoneLabel:false,messageLabel:false }">
    <div class=" w-10/12 h-full bg-white   rounded-xl z-50  grid grid-cols-1 md:grid-cols-2 overflow-hidden ">
        <div class="contact-info py-9 px-8 relative ">
          <h3 class="title text-blue-400 text-4xl">Let's get  in touch</h3>
          <p class="text text-xl text-gray-600"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quisquam, facilis tenetur velit nemo et illo non voluptates nostrum consequatur! </p>
          <div class="info">
              <div class="information flex my-3 items-center text-sm  ">
                  <img src="{{url('/images/location.png')}}"   class=" w-7  mr-3 alt="">
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
                  <a href="" wire:click="contactFormSubmit" class=" w-9 h-9 rounded-full border-2 border-blue-600  text-center text-blue-600  mr-6 leading-8 hover:text-white hover:bg-blue-600 duration-300 ease-in-out ">
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
          <div class="absolute w-32 h-32 top-32 -right-9 rounded-full  circle"></div>
          <div class="absolute w-20 h-20 top-3 right-8 rounded-full  circle"></div>

          <form  wire:submit.prevent="contactFormSubmit" class=" p-9 z-10 overflow-hidden relative"  >
              <h3 class="title text-white font-medium text-2xl  mb-3">Contact Us</h3>
              <div class="input-container relative m-4  "  :class="{'focus': nameLabel}">
                  <input @click=" nameLabel = true" @blur="nameLabel = false"  type="text" wire:model.lazy="name" id="name" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl ">
                  <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" :class="{'focus': nameLabel }" for="name" @click="nameLabel = !nameLabel " @blur="nameLabel = false ">Name</label>
                  <span>name</span>
              </div>
              <div class="input-container relative m-4 "  :class="{'focus': emailLabel}">
                  <input @click=" emailLabel = true" @blur="emailLabel = false" type="email" wire:model.lazy="email" id="email" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl ">
                  <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="email">Email</label>
                  <span >email</span>
                  
              </div>
              <div class="input-container relative m-4 "  :class="{'focus': phoneLabel}">
                  <input  @click=" phoneLabel = true" @blur="phoneLabel = false"  type="tel" wire:model.lazy="phone" id="phone" class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-2 px-5 text-white font-medium  text-base rounded-3xl">
                  <label class=" absolute  top-1/4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="phone">Phone</label>
                  <span >phone</span> 
              </div>
              <div class="input-container relative m-4  textArea"  :class="{'focus': messageLabel}">
                  <textarea  @click=" messageLabel = true" @blur="messageLabel = false"  wire:model.lazy="message"   class="input w-full outline-none bg-transparent border-2  border-white border-solid focus:border-white py-3 px-5 text-white font-medium  text-base rounded-xl resize-none  overflow-y-auto TextArea "></textarea>
                  <label class=" absolute  top-4 left-4 -translate-y-2/4  px-2 text-base text-white mylabel pointer-events-none duration-500  z-50" for="name">Message</label>
                  <span >message</span>
              </div>
              <div class="text-center">
              <input type="submit" class=" px-5 py-2 border-2 border-solid border-gray-50 cursor-pointer  rounded-3xl bg-white text-base text-blue-400 outline-none duration-500 hover:bg-transparent hover:text-white" value="Send" class="btn">
              </div>
          </form>
      </div>
   
   
   
    </div>
</div>

