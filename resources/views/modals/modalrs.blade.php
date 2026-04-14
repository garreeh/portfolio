<!-- Real Estate Lightbox Modal -->
<div id="re-lightbox" class="fixed inset-0 flex items-center justify-center bg-gray-900/90 hidden z-50 p-4">
  <div class="relative bg-gray-900 rounded-lg shadow-lg w-full max-w-3xl mx-auto">

    <!-- Main Image -->
    <img id="re-lightbox-img" src="" class="w-full max-h-[70vh] object-contain rounded-lg">

    <!-- Left/Right Arrows -->
    <button id="re-lb-prev"
      class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&lt;</button>
    <button id="re-lb-next"
      class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&gt;</button>

    <!-- Close -->
    <button id="re-lb-close"
      class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-gray-300 cursor-pointer z-10">&times;</button>

    <!-- Thumbnails -->
    <div class="flex justify-center gap-3 mt-3 overflow-x-auto py-2 px-1">
      <img src="{{ asset('images/rs/rs1.png') }}" data-index="0"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
      <img src="{{ asset('images/rs/rs2.png') }}" data-index="1"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
      <img src="{{ asset('images/rs/rs3.png') }}" data-index="2"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
    </div>
  </div>
</div>

<!-- Script for Real Estate Lightbox -->
<script>
  // Carousel Scroll
  const reTrack = document.getElementById('realestate-carousel');
  const rePrev = document.querySelector('.realestate-prev');
  const reNext = document.querySelector('.realestate-next');
  let reIndex = 0;
  const reTotal = reTrack.children.length;

  rePrev.addEventListener('click', () => {
    reIndex = (reIndex - 1 + reTotal) % reTotal;
    reTrack.scrollTo({ left: reTrack.children[reIndex].offsetLeft, behavior: 'smooth' });
  });

  reNext.addEventListener('click', () => {
    reIndex = (reIndex + 1) % reTotal;
    reTrack.scrollTo({ left: reTrack.children[reIndex].offsetLeft, behavior: 'smooth' });
  });

  // Lightbox Mini Gallery
  const reLightbox = document.getElementById('re-lightbox');
  const reLightboxImg = document.getElementById('re-lightbox-img');
  const reLbClose = document.getElementById('re-lb-close');
  const reLbPrev = document.getElementById('re-lb-prev');
  const reLbNext = document.getElementById('re-lb-next');

  const reImages = [
    "{{ asset('images/rs/rs1.png') }}",
    "{{ asset('images/rs/rs2.png') }}",
    "{{ asset('images/rs/rs3.png') }}"
  ];

  let lbReIndex = 0;

  // Open lightbox
  document.querySelectorAll('#realestate-carousel img').forEach(img => {
    img.addEventListener('click', (e) => {
      lbReIndex = parseInt(e.target.dataset.index);
      reLightboxImg.src = reImages[lbReIndex];
      reLightbox.classList.remove('hidden');
    });
  });

  // Close
  reLbClose.addEventListener('click', () => reLightbox.classList.add('hidden'));
  reLightbox.addEventListener('click', e => { if (e.target === reLightbox) reLightbox.classList.add('hidden') });

  // Navigate
  reLbPrev.addEventListener('click', () => {
    lbReIndex = (lbReIndex - 1 + reImages.length) % reImages.length;
    reLightboxImg.src = reImages[lbReIndex];
  });
  reLbNext.addEventListener('click', () => {
    lbReIndex = (lbReIndex + 1) % reImages.length;
    reLightboxImg.src = reImages[lbReIndex];
  });

  // Thumbnail click
  document.querySelectorAll('#re-lightbox .flex.justify-center img').forEach(thumb => {
    thumb.addEventListener('click', e => {
      lbReIndex = parseInt(e.target.dataset.index);
      reLightboxImg.src = reImages[lbReIndex];
    });
  });
</script>