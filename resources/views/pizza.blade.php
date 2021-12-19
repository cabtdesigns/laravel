@extends('layouts.layout')

<!--section can be called what ever you want-->
@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        

        <!-- Basic for loop
            @for($i = 0; $i < 5; $i++)
            <p>the value of i is {{ $i }}</p>
        @endfor -->

        <!-- one way to do it 
        @for($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor-->

        <!-- cleaner way to do it-->
        @foreach($pizzas as $pizza)
            <div>
                    {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
                <span> - first in the loop</span>
            @endif
            @if($loop->last)
                <span> - last in the loop</span>
            @endif
            </div>
        @endforeach
    </div>
</div>
@endsection