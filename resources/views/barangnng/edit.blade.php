<form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="row justify-content-center">
    <div class="p-5 bg-light rounded-3 col-xl-6">
    <div class="mb-3 text-center">
    <i class="bi-person-circle fs-1"></i>
    <h4>Edit barang</h4>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-6 mb-3">
    <label for="kode_barang" class="formlabel">kode barang</label>
    <input class="form-control
    @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang"id="kode_barang" value="{{ $errors->any() ? old('barang') : $barang->kode_barang }}" placeholder="Enter kode">
    @error('kode_barang')
    <div class="textdanger"><small>{{ $message }}</small></div>
    @enderror
    </div>
    <div class="col-md-6 mb-3">
    <label for="nama_barang" class="form-label">nama barang</label>
    <input class="form-control @error('nama_barang')is-invalid @enderror" type="text" name="nama_barang" id="nama_barang"
    value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}"
    placeholder="Enter Last Name">
    @error('nama_barang')
    <div class="textdanger"><small>{{ $message }}</small></div>
    @enderror
    </div>
    <div class="col-md-6 mb-3">
    <label for="email" class="formlabel">Email</label>
    <input class="form-control @error('email')is-invalid @enderror" type="text" name="email" id="email"
    value="{{ $errors->any() ? old('email') : $employee->email }}"
    placeholder="Enter Email">
    @error('email')
    <div class="textdanger"><small>{{ $message }}</small></div>
    @enderror
    </div>
    <div class="col-md-6 mb-3">
    <label for="age" class="formlabel">Age</label>
    <input class="form-control @error('age') isinvalid @enderror" type="text" name="age" id="age" value="{{ $errors-
    >any() ? old('age') : $employee->age }}" placeholder="Enter Age">
    @error('age')
    <div class="textdanger"><small>{{ $message }}</small></div>
    @enderror
    </div>
    <div class="col-md-12 mb-3">
    <label for="position" class="formlabel">Position</label>
    <select name="position" id="position"
    class="form-select">
    @php
    $selected = "";
    if ($errors->any())
    $selected = old('position');
    else
    $selected = $barang-
    >satuan_id;
    @endphp
    @foreach ($positions as $position)
    <option value="{{ $position->id }}"
    {{ $selected == $position->id ? 'selected' : '' }}>{{ $position->code.'-'.$position->name }}</option>
    @endforeach
    </select>
    @error('position')
    <div class="textdanger"><small>{{ $message }}</small></div>
    @enderror
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-6 d-grid">
    <a href="{{ route('barangs.index') }}"
    class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circleme-2"></i> Cancel</a>
    </div>
    <div class="col-md-6 d-grid">
    <button type="submit" class="btn btn-dark
    btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
    </div>
    </div>
    </div>
    </div>
    </form>
