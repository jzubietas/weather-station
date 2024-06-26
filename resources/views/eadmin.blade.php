@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Forms @endslot
            @slot('li_3') Form Elements @endslot
            @slot('title') Form Elements @endslot
        @endcomponent

                <div class="row">
                    <div class="col-lg-12">
                        <h1>REditar cuenta administrador</h1>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clave APP</h4>
                                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Usuario</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Contraseña</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Nueva Contraseña</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Dispositios maximos</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Titulo web</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Nombre web</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Logo panel</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Fondo APP</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-md-4">
                                                <label class="mb-3">Simple mode</label>
                                                <input class="form-control color-input" value="#228" />
                                            </div>  <!-- end row -->
                                        </div>

                                        

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 form-label align-self-center mb-lg-0 text-end" for="message">Notas</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="5" id="message"></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="mb-3 row d-none">
                                            <label class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row d-none">
                                            <label for="example-text-input-lg" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Large</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Guardar</button>

                                    </div>


                                    <div class="col-lg-6 d-none">
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">URL</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-month-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Month</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-week-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Week</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-time-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Time</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row has-success">
                                            <label for="inputHorizontalSuccess" class="col-sm-2 form-label mb-0 text-end">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                <div class="form-control-feedback">Success! You've done it.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 row has-warning">
                                            <label for="inputHorizontalWarning" class="col-sm-2 form-label mb-0 text-end">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 row has-error">
                                            <label for="inputHorizontalDnger" class="col-sm-2 form-label mb-0 text-end">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating labels <span class="badge bg-soft-success font-12">New</span></h4>
                                <p class="text-muted mb-0">Create beautifully simple form labels that float over your input fields.</p>
                            </div><!--end card-header-->
                            <div class="card-body bootstrap-select-1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="mb-3">Simple mode</label>
                                        <input class="form-control color-input" value="#228" />
                                    </div>  <!-- end row -->
                                    <div class="col-md-4">
                                        <label class="mb-3">RGB mode</label>
                                        <input class="form-control " value="#024" data-huebee />
                                    </div><!-- end row -->
                                    <div class="col-md-4">
                                        <label class="mb-3">HSL mode</label>
                                        <input class="form-control " value="#f7f8f9" data-huebee='{ "setBGColor": true, "saturations": 2 }' />
                                    </div><!-- end row -->
                                </div><!-- end row -->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating labels Selects <span class="badge bg-soft-success font-12">New</span></h4>
                                <p class="text-muted mb-0">Create beautifully simple form labels that float over your input fields.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                        <label for="floatingInputGrid">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelectGrid">Works with selects</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                <div class="row d-none">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Form</h4>
                                <p class="text-muted mb-0">Basic example to demonstrate Bootstrap’s form styles.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="InlineCheckbox">
                                            <label class="form-check-label" for="InlineCheckbox">Check me out</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal form</h4>
                                <p class="text-muted mb-0">Be sure to use <code class="highlighter-rouge">.form-label-sm</code>
                                    or <code class="highlighter-rouge">.form-label-lg</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s
                                    or <code class="highlighter-rouge">&lt;legend&gt;</code>s
                                    to correctly follow the size of <code class="highlighter-rouge">.form-control-lg</code> and
                                    <code class="highlighter-rouge">.form-control-sm</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="horizontalInput1" placeholder="Enter Email">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 form-label align-self-center mb-lg-0">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="horizontalInput2" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-sm-10 ms-auto">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="horizontalCheckbox">
                                                    <label class="form-check-label" for="horizontalCheckbox">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                <div class="row d-none">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom styles</h4>
                                <p class="text-muted mb-0">Custom stylr example.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form class="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">Name</label>
                                                <input type="text" class="form-control" id="username" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Email address</label>
                                                <input type="email" class="form-control" id="useremail" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="subject">Subject</label>
                                                <input type="text" class="form-control" id="subject" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="message">Message</label>
                                                <textarea class="form-control" rows="5" id="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-primary px-4">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inline Form</h4>
                                <p class="text-muted mb-0">Use the <code>.col-auto</code> class to create horizontal layouts.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form class="row row-cols-lg-auto align-items-center">
                                        <div class="col-12">
                                            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                            <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                            <select class="form-select" id="inlineFormSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Remember me
                                            </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Size</h4>
                                <p class="text-muted mb-0">Set heights using classes like
                                    <code class="highlighter-rouge">.form-control-lg</code> and
                                    <code class="highlighter-rouge">.form-control-sm</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <input class="form-control form-control-lg mb-2" type="text" placeholder=".form-control-lg">
                                    <input class="form-control form-control-sm " type="text" placeholder=".form-control-sm">

                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">File browser</h4>
                                <p class="text-muted mb-0">The file input is the most gnarly of the bunch and requires additional
                                    JavaScript if you’d like to hook them up with functional Choose file… and selected file name text.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>

                                    <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                                    <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                    </div>

                                    <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                    </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->




                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form controls</h4>
                                <p class="text-muted mb-0">Basic example to demonstrate Bootstrap’s form styles.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
                                        <select multiple="" class="form-select" id="exampleFormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->



                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Range</h4>
                                <p class="text-muted mb-0">CUse our custom range inputs for consistent cross-browser styling and built-in customization.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1">

                                <label for="customRange2" class="form-label">Min and max</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">

                                <label for="customRange3" class="form-label">Steps</label>
                                <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Switches</h4>
                                <p class="text-muted mb-0">
                                    A switch has the markup of a custom checkbox but uses the <code class="highlighter-rouge">.custom-switch</code> class to render
                                    a toggle switch. Switches also support the <code class="highlighter-rouge">disabled</code> attribute.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch</label>
                                        </div>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch </label>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">

                                        <div class="form-check form-switch form-switch-secondary">
                                            <input class="form-check-input" type="checkbox" id="customSwitchSecondary" checked>
                                            <label class="form-check-label" for="customSwitchSecondary">Secondary</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input" type="checkbox" id="customSwitchSuccess" checked>
                                            <label class="form-check-label" for="customSwitchSuccess">Success</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-warning">
                                            <input class="form-check-input" type="checkbox" id="customSwitchWarning" checked>
                                            <label class="form-check-label" for="customSwitchWarning">Warning</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-info">
                                            <input class="form-check-input" type="checkbox" id="customSwitchInfo" checked>
                                            <label class="form-check-label" for="customSwitchInfo">Info</label>
                                        </div>

                                    </div><!--end col-->

                                    <div class="col-lg-4">
                                        <div class="form-check form-switch form-switch-danger">
                                            <input class="form-check-input" type="checkbox" id="customSwitchDanger" checked>
                                            <label class="form-check-label" for="customSwitchDanger">Danger</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-dark">
                                            <input class="form-check-input" type="checkbox" id="customSwitchDark" checked>
                                            <label class="form-check-label" for="customSwitchDark">Dark</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-purple">
                                            <input class="form-check-input" type="checkbox" id="customSwitchPurple" checked>
                                            <label class="form-check-label" for="customSwitchPurple">Purple</label>
                                        </div>

                                        <div class="form-check form-switch form-switch-pink">
                                            <input class="form-check-input" type="checkbox" id="customSwitchPink" checked>
                                            <label class="form-check-label" for="customSwitchPink">Pink</label>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row d-none">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkboxs</h4>
                                <p class="text-muted mb-0">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults.
                                    They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form class="form">

                                        <div class="mb-3 row">
                                            <label class="col-md-3 my-2 form-label">Checkboxes</label>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Checked checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                                    <label class="form-check-label" for="flexCheckDisabled">
                                                        Disabled checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                                        Disabled checked checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div> <!--end row-->

                                        <div class="row mb-3">
                                            <label class="col-md-3 my-2 form-label">Inline Checkboxes</label>
                                            <div class="col-md-9">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">HTML5</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Css3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                    <label class="form-check-label" for="inlineCheckbox3">Javascript</label>
                                                </div>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <label class="col-md-3 my-1 form-label">Button Checkbox</label>
                                            <div class="col-md-9">
                                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                                <label class="btn btn-outline-primary btn-sm" for="btn-check-outlined">Single toggle</label><br>
                                            </div>
                                        </div> <!--end row-->
                                    </form><!--end form-->
                                </div><!--end general-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radios</h4>
                                <p class="text-muted mb-0">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults.
                                    They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form class="form">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 my-2 form-label">Radios</label>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Second default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row mb-3">
                                            <label class="col-md-3 my-1 form-label">Inline Radios</label>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">HTML5</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Css</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                    <label class="form-check-label" for="inlineRadio3">Javascript</label>
                                                </div>
                                            </div>
                                        </div> <!--end row-->

                                        <div class="row">
                                            <label class="col-md-3 my-1 form-label">Button Radios</label>
                                            <div class="col-md-9">
                                                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                                                <label class="btn btn-outline-success btn-sm" for="success-outlined">Checked success radio</label>

                                                <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                                                <label class="btn btn-outline-danger btn-sm" for="danger-outlined">Danger radio</label>
                                            </div>
                                        </div> <!--end row-->
                                    </form><!--end form-->
                                </div><!--end general-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row d-none">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input groups Static</h4>
                                <p class="text-muted mb-0">Easily extend form controls by adding text, buttons,
                                    or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">@mannatthemes.com</span>
                                </div>

                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://mannatthemes.com</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input groups Buttons</h4>
                                <p class="text-muted mb-0">Easily extend form controls by adding text, buttons,
                                    or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="mb-3 row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                                </div>
                                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" aria-label="Text input with radio button">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <button class="btn btn-secondary" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-secondary" type="button" id="button-addon2">Go!</button>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="button-addon3">
                                        <button class="btn btn-secondary" type="button" id="button-addon2">Submit</button>
                                    </div>



                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <button class="btn btn-secondary" type="button">Button</button>
                                    </div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.forms-advanced.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
