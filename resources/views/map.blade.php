@extends('layouts.master')

@section('content')
<br>
<div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h1><img src="{{ url('/') }}/storage/images/icons/location.png" width="50" height="50" alt="puukao">แผนที่</h1>
      <h5>จากสนามบินเชียงใหม่มุ่งหน้าไปทางอำเภอจอมทองระยะทางประมาณ 60 กม. จะพบกับทางแยกจากอำเภอจอมทองขึ้นไปทางดอยอินทนนท์จากนี้ใช้ระยะทางประมาณ 31 กม. จนพบกับทางแยกเลี้ยวเข้าหมูบ้านขุนกลาง ขับขึ้นตรงไปทางสวนสนกางเต้นท์อุทยานฯดอยอินทนนท์ประมาณ 1 กม. จะถึงที่พักดอยอินทนนท์ของเราจะอยู่ตรงข้ามกับศูนย์วิจัยรองเท้านารีโครงการหลวงขุนวาง อยู่ทางซ้ายมือ จุดสังเกตุ เต้นท์และสนามหญ้าที่สวยงาม</h5>
      
    </div>
    <div class="w3-col l8 12 w3-dropdown-hover">
      <!-- Image of location/map -->
      <li> <a href="{{ url('/') }}/storage/images/map.jpg"  data-easyzoom-source="{{ url('/') }}/storage/images/map.jpg"> <img src="{{ url('/') }}/storage/images/map.jpg"  alt="Avatar" class=" w3-border w3-padding "  style="width:250px"></a> </li>
  </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
@endsection
@section('script')
<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.1.min.js'></script>
<link rel='stylesheet' id='zoom-css'  href='css/zoom.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='js/jquery.slider.js'></script>
<script type='text/javascript' src='js/jquery.mousewheel.js'></script>
<script type='text/javascript' src='js/touch.js'></script>
<script type='text/javascript' src='js/zoom.js'></script>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('a#zoom1').swinxyzoom({mode:'dock', controls: false, size: '100%', dock: { position: 'right' } }); // dock window slippy lens
jQuery('.views-gallery a').click(function(e) {
e.preventDefault();
var $this = jQuery(this),
largeImage  = $this.attr('href');
smallImage  = $this.data('easyzoom-source');
if (!$this.parent().hasClass('thumbnail-active')) {
jQuery('a#zoom1').swinxyzoom('load', smallImage,  largeImage);
jQuery('.lightbox-btn').attr('href', largeImage);
jQuery('.views-gallery .slide.thumbnail-active').removeClass('thumbnail-active');
$this.parent().toggleClass('thumbnail-active');
}
});
});
</script>


@endsection
