<div class="message-box {{$messagebox->type}} animated fadeIn message-box-automatica" @if($messagebox->audio) data-sound="{{$messagebox->audio}}" @endif>
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="{{$messagebox->icon}}"></span> {{$messagebox->title}}</div>
            <div class="mb-content">
                @if(is_string($messagebox->content))
                    <p>{{$messagebox->content}}</p>
                @elseif(is_array($messagebox->content))
                    <ul>
                    @foreach($messagebox->content as $c)
                        <li> {{$c}} </li>
                    @endforeach
                    </ul>
                @endif
            </div>
            <div class="mb-footer">
                <button class="btn btn-default btn-lg pull-right mb-control-close">{{$messagebox->btnClose or 'Fechar'}}</button>
            </div>
        </div>
    </div>
</div>