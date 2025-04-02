<script src="assets/users/js/vendor/jquery-3.6.4.min.js"></script>
<script src="assets/users/js/vendor/jquery.zoom.min.js"></script>
<script src="assets/users/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/users/js/vendor/mixitup.min.js"></script>
<script src="assets/users/js/vendor/range-slider.js"></script>
<script src="assets/users/js/vendor/aos.min.js"></script>
<script src="assets/users/js/vendor/swiper-bundle.min.js"></script>
<script src="assets/users/js/vendor/slick.min.js"></script>
<!-- Main Custom -->
<script src="assets/users/js/main.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lắng nghe sự kiện click trên danh mục
        document.querySelectorAll('.category, #all').forEach(function(categoryItem) {
            categoryItem.addEventListener('click', function() {
                let id_dm = this.dataset.id || ''; // Lấy id_dm từ data-id (nếu có)

                // Gửi yêu cầu AJAX đến file PHP xử lý
                fetch(`index.php?user=filter&id_dm=${id_dm}`)
                    .then(response => response.json()) // Sử dụng .json() thay vì .text()
                    .then(data => {
                        if (Array.isArray(data)) {
                            updateProductView(data); // Cập nhật giao diện với dữ liệu sản phẩm
                        } else {
                            console.error('Dữ liệu trả về không phải là mảng sản phẩm.');
                        }
                    })
                    .catch(error => {
                        console.error('Có lỗi xảy ra:', error);
                    });
            });
        });
    });

    // Hàm cập nhật giao diện sản phẩm
    function updateProductView(products) {
        const productContainer = document.querySelector('.filterCategory'); // Chọn phần container sản phẩm
        productContainer.innerHTML = ''; // Xóa các sản phẩm cũ

        if (products.length === 0) {
            productContainer.innerHTML = '<p>Không có sản phẩm nào trong danh mục này.</p>';
            return;
        }

        // Lặp qua danh sách sản phẩm và thêm vào giao diện
        products.forEach(product => {
            const productHtml = `
        <div id="content" class="mix vegetable col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
            <div class="cr-product-card">
                <div class="cr-product-image">
                    <div class="cr-image-inner zoom-image-hover">
                        <img src="${product.anh_sp}" alt="${product.ten_sp}">
                    </div>
                    <div class="cr-side-view">
                        <a href="javascript:void(0)" class="wishlist">
                            <i class="ri-heart-line"></i>
                        </a>
                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                            role="button">
                            <i class="ri-eye-line"></i>
                        </a>
                    </div>
                    <a class="cr-shopping-bag" href="javascript:void(0)">
                        <i class="ri-shopping-bag-line"></i>
                    </a>
                </div>
                <div class="cr-product-details">
                    <div class="cr-brand">
                        <a href="shop-left-sidebar.html">${product.ten_dm}</a>
                  
                    </div>
                    <a href="index.php?user=detail-product&id_sp=${product.id_sp}" class="title">${product.ten_sp}</a>
                    <p class="cr-price"><span class="new-price">${product.gia_tien} VNĐ</span></p>
                </div>
            </div>
        </div>
    `;
            productContainer.insertAdjacentHTML('beforeend', productHtml);
        });
    }
</script>