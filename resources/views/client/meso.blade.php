    <div class="selected-user" style="position:sticky;top:0;z-index:1;background-color: white;width:420px">
        <a href="{{url('messageMenu')}}" class="btn btn-info">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span style="padding-left: 80px">To: <span class="name">{{$getCarrier->first_name}} {{$getCarrier->last_name}}</span></span>
    </div>
    <div class="chat-container">
        <ul class="chat-box chatContainerScroll">
            @foreach($messages as $message)
            <li class="{{($message->from == \Illuminate\Support\Facades\Auth::id()) ? 'chat-right' : 'chat-left'}}">
                <div class="chat-avatar">
                </div>
                @if($message->from == \Illuminate\Support\Facades\Auth::id())
                <div class="chat-text">{{$message->message}}<div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div>
                </div>
                @else
                    <div class="chat-text">{{$message->message}}<div class="chat-hour">08:55</div>
                    </div>
                @endif
            </li>
            @endforeach

        </ul>
        <div class="form-group mt-3 mb-0" style="position: sticky;bottom:0;width: 390px">
            <textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
        </div>
    </div>
