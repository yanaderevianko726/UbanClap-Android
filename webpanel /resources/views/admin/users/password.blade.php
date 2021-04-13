@extends('admin.layout.base')

@section('title', 'Change Password '.__('admin.user'))

@section('content')
    <div class="content-area py-1">
        <div class="container-fluid">
            <div class="columns">
                <div class="col-md-3">
                    <div class="box box-block bg-white">
                        <h5 style="margin-bottom: 2em;">{{'Change Password '.__('admin.user')}}</h5>
                        <form   action="{{ route('admin.user.password',['id'=>$user->id]) }}" method="POST" role="form">
                            @csrf
                            @method('PATCH')
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label for="">Password:</label>
                                        <input type="password" class="input" name="password">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label for="">Confirm Password:</label>
                                        <input type="password" class="input" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="column">
                                    <button type="submit" class="button is-link">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
