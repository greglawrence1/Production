<div>
<a href="{{ url('')}}">Home</a>
<a href="{{ url('/product')}}">Products</a>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="productlist p-2">
    @if ($errors->any())
    <div class="bg-red-600 border-solid rounded-md border-2 border-red-700">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-lg text-gray-100">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/product" enctype="multipart/form-data">
    @csrf    
        <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-blue-900 max-w-md">
            <div class = "p-2 m-2">
                <label for="type">Product Type</label>
                    <select id="product_type_id" name="product_type_id">
                        <option value="2">Chalk Bag</option>
                        <option value="1">Climbing Shoes</option>
                        <option value="3">Chalk</option>
                    </select>
            </div>
            <div class="font-bold text-sm mb-2">
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="name" name="name" type="text" placeholder="name">
            </div>
            <p class="text-gray-700 text-sm">
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="brand" name="brand" type="text" placeholder="brand">
            </p>
            <p class="text-gray-500 text-base mt-2">
                <input type="number"  step='0.01' value='0.00' class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="price" name="price" type="text" placeholder="price">
            </p>   

            <div class="form-group">
                <label>Image File</label>
                <input id="file" name="file" type="file" />
            </div>
            
            <div class="flex items-center justify-end mt-4 top-auto">
                <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Add New</button>
            </div>
       </div>
    </form>
    </div>
</div>