<div class="top-mobile-search">
    <div class="row">
        <div class="col-md-12">
            <form class="mobile-search" action="{{ route('customer.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" placeholder="Search for..." class="form-control">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>