@extends('layouts.default_with_menu')

@section('content')
<form action="{{ url('/product') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div class="col-6">
            <label>Category Name</label>
            <input type="text" name="category_name" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary mt-3" id="btn-add-product-list" type="button">+ เพิ่ม Product</button>
    <div class="row mt-3" id="product-list">
        <div class="col-6">
            <label>Product Name <button type="button" class="btn btn-danger ml-2 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
            <input type="text" name="product_name[]" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-3 mb-3">บันทึก</button>
</form>
<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Category Name</td>
            <td>ProductList Name</td>
            <td>User Name</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $index => $category) {?>
            <tr class="align-middle">
                <td>{{ $index+1 }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    @foreach ($product_list as $index => $product)
                        @if ($product->category_id == $category->id)
                            <li>{{ $product->name }}</li>
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($product_list as $index => $product)
                        @if ($product->category_id == $category->id)
                            @foreach ($users as $index => $user_product)
                                @if ($product->user_id == $user_product->id)
                                    <li>{{ $user_product->name }}</li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#btn-add-product-list').on('click', function() {
            $('#product-list').append(
                `<div class="col-6">
                    <label>Product Name <button type="button" class="btn btn-danger ml-2 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
                    <input type="text" name="product_name[]" class="form-control">
                </div>`
            )
        })
        $(document).on('click', '.btn-del-product-list', function(){
            //console.log('click delete');
            $(this).parent().parent().remove();
        })
    })
</script>
@endsection