<div>

   <h4 style="font-size: 28px">
       Archives

   </h4>
  <div>
        <ul>
            @foreach($archives as $state)
                <li style="list-style:none; font-size:18px">
                <a href="/home?month={{$state['month']}}&year={{$state['year']}}" style="margin-left:-2rem">{{$state['month']}} {{$state['year']}}</a>
                </li>
            @endforeach
           
        </ul>
  </div>
</div>