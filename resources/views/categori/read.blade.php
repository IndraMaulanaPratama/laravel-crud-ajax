<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nama Categori</th>
        <th>Action</th>
    </tr>

    @foreach ($data as $item)
        <tr>
            <td> {{ $item->id }} </td>
            <td>{{ $item->categori }}</td>
            <td>
                <button class="btn btn-sm btn-warning" onclick="edit({{ $item->id }})">Edit</button>
                <button class="btn btn-sm btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
