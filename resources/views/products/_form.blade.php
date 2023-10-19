@csrf
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">Sku</label>
    <span class="text-xs text-red-600">
        @error('sku')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="sku"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese el sku" value="{{ old('sku', $product->sku) }}">
</div>
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">Titulo</label>
    <span class="text-xs text-red-600">
        @error('title')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="title"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese el título" value="{{ old('title', $product->title) }}">
</div>
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">Imagen</label>
    <span class="text-xs text-red-600">
        @error('image')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="image"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese imagen" value="{{ old('image', $product->image) }}">
</div>
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">Description</label>
    <span class="text-xs text-red-600">
        @error('description')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="description"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese description" value="{{ old('description', $product->description) }}">
</div>
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">precio</label>
    <span class="text-xs text-red-600">
        @error('price')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="price"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese precio" value="{{ old('price', $product->price) }}">
</div>
<div class="mb-4">
    <label class="block mb-2 font-bold text-gray-700">Categoria</label>
    <span class="text-xs text-red-600">
        @error('cataegory')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="category"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese categoria" value="{{ old('category', $product->category) }}">
</div>
<div class="flex items-center justify-between">
    <a href="{{ route('products.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit"
        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800"
        value="Enviar">
</div>