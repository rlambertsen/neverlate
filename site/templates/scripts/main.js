$(document).ready(function(){
  //remove class for mobile menu to work correctly
  windowResize();
  $(window).resize(function(){
    windowResize();
  })
  $('.nice').niceselect();

  //Play video on click
  $('.image-click').click(function(){
    $(this).hide();
    var videoUrl = $(this).data('url');
    $('.video').html('<iframe src="'+videoUrl+'" frameborder="0" allowfullscreen></iframe>')
    .removeClass('hidden');
  })
  $('.input-uplaod').on('change', function(e){
    var file = e.target.files[0];
    console.log(file.name)
    $('.fileUpload').html(file.name)
  });
});
function windowResize() {
  var windowSize = $(window).width();
    if (windowSize <= 993){
      $('.navbar-collapse').removeClass('relative');
      $('.navbar-nav').removeClass('absolute right-absolute center-absolute');
      $('.navbar-toggle').addClass('absolute right-absolute center-absolute collapsed');
    } else {
      $('.navbar-collapse').addClass('relative');
      $('.navbar-nav').addClass('absolute right-absolute center-absolute');
      $('.navbar-toggle').removeClass('absolute right-absolute center-absolute collapsed');
    };
  return windowSize;
};
// function getFileData(myFile){
//   var file = myFile.files[0];  
//   var filename = file.name;
// };