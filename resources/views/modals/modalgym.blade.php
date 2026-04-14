<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 flex items-center justify-center bg-gray-900/90 hidden z-50 p-4">
  <div class="relative bg-gray-900 rounded-lg shadow-lg w-full max-w-3xl mx-auto">
    <!-- Main Image -->
    <img id="lightbox-img" src="" class="w-full max-h-[70vh] object-contain rounded-lg">

    <!-- Left/Right Arrows -->
    <button id="lb-prev"
      class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&lt;</button>
    <button id="lb-next"
      class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full cursor-pointer z-10">&gt;</button>

    <!-- Close -->
    <button id="lb-close"
      class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-gray-300 cursor-pointer z-10">&times;</button>

    <!-- Thumbnails -->
    <div class="flex justify-center gap-3 mt-3 overflow-x-auto py-2 px-1">
      <img src="{{ asset('images/gym/gym1.png') }}" data-index="0"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
      <img src="{{ asset('images/gym/gym2.png') }}" data-index="1"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
      <img src="{{ asset('images/gym/gym3.png') }}" data-index="2"
        class="w-20 h-20 object-cover rounded cursor-pointer border-2 border-gray-700 hover:border-blue-500 flex-shrink-0">
    </div>
  </div>
</div>

<!-- Script for Gym Database -->
<script>
  // Carousel Scroll
  const gymTrack = document.getElementById('gym-carousel');
  const gymPrev = document.querySelector('.gym-prev');
  const gymNext = document.querySelector('.gym-next');
  let gymIndex = 0;
  const gymTotal = gymTrack.children.length;

  gymPrev.addEventListener('click', () => {
    gymIndex = (gymIndex - 1 + gymTotal) % gymTotal;
    gymTrack.scrollTo({ left: gymTrack.children[gymIndex].offsetLeft, behavior: 'smooth' });
  });

  gymNext.addEventListener('click', () => {
    gymIndex = (gymIndex + 1) % gymTotal;
    gymTrack.scrollTo({ left: gymTrack.children[gymIndex].offsetLeft, behavior: 'smooth' });
  });

  // Lightbox Mini Gallery
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightbox-img');
  const lbClose = document.getElementById('lb-close');
  const lbPrev = document.getElementById('lb-prev');
  const lbNext = document.getElementById('lb-next');

  const gymImages = [
    "{{ asset('images/gym/gym1.png') }}",
    "{{ asset('images/gym/gym2.png') }}",
    "{{ asset('images/gym/gym3.png') }}"
  ];

  let lbIndex = 0;

  // Open lightbox
  document.querySelectorAll('#gym-carousel img').forEach(img => {
    img.addEventListener('click', (e) => {
      lbIndex = parseInt(e.target.dataset.index);
      lightboxImg.src = gymImages[lbIndex];
      lightbox.classList.remove('hidden');
    });
  });

  // Close
  lbClose.addEventListener('click', () => lightbox.classList.add('hidden'));
  lightbox.addEventListener('click', e => { if (e.target === lightbox) lightbox.classList.add('hidden') });

  // Navigate
  lbPrev.addEventListener('click', () => {
    lbIndex = (lbIndex - 1 + gymImages.length) % gymImages.length;
    lightboxImg.src = gymImages[lbIndex];
  });
  lbNext.addEventListener('click', () => {
    lbIndex = (lbIndex + 1) % gymImages.length;
    lightboxImg.src = gymImages[lbIndex];
  });

  // Thumbnail click
  document.querySelectorAll('.flex.justify-center img').forEach(thumb => {
    thumb.addEventListener('click', e => {
      lbIndex = parseInt(e.target.dataset.index);
      lightboxImg.src = gymImages[lbIndex];
    });
  });
</script>