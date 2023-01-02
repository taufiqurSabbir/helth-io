    <!-- BOOTSRAP JS -->
    <script src="../js/boostrap/bootstrap.bundle.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        function readURL(input) {  
   $('.preview').show();
  $('#blah').hide();
  $('.preview').after('<img id="blah" src="#" alt="your image" style="display:none;"/>');
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result)
      .width(150)
      .height(200);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function getPreview(){
  $('.preview').hide();
  $('#blah').show();
}
    </script>
</body>

</html>