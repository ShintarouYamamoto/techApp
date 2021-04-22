<div>
    @foreach ($information as $info)
    <div class="list-group">
        <a href="{{ url('/member/information', $info->id) }}" class="list-group-item list-group-item-action list-group-item-warning">{{ $info->created_at->format('Y/m/d') }} [{{ $info->subject }}]</a>
    </div>
    @endforeach
</div>
