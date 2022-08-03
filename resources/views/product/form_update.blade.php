<div class="form-group">
  <label for="product" >Nama Product</label>
  <input type="text" name="product" id="product" value="{{ $data->product }}" class="form-control" required>

  <button type="submit" class="btn btn-primary mt-4" onclick="update({{ $data->id }})">Simpan Data</button>
</div>