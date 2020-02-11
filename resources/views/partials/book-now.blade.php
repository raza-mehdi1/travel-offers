<div class="col-12 col-lg-7">

    <div class="content-wrapper">

        <div class="form-draft-payment">

            <form action="{{route('checkout')}}" method="POST">
                @csrf
                <input hidden name="adult_guests" value="{{$adults}}">
                <input hidden name="child_guests" value="{{$children}}">
                <input hidden name="total_cost" value="{{ceil(($package->price_per_head * $adults) + (round(($package->price_per_head * config('travel-offers.child_rate_fraction')), 2) * $children))}}">
                <input hidden name="package_name" value="{{$package->title}}">
                <input hidden name="package_price" value="{{$package->price_per_head}}">

                <h4 class="heading-title"><span>Traveller Details</span></h4>
                {{--                                    <p class="post-heading">Already registered with Roomspoint? <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">Login</a></p>--}}

                <h6>Lead Traveller</h6>

                <div class="row gap-15 mb-15">

                    <div class="col-4 col-sm-3 col-md-2">

                        <div class="form-group">
                            <label>Title</label>
                            <select name="title" data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                <option value=""></option>
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Miss</option>
                            </select>
                        </div>

                    </div>

                    <div class="w-100 d-block d-md-none"></div>

                    <div class="col-6 col-md-5">

                        <div class="form-group">
                            <label>First Name</label>
                            <input name="first_name" type="text" class="form-control" placeholder="First name" />
                        </div>

                    </div>

                    <div class="col-6 col-md-5">

                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="last_name" type="text" class="form-control" placeholder="Last name" />
                        </div>

                    </div>

                    <div class="col-6 col-sm-6 col-md-7">

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email address" />
                        </div>

                    </div>

                    <div class="col-12 col-sm-6 col-md-5">

                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" type="text" class="form-control" placeholder="Phone number" />
                        </div>

                    </div>

                </div>

                <div class="mb-20"></div>

                {{--  @include('partials.payment-gateway') --}}

                <div class="row mt-20">

                    <div class="col-sm-8 col-md-6">

                        <button class="btn btn-primary">{{__('general.book_now')}}</button>

                        {{--<p class="line-145 mt-20 font-italic font-sm"><span class="font600">** Prepared is me marianne</span>: pleasure likewise debating. Wonder an unable except better stairs do ye admire.</p>--}}

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>
