<!-- Appointment System Lightbox Modal -->
<div id="as-lightbox" class="fixed inset-0 flex items-center justify-center bg-gray-900/90 hidden z-50 p-4">
  <div class="relative bg-gray-900 rounded-lg shadow-lg w-full max-w-3xl mx-auto">

    <!-- Main Image -->
    <img id="as-lightbox-img" src="" class="w-full max-h-[70vh] object-contain rounded-lg">

    <!-- Left/Right Arrows -->
    <button id="as-lb-prev"
      class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&lt;</button>

    <button id="as-lb-next"
      class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&gt;</button>

    <!-- Close -->
    <button id="as-lb-close"
      class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-gray-300 cursor-pointer z-10">&times;</button>

    <!-- Thumbnails -->
    <div class="flex justify-center gap-3 mt-3 overflow-x-auto py-2 px-1">
      <img src="{{ asset('images/app/appointment1.png') }}" data-index="0"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">

      <img src="{{ asset('images/app/appointment2.png') }}" data-index="1"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">

      <img src="{{ asset('images/app/appointment3.jfif') }}" data-index="2"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
    </div>

  </div>
</div>

<script>
  // Carousel Scroll (SAME AS REAL ESTATE)
  const asTrack = document.getElementById('appointment-carousel');
  const asPrev = document.querySelector('.appointment-prev');
  const asNext = document.querySelector('.appointment-next');

  let asIndex = 0;
  const asTotal = asTrack.children.length;

  asPrev.addEventListener('click', () => {
    asIndex = (asIndex - 1 + asTotal) % asTotal;
    asTrack.scrollTo({
      left: asTrack.children[asIndex].offsetLeft,
      behavior: 'smooth'
    });
  });

  asNext.addEventListener('click', () => {
    asIndex = (asIndex + 1) % asTotal;
    asTrack.scrollTo({
      left: asTrack.children[asIndex].offsetLeft,
      behavior: 'smooth'
    });
  });


  // Lightbox (SAME LOGIC AS REAL ESTATE)
  const asLightbox = document.getElementById('as-lightbox');
  const asLightboxImg = document.getElementById('as-lightbox-img');
  const asLbClose = document.getElementById('as-lb-close');
  const asLbPrev = document.getElementById('as-lb-prev');
  const asLbNext = document.getElementById('as-lb-next');

  const asImages = [
    "{{ asset('images/app/appointment1.png') }}",
    "{{ asset('images/app/appointment2.png') }}",
    "{{ asset('images/app/appointment3.jfif') }}"
  ];

  let lbAsIndex = 0;

  // OPEN LIGHTBOX (COPIED)
  document.querySelectorAll('#appointment-carousel img').forEach(img => {
    img.addEventListener('click', (e) => {
      lbAsIndex = parseInt(e.target.dataset.index);
      asLightboxImg.src = asImages[lbAsIndex];
      asLightbox.classList.remove('hidden');
    });
  });

  // CLOSE
  asLbClose?.addEventListener('click', () => asLightbox.classList.add('hidden'));

  asLightbox.addEventListener('click', e => {
    if (e.target === asLightbox) {
      asLightbox.classList.add('hidden');
    }
  });

  // NAVIGATION
  asLbPrev.addEventListener('click', () => {
    lbAsIndex = (lbAsIndex - 1 + asImages.length) % asImages.length;
    asLightboxImg.src = asImages[lbAsIndex];
  });

  asLbNext.addEventListener('click', () => {
    lbAsIndex = (lbAsIndex + 1) % asImages.length;
    asLightboxImg.src = asImages[lbAsIndex];
  });

  // Thumbnail click so it will not undefine
  document.querySelectorAll('#as-lightbox .flex.justify-center img').forEach(thumb => {
    thumb.addEventListener('click', e => {
      lbAsIndex = parseInt(e.target.dataset.index);
      asLightboxImg.src = asImages[lbAsIndex];
    });
  });
</script>