<?php include('header.php'); ?>

<div class="content">
  <div class="row cover hidden-xs">
      <div class="col-md-12">
        <div class="col-xs-hidden">
          <div class="col-md-5">
            <h1 index="title">Moby Dick</h1>
            <ul>
              <li title="crew"><span>Crew: </span><span>Timon Sliepenbeek (Editor), Stevie Cheng (Screenwriter)</span></li>
              <li title="cast"><span>Cast: </span><span>Mani Haghighi, Kazem HajirAzad, Mehdi Hashemi, Shahab Hosseini, Mohamad Kasebi, Mohammad Ali Keshavarz, Reza Kianian, Majid Majidi, Jamshid Mashayekhi, Peyman Moaadi, Arian Moayed, Mehran Modiri</span></li>
            </ul>
            <p>But as the strange captain, leaning over the pallid bulwarks, was in the act of putting his trumpet to his mouth, it somehow fell from his hand into the sea; and the wind now rising amain, he in vain strove to make himself heard without it.</p>
            <a href="#"><span class="play-video glyphicon glyphicon glyphicon-play"></span></a>
          </div>
          <div class="gradient-left"></div>
        </div>
      </div>
  </div>

  <div class="row video-grid">
    <div class="col-md-6 col-xs-12 col-lg-4 col-sm-6" data-title="Ken's Solstice" data-crew="timon, stevie" data-cast="freddy zavala" data-synopsis="fdfdf" data-video="ken-solstice">
      <div></div>
    </div>
    <div class="col-md-6 col-xs-12 col-lg-4 col-sm-6" data-title="Ken's Solstice" data-crew="timon, stevie" data-cast="freddy zavala" data-synopsis="fdfdf" data-video="paramedic">
      <div></div>
    </div>
    <div class="col-md-6 col-xs-12 col-lg-4 col-sm-6" data-title="Ken's Solstice" data-crew="timon, stevie" data-cast="freddy zavala" data-synopsis="fdfdf" data-video="life-and-death">
      <div></div>
    </div>
    <div class="col-md-6 col-xs-12 col-lg-4 col-sm-6" data-title="Ken's Solstice" data-crew="timon, stevie" data-cast="freddy zavala" data-synopsis="fdfdf" data-video="ken-solstice">
      <div></div>
    </div>
  </div>
</div>

<script>

  $( document ).ready(function( ) {

    $( ".video-grid > div" ).each(function( index ) {
      $video = $( this ).attr("data-video");

      var selector = $(this)
        .parents()
        .map(function() { return this.tagName; })
        .get()
        .reverse()
        .concat([this.nodeName])
        .join(">");

      var id = $(this).attr("id");
      if (id) {
        selector += "#"+ id;
      }

      var classNames = $(this).attr("class");
      if (classNames) {
        selector += "." + $.trim(classNames).replace(/\s/gi, ".");
      }

      $( selector +  ">  div").css("background-image", "url('dist/images/"+ $video +".jpg')");

    });

     $master = $( ".video-grid > div > div" ).parent( );

     $(".cover > div > div > div > h1").text(($master).attr("data-title"));
     $(".cover > div > div > div > ul > li:nth-child(1) > span:nth-child(2)").text( ($master).attr("data-crew"));
     $(".cover > div > div > div > ul > li:nth-child(2) > span:nth-child(2)").text( ($master).attr("data-cast"));
     $(".cover > div > div > div > p").text(($master).attr("data-synopsis"));
     $(".cover > div > div > div > a").attr( "href", "dist/videos/" + ( $master ).attr( "data-video" ) + ".mp4" );
  });

  $(".video-grid > div > div").click( function updateCover(){
    $master = $(this).parent();
    $(".cover > div > div > div > h1").text(($master).attr("data-title"));
    $(".cover > div > div > div > ul > li:nth-child(1) > span:nth-child(2)").text( ($master).attr("data-crew"));
    $(".cover > div > div > div > ul > li:nth-child(2) > span:nth-child(2)").text( ($master).attr("data-cast"));
    $(".cover > div > div > div > p").text(($master).attr("data-synopsis"));
    $(".cover > div > div > div > a").attr( "href", "dist/videos/" + ( $master ).attr( "data-video" ) + ".mp4" );
  });
</script>

<?php include('footer.php'); ?>
