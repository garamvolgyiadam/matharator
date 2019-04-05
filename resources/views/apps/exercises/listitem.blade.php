<div class ="col col-12">
  <ul class="list-group" style="display:none;">
    <li class="list-group-item list-group-item-warning">{{$exercise->question}}</li>

      @if($exercise->answer1!="")
        <li class="list-group-item">{{$exercise->answer1}}</li>
      @endif

      @if($exercise->answer2!="")
        <li class="list-group-item">{{$exercise->answer2}}</li>
      @endif

      @if($exercise->answer3!="")
        <li class="list-group-item">{{$exercise->answer3}}</li>
      @endif

      @if($exercise->answer4!="")
        <li class="list-group-item">{{$exercise->answer4}}</li>
      @endif
  </ul>
</div>
