<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Elwin - Order Payment</title>
    <style>
        @font-face {
            font-family: Arial !important;
            font-display: swap !important;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            padding: 5px;
            background-color: #7a34ca;
        }

        p {
            margin: 0%;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        .box-1 {
            max-width: 450px;
            padding: 10px 40px;
            user-select: none;
        }

        .box-1 div .fs-12 {
            font-size: 8px;
            color: white;
        }

        .box-1 div .fs-14 {
            font-size: 15px;
            color: white;
        }

        .box-1 img.pic {
            width: 20px;
            height: 20px;
            object-fit: cover;
        }

        .box-1 img.mobile-pic {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .box-1 .name {
            font-size: 11px;
            font-weight: 600;
        }

        .dis {
            font-size: 12px;
            font-weight: 500;
        }

        label.box {
            width: 100%;
            font-size: 12px;
            background: #ddd;
            margin-top: 12px;
            padding: 10px 12px;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid transparent;
        }

        #one:checked~label.first,
        #two:checked~label.second,
        #three:checked~label.third {
            border-color: #7700ff;
        }

        #one:checked~label.first .circle,
        #two:checked~label.second .circle,
        #three:checked~label.third .circle {
            border-color: #7a34ca;
            background-color: #fff;
        }

        label.box .course {
            width: 100%;
        }

        label.box .circle {
            height: 12px;
            width: 12px;
            background: #ccc;
            border-radius: 50%;
            margin-right: 15px;
            border: 4px solid transparent;
            display: inline-block;
        }

        input[type=&quot;
        radio&quot;

        ] {
            display: none;
        }

        .box-2 {
            max-width: 450px;
            padding: 10px 40px;
        }


        .box-2 .box-inner-2 input.form-control {
            font-size: 12px;
            font-weight: 600;
        }

        .box-2 .box-inner-2 .inputWithIcon {
            position: relative;
        }

        .box-2 .box-inner-2 .inputWithIcon span {
            position: absolute;
            left: 15px;
            top: 8px;
        }

        .box-2 .box-inner-2 .inputWithcheck {
            position: relative;
        }

        .box-2 .box-inner-2 .inputWithcheck span {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: green;
            font-size: 12px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            right: 15px;
            top: 6px;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            outline: none;
            border: 1px solid #7700ff;
        }

        .border:focus-within {
            border: 1px solid #7700ff !important;
        }

        .box-2 .card-atm .form-control {
            border: none;
            box-shadow: none;
        }

        .form-select {
            border-radius: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .address .form-control.zip {
            border-radius: 0;
            border-bottom-left-radius: 10px;

        }

        .address .form-control.state {
            border-radius: 0;
            border-bottom-right-radius: 10px;

        }

        .box-2 .box-inner-2 .btn.btn-outline-primary {
            width: 120px;
            padding: 10px;
            font-size: 11px;
            padding: 0% !important;
            display: flex;
            align-items: center;
            border: none;
            border-radius: 0;
            background-color: whitesmoke;
            color: black;
            font-weight: 600;
        }

        .box-2 .box-inner-2 .btn.btn-primary {
            background-color: #7700ff;
            color: whitesmoke;
            font-size: 14px;
            display: flex;
            align-items: center;
            font-weight: 600;
            justify-content: center;
            border: none;
            padding: 10px;
        }

        .box-2 .box-inner-2 .btn.btn-primary:hover {
            background-color: #7a34ca;
        }

        .box-2 .box-inner-2 .btn.btn-primary .fas {
            font-size: 13px !important;
            color: whitesmoke;
        }

        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .carousel-inner {
            width: 100%;
            height: 250px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
        }

        .carousel-control-prev {
            transform: translateX(-50%);
            opacity: 1;
        }

        .carousel-control-prev:hover .fas.fa-arrow-left {
            transform: translateX(-5px);
        }

        .carousel-control-next {
            transform: translateX(50%);
            opacity: 1;
        }

        .carousel-control-next:hover .fas.fa-arrow-right {
            transform: translateX(5px);
        }

        .fas.fa-arrow-left,
        .fas.fa-arrow-right {
            font-size: 0.8rem;
            transition: all .2s ease;
        }

        .icon {
            width: 30px;
            height: 30px;
            background-color: #f8f9fa;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transform-origin: center;
            opacity: 1;
        }

        .fas,
        .fab {
            color: #6d6c6d;
        }

        ::placeholder {
            font-size: 12px;
        }

        @media (max-width:768px) {
            .container {
                max-width: 700px;
                margin: 10px auto;
            }

            .box-1,
            .box-2 {
                max-width: 600px;
                padding: 20px 90px;
                margin: 20px auto;
            }

        }

        @media (max-width:426px) {

            .box-1,
            .box-2 {
                max-width: 400px;
                padding: 20px 10px;
            }

            ::placeholder {
                font-size: 9px;
            }
        }
    </style>
</head>

<body data-theme="default" className='snippet-body' data-layout="fluid" data-sidebar-position="left"
    data-sidebar-layout="default">
    <?php $sum = (float) $o->amount + (float) $o->delivery_fee - (float) $o->discount; ?>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Articles</p>
                    <p class="fw-lighter"><span ></span>{{ $sum }}  XAF</p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                        @foreach ($oi as $i)
                            @if ($loop->index == 0)
                                <button type="button" data-bs-target="#my" data-bs-slide-to="{{ $loop->index }}"
                                    class="active" aria-current="true" aria-label="{{ $i->name }}"></button>
                            @else
                                <button type="button" data-bs-target="#my" data-bs-slide-to="{{ $loop->index }}"
                                    aria-label="{{ $i->name }}"></button>
                            @endif
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($oi as $i)
                            @if ($loop->index == 0)
                                <div class="carousel-item active">
                                    <img src="{{ $i->image }}" class="d-block w-100">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{ $i->image }}" class="d-block w-100 h-100">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Précedent</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
                <p class="dis info my-3">N'hésitez pas à nous contacter via le numéro {{ $in->phone }} si vous
                    rencontrez un problème.
                </p>
                <div class="radiobtn">
                    @foreach ($oi as $i)
                        <input type="radio" name="box" id="{{ $i->product_id }}">
                    @endforeach
                    @foreach ($oi as $p)
                        <label for="{{ $p->product_id }}" class="box py-2 first">
                            <div class="d-flex align-items-start">
                                <span class="circle"></span>
                                <div class="course">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="fw-bold">
                                            {{ $p->name }}
                                        </span>
                                        <span>{{ $p->price }} XAF</span>
                                    </div>
                                    <span>{{ $p->quantity }}x {{ $p->name }}.</span>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Détails de Paiement</p>
                    <p class="dis mb-3">Complétez votre achat en fournissant vos informations de Paiement</p>
                </div>
                <form action="/flutterpay" method="post">
                @csrf
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Addresse Mail</p>
                        <input class="form-control" type="email" value="{{ $o->email }}" readonly>
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Moyen de Paiement</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-money ps-3"></div>
                            <select id="inputState" class="form-control" name="methode">
                                <option selected value="momo">Momo (MTN Mobile ¨Money)</option>
                                <option value="om">OM (Orange Money)</option>
                            </select>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Numéro de Téléphone</p>
                            <input class="form-control" type="telephone" name="phone">
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Livraison</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>{{ $o->country }}</option>
                            </select>
                            <div class="d-flex">
                                <input class="form-control zip" type="text" value="{{ $o->address }}"
                                    placeholder="address" readonly>
                                <input class="form-control state" value="{{ $o->city }}" type="text"
                                    placeholder="Ville" readonly>
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Subtotal</p>
                                    <p>{{ $s }}  XAF</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Livraison</p>
                                    <p><span >+</span>{{ $o->delivery_fee }}  XAF</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Reductions</p>
                                    <p><span >-</span>{{ $o->discount }}  XAF</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold">{{ $sum }} XAF</p>
                                </div>
                                <input type="hidden" value="{{$sum}}" name="amt" />
                                <input type="hidden" value="{{$o->user}}" name="user" />
                                <button class="btn btn-primary mt-2" type"submit">Payer : <span> {{ $sum }} XAF</span> 
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.partials.low-footer')
    <script src="{!! url('welcome/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    @include('admin.partials.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Orders
            $("#datatables-orders").DataTable({
                responsive: true,
                aoColumnDefs: [{
                    bSortable: false,
                    aTargets: [-1]
                }]
            });
        });
    </script>
</body>

</html>
