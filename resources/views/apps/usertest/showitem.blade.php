<div class="test-div col col-xs-12 col-md-12 md-12" style="display:none;">
  <ul class="list-group excercise">
    <li class="list-group-item list-group-item-warning">{{ $loop->index+1 }}. {{ $testitem->exercise->question }}</li>
          @if($testitem->exercise->answer1!="")
            <li class="list-group-item li-answer" style="background-color: green">
              <label class="m-0">
                  1. {{ $testitem->exercise->answer1 }} </label>
            </li>
          @endif
          @if($testitem->exercise->answer2!="")
            <li class="list-group-item li-answer"
              @if($testitem->answer==2)style="background-color: red"@endif>
              <label class="m-0">
                  2. {{ $testitem->exercise->answer2 }} </label>
            </li>
          @endif
          @if($testitem->exercise->answer3!="")
            <li class="list-group-item li-answer"
              @if($testitem->answer==3)style="background-color: red"@endif>
              <label class="m-0">
                  3. {{ $testitem->exercise->answer3 }} </label>
            </li>
          @endif
          @if($testitem->exercise->answer4!="")
            <li class="list-group-item li-answer"
              @if($testitem->answer==4)style="background-color: red"@endif>
              <label class="m-0">
                  4. {{ $testitem->exercise->answer4 }} </label>
            </li>
          @endif

          @if($testitem->answer=="0")<h3 style="color: red;">Nem adott választ.</h3>
          @elseif($testitem->answer=="1")<h3 style="color: red;">Helyes választ adott.</h3>
          @elseif($testitem->answer=="")<h3 style="color: red;">A feladat nem tartalmazott választ.</h3>
          @elseif($testitem->answer=="2" ||
                  $testitem->answer=="3" ||
                  $testitem->answer=="4")<h3 style="color: red;">Helytelen választ adott.</h3>@endif
  </ul>
</div>
