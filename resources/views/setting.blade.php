@extends('layouts.main')

@section('container')
    <div class="container rounded bg-white mb-5">
        <div class="row justify-content-center">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center px-3 pt-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                </div>
                <div class="text-center"><button class="btn btn-sec profile-button" type="button"><i
                            class="bi bi-pencil-square"></i></button></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2"><label class="labels">Name</label><input type="text"
                                class="form-control" placeholder="Full Name" value=""></div>
                        <div class="col-md-12 mb-2"><label class="labels">Email</label><input type="email"
                                class="form-control" placeholder="example@mail.com" value=""></div>
                        <div class="col-md-12"><label class="labels">Password</label><input type="password"
                                class="form-control" placeholder="" value=""></div>
                        <div class="mt-4 text-center"><button class="btn btn-sec profile-button" type="button"><i
                                    class="bi bi-save"></i> Save
                                Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
