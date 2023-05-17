@extends('admin.master')
@section('content2')
    <!-- Form tạo hoá đơn -->
<form method="POST" action="{{ route('invoices.store') }}">
    @csrf
    <input type="text" name="id" placeholder="Số hoá đơn">
    <input type="text" name="id_customer" placeholder="Mã khách hàng">
    <input type="number" name="total" placeholder="Tổng số tiền">
    <!-- Thêm các trường khác tùy ý -->
    <!-- Form chi tiết hoá đơn -->
    <div id="invoice_details">
        <div class="detail">
            <input type="text" name="details[0][id_product]" placeholder="Mã sản phẩm">
            <input type="number" name="details[0][quantity]" placeholder="Số lượng">
            <input type="number" name="details[0][price]" placeholder="Giá">
        </div>
        <!-- Các chi tiết hoá đơn khác -->
    </div>
    <button type="submit">Lưu</button>
    <button type="button" onclick="addDetail()">Thêm chi tiết</button>
</form>

<script>
    let detailIndex = 1;

    function addDetail() {
        const detailContainer = document.getElementById('invoice_details');
        const detailDiv = document.createElement('div');
        detailDiv.classList.add('detail');

        const productNameInput = document.createElement('input');
        productNameInput.type = 'text';
        productNameInput.name = `details[${detailIndex}][id_product]`;
        productNameInput.placeholder = 'Tên sản phẩm';

        const quantityInput = document.createElement('input');
        quantityInput.type = 'number';
        quantityInput.name = `details[${detailIndex}][quantity]`;
        quantityInput.placeholder = 'Số lượng';

        const priceInput = document.createElement('input');
        priceInput.type = 'number';
        priceInput.name = `details[${detailIndex}][price]`;
        priceInput.placeholder = 'Giá';

        detailDiv.appendChild(productNameInput);
        detailDiv.appendChild(quantityInput);
        detailDiv.appendChild(priceInput);
        detailContainer.appendChild(detailDiv);

        detailIndex++;
        }
</script>

@endsection