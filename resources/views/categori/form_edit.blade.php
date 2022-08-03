<div class="form-group p-2">
    <label for="categori">Nama Categori</label>
    <input type="text" name="categori" id="categori" value="{{ $data->categori }}" class="form-control" required>

    <button type="submit" class="btn btn-md btn-primary mt-4" onclick="update({{ $data->id }})">Ubah Categori</button>
</div>
