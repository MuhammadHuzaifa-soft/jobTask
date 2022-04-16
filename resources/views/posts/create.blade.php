@extends('posts.common')

@section('create')
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src=" {{asset('images/cm-logo.png') }}" alt="">
                                <p>Workwise, is a global freelancing platform and social networking where businesses
                                    and independent professionals connect and collaborate remotely</p>
                            </div>
                            <img src="{{asset('images/cm-main-img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            {{-- <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                            </ul> --}}
                            <div class="sign_in_sec current" id="tab-1">
                                <h3>Create Post</h3>
                                <form action="{{ route('posts.store') }}" method="post">
                                    @csrf







                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="post_title" autocomplete="off"
                                                    placeholder="Post Title">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input name="slogan" autocomplete="off" placeholder="slogan">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">

                                                <div class="form-group">

                                                    <select id="type" class="form-control" name="job_type">
                                                        <option value="">--select job type--</option>
                                                        <option value="Computer programmer">Computer programmer

                                                        </option>
                                                        <option value="Web developer">Web developer
                                                        </option>
                                                        <option value="Programmer analyst">Programmer analyst
                                                        </option>
                                                        <option value="Computer systems engineer">Computer systems
                                                            engineer
                                                        </option>
                                                        <option value="Software engineer">Software engineer
                                                        </option>
                                                        <option value="Mobile app developer">Mobile app developer
                                                        </option>

                                                    </select>

                                                </div>

                                            </div>
                                            {{-- <div class="sn-field">
                                                <input type="text" name="job_type" placeholder="job_type">
                                                <i class="la la-user"></i>
                                            </div> --}}
                                        </div>

                                        <div class="col-lg-12 no-pdd">
                                            <div class="form-group">

                                                <select id="type" class="form-control" name="availability">
                                                    <option value="">--Chose Availability--</option>
                                                    <option value="Standard">Standard

                                                    </option>
                                                    <option value="Fixed">Fixed
                                                    </option>
                                                    <option value="Full-Time">Full-Time
                                                    </option>
                                                    <option value="Part-Time">Part-Time
                                                    </option>
                                                    <option value="Shift">Shift
                                                    </option>
                                                    <option value="Alternate">Alternate
                                                    </option>
                                                    <option value="Overtime">Overtime
                                                    </option>

                                                </select>

                                            </div>



                                            {{-- <div class="sn-field">
                                                <input name="availability" placeholder="availability">
                                                <i class="la la-lock"></i>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="pay_rate" placeholder="pay_rate">
                                                {{-- <i class="la la-user"></i> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input name="post_body" placeholder="write SA">
                                                {{-- <i class="la la-lock"></i> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">


                                            @foreach($skills as $skill)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="skills[]" value="{{ $skill->id }}"
                                                    type="checkbox">

                                                <label class="form-check-label">{{ $skill->name }}</label>
                                            </div>
                                            @endforeach
                                            {{-- <label for="my-input">Text</label>
                                            <input id="my-input" class="form-control" type="text" name=""> --}}
                                        </div>



                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
