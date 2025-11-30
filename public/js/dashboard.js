// javascript agar trix editor tidak terima file
document.addEventListener("trix-file-accept", function(event) {
  event.preventDefault();
  alert("Uploading images is disabled.");
});

// jquery untuk mengubah label input file sesuai nama file
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

// javascript untuk membuat slug otomatis
const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){

  fetch("{{ url('dashboard/posts/createSlug') }}?title=" + encodeURIComponent(title.value))
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  // javascript untuk menampilkan preview image
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }