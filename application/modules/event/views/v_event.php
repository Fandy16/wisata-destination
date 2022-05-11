<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="<?php echo base_url(); ?>assets/dist/js/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCpQckx1IbiCkwJP8S1Y7WqwNFzNW5re8&libraries=drawing,places" async defer></script>


<style type="text/css">
  
  #cari_lokasi:focus {
    border-color: #4d90fe;
  }

</style>


<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Input Event
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-calendar"></i> Input Event</a></li>
      <li class="active">Detail</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title title-text-info">
              Geofencing
            </h3> &nbsp; &nbsp;
            <button style="font-size: 17px;" type="button" class="btn title-text-info" id="refresh" name="refresh"><i class="fa fa-refresh"></i> Refresh</</button>
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          
          <div class="box-body pad">
            <div class="col-xs-12">
              <div class="form-group" style="padding-right: 5px;">
                <div class="col-sm-5 col-md-5 col-xs-12">
                  <input id="cari_lokasi"  class="controls" type="text" placeholder="Cari Lokasi" style="padding: 7px; font-size: 16px; margin-top: 12px; width: 30%;" autofocus="" hidden >
                </div>
                <div id="map" name="map" style="width:100%;height:650px"></div>
              </div>
            </div>
            <br><br>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>


<!-- Modal Nambah Event Baru-->
<div id="modal_tambah_event" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" style="display: none;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Event Baru</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Nama Event <span class="required">*</span></label>
              <input type="text" id="nama_event" name="nama_event" placeholder="Nama Event" class="form-control">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Tanggal Awal <span class="required">*</span></label>
              <input type="text" id="tgl_event_awal" name="tgl_event_awal" style="text-align: center" placeholder="Tanggal Awal" class="form-control" readonly="" value="<?php echo(date('d-M-Y H:m')) ?>:00">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Tagal Akhir <span class="required">*</span></label>
              <input type="text" id="tgl_event_akhir" name="tgl_event_akhir" style="text-align: center" placeholder="Tanggal Akhir" class="form-control" readonly="" value="<?php echo(date('d-M-Y H:m')) ?>:00">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Data Latitude</label>
              <input type="text" id="lat" name="lat" placeholder="Latitude" class="form-control" readonly="">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Data Longitude</label>
              <input type="text" id="long" name="long" placeholder="Longitude" class="form-control" readonly="">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Data Radius <span class="required">*</span></label>
              <div class="input-group">
                <input type="number" id="rad" name="rad" placeholder="Radius" class="form-control">
                <span class="input-group-addon" style="background-color: #eeeeee; color: black;"> meter</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group" style="padding-right: 5px;">
              <label>Input Lokasi <span class="required">*</span></label>
              <input type="text" id="nm_lokasi" name="nm_lokasi" placeholder="Nama Lokasi" class="form-control">
            </div>
          </div>
          <br><br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="simpan_event" name="simpan_event" class="btn btn-success btn-sm"><i class='fa fa-fw fa-lg fa-check'></i>Simpan</button>
        <button type="button" id="batal_event" name="batal_event" class="btn btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-fw fa-lg fa-close'></i>Batal</button>
      </div>
    </div>

  </div>
</div>



<script type="text/javascript">

  $(document).ready(function() {

    var circleData = { text: null, radius: null, lat: null, lng: null, region: null };
    var circlek;
    var circledtaedit=null;
    var drawingManager;

    initMap();

    $('#refresh').click(function() {
      // initMap();
      window.location.reload();
    })

  })

  

  function initMap() {

  // window.onload = function () {

    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(-7.2097459,112.735877),
      zoom: 18
    });

  initAutocomplete(map);

  drawingManager.setMap(map);

  google.maps.event.addListener(drawingManager, 'circlecomplete', onCircleComplete);

  
}


var circle;
    drawingManager = new google.maps.drawing.DrawingManager({
    drawingMode: google.maps.drawing.OverlayType.HAND,
    drawingControl: true,
    drawingControlOptions: {
      position: google.maps.ControlPosition.TOP_CENTER,
      drawingModes: ['circle']
    },
    // markerOptions: {icon: '<?php echo base_url() ?>assets/dist/images/marker_phc.png'},
    circleOptions: {
      fillColor: '#ffff00',
      fillOpacity: 0.3,
      strokeWeight: 2,
      clickable: false,
      editable: true,
      zIndex: 1
    }
  });


function onCircleComplete(circle) {


  $('#lat').val(circle.getCenter().lat());
  $('#long').val(circle.getCenter().lng());
  // $('#rad').val(circle.radius);
  $('#rad').val(Math.round(circle.getRadius()));

  $('#modal_tambah_event').modal('show');


}

function getCircleData(circle) {
  circle.radius = circle.getRadius();
  circle.lat = circle.getCenter().lat();
  circle.lng = circle.getCenter().lng();
}
function setCircleDataedit(circle) {

  $('#lat').val(circleData.lat);
  $('#long').val(circleData.lng);
  $('#rad').val(Math.round(circleData.radius));
}

function initAutocomplete(map) {
        // Create the search box and link it to the UI element.
  var input = document.getElementById('cari_lokasi');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  $('#cari_lokasi').show();


  var icon = {
      url: '<?php echo base_url() ?>assets/dist/images/marker_phc.png',
      scaledSize: new google.maps.Size(56, 56),
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      labelOrigin: new google.maps.Point(35, 58),
      anchor: new google.maps.Point(17, 34)
  };

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
      
}


$('#simpan_event').click(function(){
  saveGeofencing(circleData);
})


// SIMPAN GEOFENCING KE DATABASE
function saveGeofencing(circleData) {

    $('#lat').val(circleData.lat);
    $('#long').val(circleData.lng);
    $('#rad').val(Math.round(circleData.radius));

    // $('#lat').val(circleData.lat);
     console.log(circleData);
    if(circleData.text == null || circleData.radius == null || circleData.lat == null || circleData.lng == null) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
      swal({
        title: "Apakah Anda Yakin?",
        text: "Menambahkan data geofencing",
        type: "warning",
        showCancelButton: true
      }).then(function() {
        toastr.options.escapeHtml = true;
        App.blockUI({
            target: '#mapPortlet'
        });
        $.ajax({
          type: "POST",
          dataType: "json",
          url: "https://my.pelindo.co.id/myintan/master/geofences",
          headers: {
              'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content"),
          },
          data: circleData,
          success: function(data) {
              circleData.text = circleData.radius = circleData.lat = circleData.lng = null;
              //initMap();
              toastr['success'](data, 'Sukses!');
              App.unblockUI("#mapPortlet");
              location.reload();
          },
          error: function(xhr) { 
              toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
              App.unblockUI("#mapPortlet");
          }
        });
      }).catch(swal.noop);
    }
}

</script>





<!-- https://yudhatp.my.id/php-menyimpan-data-marker-google-maps-api-ke-database/
https://stackoverflow.com/questions/19614805/how-to-save-a-google-maps-overlay-shape-in-the-database
http://jsfiddle.net/doktormolle/EdZk4/?utm_source=website&utm_medium=embed&utm_campaign=EdZk4 -->