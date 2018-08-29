@if(isset($menus))
<ul class="navi-level-1 uppercase">
    @foreach($menus as $m)
        @if($m->depth == 0)
            <li @if(count($menus->where('depth', 1)->where('parent', $m->id)) > 0) class="has-sub" @endif>
                <a href="{{ $m->link }}">{{ $m->label }} @if(count($menus->where('depth', 1)->where('parent', $m->id)) > 0)<i class="fa fa-angle-down"></i>@endif</a>
                @foreach($menus->where('depth', 1)->where('parent', $m->id) as $subm)
                        @if($loop->first)
                            <ul class="navi-level-2">
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