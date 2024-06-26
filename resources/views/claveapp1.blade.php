@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Forms @endslot
            @slot('li_3') Validation @endslot
            @slot('title') Validation @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">CLAVE APP</h4>
                            <p class="text-muted mb-0">Custom feedback styles apply custom colors, borders, focus styles, and background
                                    icons to better communicate feedback. Background icons for <code>&lt;select&gt;</code>s are
                                    only available with <code>.form-select</code>, and not <code>.form-control</code>.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                    Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">State</label>
                                    <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Please select a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                    Please provide a valid zip.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Validation Tooltips</h4>
                            <p class="text-muted mb-0">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for
                                <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                                    <div class="valid-tooltip">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                                    <div class="valid-tooltip">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6 position-relative">
                                    <label for="validationTooltip03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationTooltip03" required>
                                    <div class="invalid-tooltip">
                                    Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip04" class="form-label">State</label>
                                    <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                    Please select a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationTooltip05" required>
                                    <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Validation type</h4>
                            <p class="text-muted mb-0">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form class="form-parsley" action="#">
                                <div class="form-group">
                                    <label class="form-label">Required</label>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Equal To</label>
                                    <input type="password" id="pass2" class="form-control" required
                                                placeholder="Password"/>
                                    <div class="mt-2">
                                        <input type="password" class="form-control" required
                                                data-parsley-equalto="#pass2"
                                                placeholder="Re-Type Password"/>
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" required
                                                parsley-type="email" placeholder="Enter a valid e-mail"/>
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">URL</label>
                                    <input parsley-type="url" type="url" class="form-control"
                                                required placeholder="URL"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Digits</label>
                                    <input data-parsley-type="digits" type="text"
                                    class="form-control" required
                                    placeholder="Enter only digits"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div>
                                        <input data-parsley-type="number" type="text"
                                                class="form-control" required
                                                placeholder="Enter only numbers"/>
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Alphanumeric</label>
                                    <input data-parsley-type="alphanum" type="text"
                                                class="form-control" required
                                                placeholder="Enter alphanumeric value"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Textarea</label>
                                    <textarea required class="form-control" rows="5"></textarea>
                                </div><!--end form-group-->

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        Cancel
                                    </button>
                                </div><!--end form-group-->
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Range validation</h4>
                            <p class="text-muted mb-0">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form class="form-parsley" action="#">
                                <div class="form-group">
                                    <label class="form-label">Min Length</label>
                                    <input type="text" class="form-control" required
                                    data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Max Length</label>
                                    <input type="text" class="form-control" required
                                                data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Range Length</label>
                                    <input type="text" class="form-control" required
                                                data-parsley-length="[5,10]"
                                                placeholder="Text between 5 - 10 chars length"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Min Value</label>
                                    <input type="text" class="form-control" required
                                    data-parsley-min="6" placeholder="Min value is 6"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Max Value</label>
                                    <input type="text" class="form-control" required
                                    data-parsley-max="6" placeholder="Max value is 6"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Range Value</label>
                                    <input class="form-control" required type="text" min="6"
                                                max="100" placeholder="Number between 6 - 100"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Regular Exp</label>
                                    <input type="text" class="form-control" required
                                        data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                        placeholder="Hex. Color"/>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label class="form-label">Min check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="customCheck1">And this</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="customCheck2">Can't check this</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="customCheck3">This too</label>
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        Cancel
                                    </button>
                                </div><!--end form-group-->
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
