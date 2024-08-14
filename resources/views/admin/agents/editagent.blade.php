@extends('admin.layout')
@section('title', 'Update Agents')


@section('section-wrapper')

    <div class="pagetitle">
        <h1>Update Agent</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Update Agent</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Agent Form</h5>
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('admin_agents_edit_update') }}" enctype="multipart/form-data">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @csrf
                            <input type="hidden" name="id" value="{{ $agent->id }}">
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" required value="{{ old('name') ? old('name') : $agent->name }}">
                                <div class="invalid-feedback">
                                    Please provide a name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" class="form-control" id="validationCustom02" name="email" required value="{{ old('email') ? old('email') : $agent->email }}">
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="validationCustom02" name="descignation" required value="{{ old('descignation') ? old('descignation') : $agent->descignation }}">
                                <div class="invalid-feedback">
                                    Please provide a designation.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">WhatsApp Number</label>
                                <input type="text" class="form-control" id="validationCustom03" name="whatsapp_number" value="{{ old('whatsapp_number') ? old('whatsapp_number') : $agent->whatsapp_number }}">
                                <div class="valid-feedback">
                                    Optional.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="validationCustom04" name="phone_number" value="{{ old('phone_number') ? old('phone_number') : $agent->phone_number }}">
                                <div class="valid-feedback">
                                    Optional.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Profile Image (416px x 550px)</label>
                                <input type="file" class="form-control" id="validationCustom05" name="profile_image">
                                <div class="valid-feedback">
                                    Optional.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom06" class="form-label">Rating</label>
                                <input type="number" step="0.1" min="0" max="5" class="form-control" name="rating" id="validationCustom06" required value="{{ old('rating') ? old('rating') : $agent->rating }}">
                                <div class="invalid-feedback">
                                    Please provide a valid rating between 0 and 5.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
