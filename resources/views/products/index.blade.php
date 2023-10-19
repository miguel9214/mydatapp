<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center justify-between text-xl font-semibold leading-tight text-gray-800" >
            {{ __('Productos') }}
            <a href="{{route('products.create')}} "class="px-2 py-1 text-xs text-white bg-gray-800 rounded" >Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" >
                    <table class="table table-bordered table-hover">
                        <thead><tr><th>SKU</th><th>TITULO</th><th>IMAGEN</th><th>DESCRIPCION</th><th>PRECIO</th><th>CATEGORIA</th></tr></thead>
                        @foreach ($products as $prod)
                        {{-- FILA --}}
                        <tr class="text-sm border-gray-200 boder-b">
                            {{-- CELDA --}}
                            <td class="px-6 py-4">{{$prod->sku}}</td>
                            <td class="px-6 py-4">{{$prod->title}}</td>
                            <td class="px-6 py-4">{{$prod->image}}</td>
                            <td class="px-6 py-4">{{$prod->description}}</td>
                            <td class="px-6 py-4">{{$prod->price}}</td>
                            <td class="px-6 py-4">{{$prod->category}}</td>
                            
                            <td class="px-6 py-4">
                                <a href="{{route('products.edit', $prod)}}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                 {{-- {{route('posts.destroy'), $post }} --}}
                                <form action="{{route('products.destroy',$prod)}}" method="POST">
                                    {{-- Esto genera un token de seguridad --}}
                                    @csrf
                                    {{-- Nuestra intencion es eliminar --}}
                                    @method('DELETE')
                                    <input type="submit"
                                    value="Eliminar"
                                    class="px-4 py-2 text-white bg-red-800 rounded"
                                    onclick="return confirm('Desea eliminar?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- <table class="table table-bordered table-hover">
                        <thead><tr><th>#</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>ACCIONES</th></tr></thead>
                        <tbody class="table-group-divider" id="contenido">
                          <tr v-for="prod, i in products" :key="prod.id">
                              <td>{{ (i+1)}}</td>
                              <td>{{prod.name}}</td>
                              <td>{{prod.description}}</td>
                              <td>${{new Intl.NumberFormat('es-mx').format(prod.price)}}</td>
                              <td>
                              </td>
                          </tr>
                        </tbody>
                    </table> --}}
      
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>