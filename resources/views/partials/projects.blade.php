<!-- Projects Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

  <!-- Gym Project Card -->
  <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden max-w-md mx-auto">
    <!-- Card Carousel -->
    <div class="relative">
      <div class="flex overflow-hidden" id="gym-carousel">
        <img src="{{ asset('images/gym/gym1.png') }}" alt="Gym DB 1"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="0">
        <img src="{{ asset('images/gym/gym2.png') }}" alt="Gym DB 2"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="1">
        <img src="{{ asset('images/gym/gym3.png') }}" alt="Gym DB 3"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="2">
      </div>
      <!-- Arrows -->
      <button
        class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 gym-prev cursor-pointer">&lt;</button>
      <button
        class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 gym-next cursor-pointer">&gt;</button>
    </div>

    <div class="p-2 flex justify-center">
      <h3 class="text-white font-semibold text-sm text-center">Gym Membership Database</h3>
    </div>
  </div>
  <!-- Lightbox Modal For Zoom Gym -->
  @include('modals.modalgym')


  <!-- Real Estate Project Card -->
  <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden max-w-md mx-auto">

    <!-- Card Carousel -->
    <div class="relative">
      <div class="flex overflow-hidden" id="realestate-carousel">
        <img src="{{ asset('images/rs/rs1.png') }}" alt="Real Estate DB 1"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="0">
        <img src="{{ asset('images/rs/rs2.png') }}" alt="Real Estate DB 2"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="1">
        <img src="{{ asset('images/rs/rs3.png') }}" alt="Real Estate DB 3"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="2">
      </div>

      <!-- Carousel Arrows -->
      <button
        class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 realestate-prev cursor-pointer">&lt;</button>
      <button
        class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 realestate-next cursor-pointer">&gt;</button>
    </div>

    <!-- Title -->
    <div class="p-2 flex justify-center">
      <h3 class="text-white font-semibold text-sm text-center">Real Estate Database</h3>
    </div>
  </div>


  <!-- Lightbox Modal For Zoom RealEstate-->
  @include('modals.modalrs')

  <!-- Appointment Project Card -->
  <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden max-w-md mx-auto">
    <div class="relative">
      <div class="flex overflow-hidden" id="appointment-carousel">
        <img src="{{ asset('images/app/appointment1.png') }}" alt="App DB 1"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="0">

        <img src="{{ asset('images/app/appointment2.png') }}" alt="App DB 2"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="1">

        <img src="{{ asset('images/app/appointment3.jfif') }}" alt="App DB 3"
          class="w-full h-32 object-cover flex-shrink-0 cursor-pointer" data-index="2">
      </div>
      <button
        class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 appointment-prev cursor-pointer">&lt;</button>
      <button
        class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full z-10 appointment-next cursor-pointer">&gt;</button>
    </div>

    <div class="p-2 flex justify-center">
      <h3 class="text-white font-semibold text-sm text-center">Appointment Database</h3>
    </div>
  </div>

  @include('modals.modalapp')


</div>

<!-- Carousel Script for Each Card -->
<script>
  function setupCarousel(carouselId, prevBtnClass, nextBtnClass) {
    const track = document.getElementById(carouselId);
    const prev = document.querySelector(`.${prevBtnClass}`);
    const next = document.querySelector(`.${nextBtnClass}`);
    let index = 0;
    const total = track.children.length;

    prev.addEventListener('click', () => {
      index = (index - 1 + total) % total;
      track.scrollTo({ left: track.children[index].offsetLeft, behavior: 'smooth' });
    });

    next.addEventListener('click', () => {
      index = (index + 1) % total;
      track.scrollTo({ left: track.children[index].offsetLeft, behavior: 'smooth' });
    });
  }

  setupCarousel('gym-carousel', 'gym-prev', 'gym-next');
  setupCarousel('realestate-carousel', 'realestate-prev', 'realestate-next');
  setupCarousel('appointment-carousel', 'appointment-prev', 'appointment-next');

</script>