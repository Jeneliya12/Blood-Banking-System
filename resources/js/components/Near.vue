<script>
   var map;
    var marker;
    var infowindow;
  var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
  var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
  export default {
    data () {
      return {
        location: {
          lat: 27.717245,
          lng: 85.323959
        },
        markers: [{
          position: {lat: 10.0, lng: 10.0},
        }]
      }
    },
    methods: {
      setPlace (place) {
      console.log(place)
       this.location={
       lat:place.geometry.location.lat(),
       lng:place.geometry.location.lng()
       }
      },
      markerDrag (position) {
      console:log(position)
       this.location={
       lat:position.lat(),
       lng:position.lng()
       }
      } 
    }
  }
</script>

<template>
  <div class="EventLocation__wrapper">
    <label for="location">Location</label>
    <div id="location">
      <gmap-autocomplete @place_changed="setPlace"></gmap-autocomplete>
      <gmap-map
        :center="location"
        :zoom="6"
        style="width: 1000px; height: 500px">
        <gmap-marker
          :position="location"
          :clickable="true"
          :draggable="true"
          @click="center=location"
          @place_changed="setPlace"
          @position_changed="markerDrag($event)"
        ></gmap-marker>
      </gmap-map>
    </div>

    <input type="hidden" v-model="location.lat" name="lat">
    <input type="hidden" v-model="location.lng" name="lng">
  </div>
</template>