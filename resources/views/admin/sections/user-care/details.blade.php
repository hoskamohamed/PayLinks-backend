@extends('admin.layouts.master')

@push('css')
@endpush

@section('page-title')
    @include('admin.components.page-title', ['title' => __($page_title)])
@endsection

@section('breadcrumb')
    @include('admin.components.breadcrumb', [
        'breadcrumbs' => [
            [
                'name' => __('Dashboard'),
                'url' => setRoute('admin.dashboard'),
            ],
        ],
        'active' => __('User Care'),
    ])
@endsection

@section('content')
    <div class="dashboard-area">
        <div class="dashboard-item-area">
            <div class="row">
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __('Current Balance') }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ get_amount(@$data['wallet']->balance, @$currency->currency_code) }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="las la-wallet"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __('Collect Payment With Link') }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ get_amount(@$data['collection_payment'], @$currency->currency_code) }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="las la-link"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __('Collect Payment With Invoice') }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ get_amount(@$data['collection_invoice'], @$currency->currency_code) }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="las la-file-invoice-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __("Money Out") }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ get_amount(@$data['money_out'], @$currency->currency_code) }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="lab la-free-code-camp"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __('Total Payment Link') }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ @$total_payment_link }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="las la-calculator"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-15">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <div class="left">
                                <h6 class="title">{{ __('Total Invoice') }}</h6>
                                <div class="user-info">
                                    <h2 class="user-count">{{ @$total_invoice }}</h2>
                                </div>
                            </div>
                            <div class="right">
                                <div class="dashboard-icon">
                                    <i class="las la-file-invoice-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-card mt-15">
        <div class="card-header">
            <h6 class="title">{{ __("User Overview") }}</h6>
        </div>
        <div class="card-body">
            <form class="card-form">
                <div class="row align-items-center mb-10-none">
                    <div class="col-xl-4 col-lg-4 form-group">
                        <div class="user-action-btn-area">
                            <div class="user-action-btn">
                                @include('admin.components.button.custom',[
                                    'type'          => "button",
                                    'class'         => "wallet-balance-update-btn bg--danger one",
                                    'text'          => "Add/Subtract Balance",
                                    'icon'          => "las la-wallet me-1",
                                    'permission'    => "admin.users.wallet.balance.update",
                                ])
                            </div>
                            <div class="user-action-btn">
                                @include('admin.components.link.custom',[
                                    'href'          => setRoute('admin.users.login.logs',$user->username),
                                    'class'         => "bg--base two",
                                    'icon'          => "las la-sign-in-alt me-1",
                                    'text'          => "Login Logs",
                                    'permission'    => "admin.users.login.logs",
                                ])
                            </div>
                            <div class="user-action-btn">
                                @include('admin.components.link.custom',[
                                    'href'          => "#email-send",
                                    'class'         => "bg--base three modal-btn",
                                    'icon'          => "las la-mail-bulk me-1",
                                    'text'          => "Send Email",
                                    'permission'    => "admin.users.send.mail",
                                ])
                            </div>
                            <div class="user-action-btn">
                                @include('admin.components.link.custom',[
                                    'class'         => "bg--base four login-as-member",
                                    'icon'          => "las la-user-check me-1",
                                    'text'          => "Login as Member",
                                    'permission'    => "admin.users.login.as.member",
                                ])
                            </div>
                            <div class="user-action-btn">
                                @include('admin.components.link.custom',[
                                    'href'          => setRoute('admin.users.mail.logs',$user->username),
                                    'class'         => "bg--base five",
                                    'icon'          => "las la-history me-1",
                                    'text'          => "Email Logs",
                                    'permission'    => "admin.users.mail.logs",
                                ])
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 form-group">
                        <div class="user-profile-thumb">
                            <img src="{{ $user->userImage }}" alt="user">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 form-group">
                        <ul class="user-profile-list">
                            <li class="bg--base one">{{ __('Full Name') }}: <span>{{ $user->firstname .' '. $user->lastname ?? '' }}</span></li>
                            <li class="bg--info two">{{ __('Username') }}: <span>{{ "@".$user->username }}</span></li>
                            <li class="bg--success three">{{ __('Email') }}: <span>{{ $user->email }}</span></li>
                            <li class="bg--warning four">{{ __('Status') }}: <span>{{ $user->stringStatus->value }}</span></li>
                            <li class="bg--danger five">{{ __('Last Login') }}: <span>{{ $user->lastLogin }}</span></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="custom-card mt-15">
        <div class="card-header">
            <h6 class="title">{{ __("Information of User") }}</h6>
        </div>
        <div class="card-body">
            <form class="card-form" method="POST" action="{{ setRoute('admin.users.details.update',$user->username) }}">
                @csrf
                <div class="row mb-10-none">
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "First Name*",
                            'name'          => "firstname",
                            'value'         => old("firstname",$user->firstname),
                            'attribute'     => "required",
                            'placeholder'   => "Write Here...",
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "Last Name*",
                            'name'          => "lastname",
                            'value'         => old("lastname",$user->lastname),
                            'attribute'     => "required",
                            'placeholder'   => "Write Here...",
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "Address",
                            'name'          => 'address',
                            'value'         => old("address",$user->address->address ?? ""),
                            'placeholder'   => "Write Here...",
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>{{ __("Country") }}</label>
                        <select name="country" class="form--control select2-auto-tokenize country-select" data-placeholder="Select Country" data-old="{{ old('country',$user->address->country ?? "") }}"></select>
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "State",
                            'name'          => 'state',
                            'value'         => old('state',$user->address->state ?? ""),
                            'placeholder'   => "Write Here...",
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "City",
                            'name'          => 'city',
                            'value'         => old('city',$user->address->city ?? ""),
                            'placeholder'   => "Write Here...",
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "Zip/Postal",
                            'name'          => "zip_code",
                            'placeholder'   => "Write Here...",
                            'value'         => old('zip_code',$user->address->zip ?? "")
                        ])
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>{{ __("Phone Number") }}</label>
                        <div class="input-group">
                            <div class="input-group-text phone-code">+{{ $user->mobile_code }}</div>
                            <input class="phone-code" type="hidden" name="mobile_code" value="{{ $user->mobile_code }}" />
                            <input type="text" class="form--control" placeholder="Write Here..." name="mobile" value="{{ old('mobile',$user->mobile) }}">
                        </div>
                        @error("mobile")
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 form-group">
                        @include('admin.components.form.input',[
                            'label'         => "Company Name",
                            'name'          => "company_name",
                            'placeholder'   => "Write Here...",
                            'value'         => old('company_name',$user->address->company_name ?? "")
                        ])
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                        @include('admin.components.form.switcher', [
                            'label'         => 'User Status',
                            'value'         => old('status',$user->status),
                            'name'          => "status",
                            'options'       => ['Active' => 1, 'Banned' => 0],
                            'permission'    => "admin.users.details.update",
                        ])
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                        @include('admin.components.form.switcher', [
                            'label'         => 'Email Verification',
                            'value'         => old('email_verified',$user->email_verified),
                            'name'          => "email_verified",
                            'options'       => ['Verified' => 1, 'Unverified' => 0],
                            'permission'    => "admin.users.details.update",
                        ])
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                        @include('admin.components.form.switcher', [
                            'label'         => 'KYC Verification',
                            'value'         => old('kyc_verified',$user->kyc_verified),
                            'name'          => "kyc_verified",
                            'options'       => ['Verified' => 1, 'Unverified' => 0],
                            'permission'    => "admin.users.details.update",
                        ])
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                        @include('admin.components.form.switcher', [
                            'label'     => '2FA Status',
                            'value'     => old('two_factor_status',$user->two_factor_status),
                            'name'      => "two_factor_status",
                            'options'   => ['Active' => 1, 'Inactive' => 0],
                            'permission'    => "admin.users.details.update",
                        ])
                    </div>

                    <div class="col-xl-12 col-lg-12 form-group mt-4">
                        @include('admin.components.button.form-btn',[
                            'text'          => "Update",
                            'permission'    => "admin.users.details.update",
                                                'class'         => "w-100 btn-loading",
                        ])
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Send Email Modal --}}
    @include('admin.components.modals.send-mail-user',compact("user"))

    {{-- User Balance Update Modal --}}
    @if (admin_permission_by_name("admin.users.wallet.balance.update"))
    <div id="wallet-balance-update-modal" class="mfp-hide large">
        <div class="modal-data">
            <div class="modal-header px-0">
                <h5 class="modal-title">{{ __("Add/Subtract Balance") }}</h5>
            </div>
            <div class="modal-form-data">
                <form class="modal-form" method="POST" action="{{ setRoute('admin.users.wallet.balance.update',$user->username) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-10-none">
                        <div class="col-xl-12 col-lg-12 form-group">
                            <label for="balance">{{ __("Type") }}<span>*</span></label>
                            <select name="type" id="balance" class="form--control nice-select">
                                <option disabled selected>{{ __('Select Type') }}</option>
                                <option value="add">{{ __('Balance Add') }}</option>
                                <option value="subtract">{{ __('Balance Subtract') }}</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 form-group">
                            <label for="wallet">{{ __("User Wallet") }}<span>*</span></label>
                            <select name="wallet" id="wallet" class="form--control select2-auto-tokenize">
                                <option value="{{ $data['wallet']->id }}">{{ $data['wallet']->currency->currency_code }}</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 form-group">
                            @include('admin.components.form.input',[
                                'label'         => 'Amount',
                                'label_after'   => "<span>*</span>",
                                'type'          => 'number',
                                'name'          => 'amount',
                                'attribute'     => 'step="any"',
                                'value'         => old("amount"),
                            ])
                        </div>
                        <div class="col-xl-12 col-lg-12 form-group">
                            @include('admin.components.form.input',[
                                'label'         => "Remark",
                                'label_after'   => "<span>*</span>",
                                'name'          => "remark",
                                'value'         => old("remark"),
                            ])
                        </div>
                        <div class="col-xl-12 col-lg-12 form-group d-flex align-items-center justify-content-between mt-4">
                            <button type="button" class="btn btn--danger modal-close">{{ __("Close") }}</button>
                            <button type="submit" class="btn btn--base">{{ __("Submit") }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('script')
    <script>
        getAllCountries("{{ setRoute('global.countries') }}");
        $(document).ready(function() {

            openModalWhenError("email-send","#email-send");
            openModalWhenError("wallet-balance-update-modal","#wallet-balance-update-modal");

            $("select[name=country]").change(function(){
                var phoneCode = $("select[name=country] :selected").attr("data-mobile-code");
                placePhoneCode(phoneCode);
            });

            setTimeout(() => {
                var phoneCodeOnload = $("select[name=country] :selected            ").attr("data-mobile-code");
                placePhoneCode(phoneCodeOnload);
            }, 400);

            countrySelect(".country-select",$(".country-select").siblings(".select2"));
            stateSelect(".state-select",$(".state-select").siblings(".select2"));


            $(".login-as-member").click(function() {
                var action  = "{{ setRoute('admin.users.login.as.member',$user->username) }}";
                var target  = "{{ $user->username }}";
                postFormAndSubmit(action,target);
            });

            $(".wallet-balance-update-btn").click(function(){
                openModalBySelector("#wallet-balance-update-modal");
            });
        })
    </script>
@endpush
