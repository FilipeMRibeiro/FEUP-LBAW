var raceID;
$('.raceButton').click(function() {
    raceID = $(this).val();
    $('.speciesRace').text($(this).text());
});

var cityID;
$('.cityButton').click(function() {
    cityID = $(this).val();
    $('.countryCity').text($(this).text());
});

$(function() {
  $("#submitButtonEditProfile").click(function(e) {
    e.preventDefault();
    var formData = $('.submitEditProfile').serialize();
    if(raceID != undefined)
      formData += '&raceID=' + raceID;
    if(cityID != undefined)
      formData += '&cityID=' + cityID;
    $.ajax({
      type: 'post',
      url: '../pages/editProfileInfo.php',
      data: formData,
      success: function(html) {
        location.reload();
      }
    });
  });
});

$(document).ready(function(){
  $('.dropdown-submenu a.test-submenu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});