
    @foreach($childs as $child)
    <div class="hv-item-child">
        <div class="person">
            <img src="img/default-avatar.jpg"  class="rounded-circle shadow " alt="">
            <p class="name">
                {{$child->user->name}} <b>/ UI Designer</b>
            </p>
        </div>
    </div>
        @if(count($child->childs))
            @include('includes.dashboard.child',['childs' => $child->childs])
        @endif

    @endforeach
