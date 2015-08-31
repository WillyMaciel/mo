<div class="item">
    <div class="image">
        <img src="assets/images/users/user.jpg" alt="Dmitry Ivaniuk">
    </div>                                
    <div class="text">
        <div class="heading">
            <a href="#">{{$chat->nome}}</a>
            <span class="date">{{date('r')}}</span>
        </div>                                    
        {{$chat->msg}}
    </div>
</div>