@if(isset($menus))
<ul class="singapore_nav">
    @foreach($menus as $m)
        @if($m->depth == 0)
            <li>
                <a href="{{ $m->link }}">{{ $m->label }}</a>
                @foreach($menus->where('depth', 1)->where('parent', $m->id) as $subm)
                        @if($loop->first)
                            <ul>
                        @endif
                                <li>
                                    <a href="{{ $subm->link }}">{{ $subm->label }}</a>
                                    @foreach($menus->where('depth', 2)->where('parent', $subm->id) as $subsubm)
                                        @if($loop->first)
                                            <ul>
                                        @endif
                                            <li><a href="{{ $subsubm->link }}">{{ $subsubm->label }}</a></li>
                                        @if($loop->last)
                                            </ul>
                                        @endif
                                    @endforeach
                                </li>
                        @if($loop->last)
                            </ul>
                        @endif
                @endforeach
            </li>
        @endif
    @endforeach
</ul>
@endif