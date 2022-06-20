
@extends('layouts.app')
@section('page', 'Cart')
@section('content')
    <section class="cart_sec py-4 py-lg-5">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5 justify-content-between">
                <div class="col-12 col-lg-8">
                    <div class="card_border-0">
                        <div class="crt_p">
                            <h6>100 Business Cards (Express Delivery)</h6>
                            <a href=""><i data-feather="edit-3"></i> Edit</a>
                        </div>
                        <div class="clp_div">
                            <div class="clpt1">Shape and Size</div>
                            <div class="clpt2">Rectangle (3.5 x 2 in)</div>
                        </div>
                        <div class="clp_div">
                            <div class="clpt1">Materials</div>
                            <div class="clpt2">Lykam matt paper  300gsm (S300)</div>
                        </div>
                        <div class="clp_div">
                            <div class="clpt1">Paper Type</div>
                            <div class="clpt2">Standard Cards</div>
                        </div>
                        <div class="clp_div">
                            <div class="clpt1">Delivery Options</div>
                            <div class="clpt2">Delivery</div>
                        </div>
                        <div class="clp_div">
                            <div class="clpt1">
                                Front
                                <img src="./img/business-cards.png">
                            </div>
                            <div class="clpt1">
                                Back
                                <img src="./img/business-cards.png">
                            </div>
                        </div>
                        <div class="noted">
                            <h6>Inertiacart Free Design Assistance</h6>
                            <p>
                                <small>
                                    If you have doubts about design placement, image resolution etc, our print support team will be happy to assist you once you have placed the order.
                                </small>
                            </p>
                            <p>
                                <small>
                                    You will be provided with a messaging interface where you can ask them any doubts about the design and print.
                                </small>
                            </p>
                            <p>
                                <small>
                                    Note that this design assistance service is free of cost and hence can be done only for minor improvements or modifications.
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 cart_price">
                    <div class="card border-0 sticky-top shadow">
                        <div class="card-header">
                            Order Summary
                        </div>
                        <div class="card-body bg-light">
                            <table class="table table-borderless table-sm">
                                <tr>
                                    <td>Est. delivery</td>
                                    <td class="text-end"><span>Mon, 2 May</span></td>
                                </tr>
                                <tr>
                                    <td>Store Pickup </td>
                                    <td class="text-end"><span>Free</span></td>
                                </tr>
                                <tr>
                                    <td>Per piece cost<small class="d-block">(Inclusive taxes)</small></td>
                                    <td class="text-end"><span>₹1.77</span></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td class="text-end"><span>100</span></td>
                                </tr>
                                <tr>
                                    <td>Total production charges</td>
                                    <td class="text-end"><span>₹177.00</span></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="text-end"><span>₹65.00</span></td>
                                </tr>
                                <tr>
                                    <td>Pincode</td>
                                    <td class="text-end">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Pincode">
                                            <button class="btn btn-tbsearch">Save</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="form-check pin_cd">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label mb-0" for="flexRadioDefault1">
                                                <span>Standard Shipping <b>₹65.00</b></span>
                                                <small class="d-block">Est. delivery by <b>Tue, 3 May</b></small>
                                            </label>
                                        </div>
                                        <div class="form-check pin_cd">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label mb-0" for="flexRadioDefault2">
                                                <span>Store Pickup <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#stores">Select Store</a></span>
                                                <small class="d-block">Pickup available at 27 stores across 6 cities.</small>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tfoot class="mt-3">
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-end"><span>₹242.00</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <button class="btn-block btn catr_btn"><i data-feather="shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection