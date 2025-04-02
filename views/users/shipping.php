<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>
    <style>
        .suggestions {
            position: absolute;
            background-color: white;
            width: 1435px;
            max-height: 300px;
            overflow-y: auto;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1000;
            display: none;
            margin-top: 3px;
            border: 1px solid #3f4451;
        }

        .suggestion-item {
            padding: 12px 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #3f4451;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            background-color: #f0f0f0;
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item:before {
            content: "📍";
            margin-right: 10px;
            font-size: 1.1em;
            transition: transform 0.3s ease;
        }

        .suggestion-item:hover {
            background: #3a4150;
            color: white;
            padding-left: 24px;
        }

        .suggestion-item:hover:before {
            transform: scale(1.2);
        }

        .suggestion-item:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .suggestion-item:hover:after {
            transform: scaleY(1);
        }

        .address-container {
            position: relative;
            margin-bottom: 20px;
        }

        /* Tùy chỉnh thanh cuộn */
        .suggestions::-webkit-scrollbar {
            width: 8px;
        }

        .suggestions::-webkit-scrollbar-track {
            background: white;
            border-radius: 8px;
        }

        .suggestions::-webkit-scrollbar-thumb {
            background: white;
            border-radius: 8px;
        }

        .suggestions::-webkit-scrollbar-thumb:hover {
            background: white;
        }

        .grid {
            display: flex;
            gap: 1rem;
        }

        .grid>div {
            flex: 1;
        }
    </style>
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header style="height: 180px; margin-bottom: 10px;">
        <?php include_once "views/users/layout/header.php" ?>
    </header>

    <!-- Mobile menu -->
    <?php include_once "views/users/layout/mobile-menu.php" ?>


    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Checkout</h2>
                            <span> <a href="index.php?user=home">Home</a> > <a href="index.php?user=cart">Cart</a> > Shipping</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout section -->
    <section class="cr-checkout-section padding-tb-100">
        <div class="container">
            <div class="row">
                <div class="cr-checkout-leftside  m-t-991">
                    <!-- checkout content Start -->
                    <div class="cr-checkout-content">
                        <div class="cr-checkout-inner">

                            <form action="index.php?user=shipping" method="post">
                                <input type="hidden" name="id_vanChuyen" value="<?= $shipping['id_vanChuyen'] ?? '' ?>">
                                <div class="cr-checkout-wrap">
                                    <div class="cr-checkout-block cr-check-bill">
                                        <h2 class="cr-checkout-title text-center mb-4">Thông tin vận chuyển</h2>
                                        <div class="cr-bl-block-content">
                                            <div class="cr-check-bill-form mb-minus-24">
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Họ tên *</label>
                                                    <input type="text" name="hoTen" value="<?= $shipping['hoTen'] ?? '' ?>"
                                                        placeholder="Nhập tên của bạn..." required>
                                                </span>
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Số điện thoại *</label>
                                                    <input type="text" name="soDienThoai" value="<?= $shipping['soDienThoai'] ?? '' ?>"
                                                        placeholder="Nhập số điện thoại..." required>
                                                </span>
                                                <span class="cr-bill-wrap">
                                                    <label for="address">Địa chỉ *</label>
                                                    <input type="text" id="address" name="diaChi" value="<?= $shipping['diaChi'] ?? '' ?>" placeholder="Nhập địa chỉ...">
                                                    <div id="suggestions" class="suggestions"></div>
                                                </span>
                                                <div class="grid">
                                                    <div>

                                                        <label for="city">Tỉnh/Thành phố</label>
                                                        <input type="text" id="city" name="city" value="<?= $shipping['city'] ?? ''?>" required placeholder="Nhập tỉnh/thành phố">
                                                    </div>
                                                    <div>
                                                        <label for="district">Quận/Huyện</label>
                                                        <input type="text" id="district" name="district" value="<?= $shipping['district'] ?? ''?>" required placeholder="Nhập quận/huyện">
                                                    </div>
                                                    <div>
                                                        <label for="ward">Phường/Xã *</label>

                                                        <input type="text" id="ward" name="ward" value="<?= $shipping['ward'] ?? '' ?>" required placeholder="Nhập phường/xã">
                                                    </div>
                                                </div>
                                                <span class="cr-bill-wrap mb-4">

                                                  

                                                    <label>Ghi chú</label>
                                                    <textarea class="form-control" rows="5" name="note" id=""><?= $shipping['note'] ?? '' ?></textarea>

                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php if ($shipping == ''): ?>
                                    <span class="cr-check-order-btn">
                                        <button class="cr-button mt-30" name="addShipping">Thêm địa chỉ</button>
                                    </span>
                                <?php elseif (isset($shipping['hoTen'])): ?>
                                    <span class="cr-check-order-btn">
                                        <button class="cr-button btn-danger mt-30 me-3" name="updateShipping">Cập nhật địa chỉ</button>
                                        <a href="index.php?user=checkout" class="cr-button btn-danger mt-30">Thanh toán</a>
                                    </span>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
            </div>
        </div>
    </section>

    <!-- script lấy API cho địa chỉ -->
    <script>
        const apiKey = 'nsu1wIR9Lhtnw1YOvtCVmUpG3D1Vm00ahKJHRQiT'; // https://account.goong.io/keys
        const addressInput = document.getElementById('address');
        const suggestionsContainer = document.getElementById('suggestions');
        const cityInput = document.getElementById('city');
        const districtInput = document.getElementById('district');
        const wardInput = document.getElementById('ward');
        let sessionToken = crypto.randomUUID();

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        const debouncedSearch = debounce((query) => {
            if (query.length < 2) {
                suggestionsContainer.style.display = 'none';
                return;
            }

            fetch(`https://rsapi.goong.io/Place/AutoComplete?api_key=${apiKey}&input=${encodeURIComponent(query)}&sessiontoken=${sessionToken}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'OK') {
                        suggestionsContainer.innerHTML = '';
                        suggestionsContainer.style.display = 'block';

                        data.predictions.forEach(prediction => {
                            const div = document.createElement('div');
                            div.className = 'suggestion-item';
                            div.textContent = prediction.description;
                            div.addEventListener('click', () => {
                                addressInput.value = prediction.description;
                                suggestionsContainer.style.display = 'none';

                                // Tự động điền các trường địa chỉ từ compound
                                if (prediction.compound) {
                                    cityInput.value = prediction.compound.province || '';
                                    districtInput.value = prediction.compound.district || '';
                                    wardInput.value = prediction.compound.commune || '';
                                }
                            });
                            suggestionsContainer.appendChild(div);
                        });
                    }
                })
                .catch(error => console.error('Lỗi:', error));
        }, 300);

        addressInput.addEventListener('input', (e) => debouncedSearch(e.target.value));

        document.addEventListener('click', function(e) {
            if (!suggestionsContainer.contains(e.target) && e.target !== addressInput) {
                suggestionsContainer.style.display = 'none';
            }
        });

        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            sessionToken = crypto.randomUUID();
            alert('Theo dõi mình để xem thêm các video công nghệ nhé!');
        });
    </script>

    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>


    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>