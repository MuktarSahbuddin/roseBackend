@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Barang</strong> ||
        <small>{{$item->name}}</small>
    </div>
    <div class="card-body card-block">
        {{-- kenapa perlu id karena kita pengen tahu id mana yang harus di update --}}
        <form action="{{route('products.update', $item->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name" class="form-control-label">nama barang</label>
            <input type="text"
             name="name" 
             value="{{old('name') ? old('name') : $item->name}}"
             class="form-control  @error('name') is-invalid @enderror "> 
             @error('name') <div class="text-muted">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="type" class="form-control-label">Tipe barang</label>
            <input type="text"
             name="type" 
             value="{{old('type') ? old('type') : $item->type}}"
             class="form-control  @error('type') is-invalid @enderror ">
             @error('type') <div class="text-muted">{{$message}}</div> @enderror
          
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi barang</label>
            <textarea name="description"
            id="editor"
            class="form-control  @error('description') is-invalid @enderror " 
            >{{old('description') ? old('description') : $item->description}}</textarea>
            @error('description') <div class="text-muted">{{$message}}</div> @enderror

        </div>
        <div class="form-group">
            <label for="price" class="form-control-label">Price barang</label>
            <input type="text"
             name="price" 
             value="{{old('price') ? old('price') : $item->price}}"
             class="form-control  @error('price') is-invalid @enderror ">
             @error('price') <div class="text-muted">{{$message}}</div> @enderror
          
        </div>
        <div class="form-group">
            <label for="quantity" class="form-control-label">Quantity barang</label>
            <input type="text"
             name="quantity" 
             value="{{old('quantity') ? old('quantity') : $item->quantity}}"
             class="form-control  @error('quantity') is-invalid @enderror ">
             @error('quantity') <div class="text-muted">{{$message}}</div> @enderror
          
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Ubah barang</button>
        </div>
        </form>
    </div>
</div>
    
@endsection