<div>
    <h2>Posts</h2>
    <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th></th>
        </tr>
        @foreach ($posts as $post)
            <tr wire:key={{ $post->id }}>
                <td>{{ $post->title }}</td>
                <td>{{ str($post->content)->words(8) }}</td>
                <td>
                    <button type="button" wire:click="delete({{ $post->id }})"
                        wire:confirm="Are you sure you want to delete?">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
