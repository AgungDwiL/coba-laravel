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