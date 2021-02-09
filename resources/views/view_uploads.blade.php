

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">URL</th>
                <th class="cs-p-1">File</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->file }}</a></td>
                <td class="cs-p-1"><a href="{{ $image->file }}">View Image</a></td>
            </tr>
            @empty
            <p>No Images at the moment</p>
        @endforelse
    </table>
</div>
