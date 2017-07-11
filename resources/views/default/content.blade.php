

{{--{{ $title }}--}}
{{--{!!  $script !!}--}}
{{--@{{ $title }}--}}


{{--{{ isset($bvar) ? $bvar : $title }}--}}


{{--{{ $bvar or $title }}--}}


@if (count($data) < 3)
    В массиве меньше 3 элементов
@elseif (count($data) > 10)
    В массиве больше 10 элементов
@else
    В массиве неизвесное количество элементов
@endif


<ul>
@for($i = 0; $i < count($dataI); $i++)
        <li>{{ $dataI[$i] }}</li>
@endfor
</ul>

<ul>
    @foreach($data as $k=>$value)
        <li>{{ $k.'=>'.$value }}</li>
    @endforeach
</ul>



<ul>
    @forelse($data as $k=>$value)
        <li>{{ $k.'=>'.$value }}</li>

    @empty
        <p>No items</p>
    @endforelse
</ul>


@while (FALSE)
    <p>I'm looping forever.</p>
@endwhile


@each('default.list', $dataI, 'value')


@myDir('hello')




<div class="row">
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
</div>