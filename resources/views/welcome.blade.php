<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.wallpapersafari.com/71/34/uwRHQ2.jpg')">
        <h1
            class="font-serif text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500 md:text-center sm:leading-none lg:text-7xl">
            <span class="inline md:block">Welcome To Crave & Co. Restaurant</span>
        </h1>
        <div class="mx-auto mt-2 text-black-600 md:text-center lg:text-3xl">
            <h2>Serving great & scrumptious food for more than 18 years!</h2>
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-orange-600 rounded-full lg:w-full md:w-auto hover:bg-yellow-500 focus:outline-none">
                    Make Your Reservation
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-gray-200 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
      > -->

                        <h2 class="text-4xl font-serif text-black-600">OUR STORY</h2>
                        <!-- </h1> -->
                        <p class="fst-italic">
                            Crave & Co. was born out of Lee’s family love for sharing handcrafted pastries and delicacies since 1957.
                            Today, Lee's family is still committed to using the finest ingredients from all over the world ensuring
                            that quality remains the cornerstone of the Crave & Co. tradition. After 4 generations having lived in Kuala Lumpur,
                            their connection to the city inspired them to open a bakery right in the heart of the nation’s independence square.
                          </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://i.pinimg.com/564x/b8/21/e7/b821e7f954dfc377e92e5b2c4de925b0.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact bg-gray-200">
    <div class="container items-center max-w-6xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                <div class="w-full lg:max-w-md">
                    <h2 class="mb-4 text-6xl font-serif">Locate Us</h2>

                        <div data-aos="fade-up">
                            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8185373012225!2d101.6945904741032!3d3.1425578531949334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49d04ae32d97%3A0x97e74bff8b271030!2sJalan%20Sultan%2C%20City%20Centre%2C%2050000%20Kuala%20Lumpur%2C%20Wilayah%20Persekutuan%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1686715135887!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
                          </div>

                          <div class="container" data-aos="fade-up">

                            <div class="row mt-5">

                              <div class="col-lg-4">
                                <div class="info">
                                  <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>55, Jalan Sultan, City Centre, <br>
                                    50000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur<br><br>
                                    </p>
                                  </div>

                                  <div class="open-hours">
                                    <i class="bi bi-clock"></i>
                                    <h4>Open Hours:</h4>
                                    <p>
                                      Monday-Saturday:<br>
                                      1700 PM - 2300 PM
                                    </p>
                                  </div>

                                  <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>craveNco@gmail.com</p>
                                  </div>

                                  <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+03 5643 7782</p>
                                  </div>

                                </div>

                              </div>

                </div>
            </div>
        </div>
    </div>
    </section>
    @if (is_array($specials))
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIAL</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach ($specials->menus as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                {{ $menu->name }}</h4>
                            <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">${{ $menu->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

</x-guest-layout>
