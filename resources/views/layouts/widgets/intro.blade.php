<div class="col-md-12 bg-dark text-white text-center py-2">

  <?php
      $open = date_format(date_create('2022-11-01'),"Y-m-d");
      $today = date_format(date_create(now()),"Y-m-d");
  ?>

      @if($today >= $open)
        <span class="mr-2">REGISTRATION FOR NEILS12 IS OPEN</span>
      @else
        <span class="mr-2">REGISTRATION FOR NEILS12 WILL OPEN ON NOVEMBER 1ST 2022</span>
      @endif
</div>
