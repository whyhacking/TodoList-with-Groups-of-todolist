<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div>
        @if(session()->has('success'))
            {{session()->get('success')}}
        @elseif($errors->any())
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
        </div>

</div>