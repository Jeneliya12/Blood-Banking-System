 <script>
    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:6
    });
</script>
<template>
<div id="mymap">
    $.each( locations, function( index, value ){
      mymap.addMarker({
        lat: value.lat,
        lng: value.lng,
        title: value.city,
        click: function(e) {
          alert('This is '+value.city+', gujarat from India.');
        }
      });
   });
</div>
  </template>
