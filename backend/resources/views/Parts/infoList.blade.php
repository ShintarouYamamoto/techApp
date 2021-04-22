<div>
    @foreach ($informations as $information)
    <div class="list-group">
        <a href="{{ url('/member/information', $information->id) }}" class="list-group-item list-group-item-action list-group-item-warning">{{ $information->created_at->format('Y/m/d') }} [{{ $information->subject }}]</a>
    </div>
    @endforeach
</div>