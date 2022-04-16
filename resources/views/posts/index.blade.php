@extends('posts.common')
@section('index')
<div class="col-lg-3">

    <a class="btn btn-primary mb-5 " href="{{ route('posts.create') }}" role="button">Add new post</a>


    <div class="filter-secs">
        <div class="filter-heading">
            <h3>Filters</h3>
            <a href="#" title="">Clear all filters</a>
        </div>
        <form action="{{ route('posts.filters') }}" method="get">
            <div class="paddy">
                <div class="filter-dd">
                    <div class="filter-ttl">
                        <h3>Skills</h3>
                    </div>
                    <input class="form-control form-control-sm" type="text" name="search-skills"
                        placeholder="Search skills">
                </div>
                <div class="filter-dd">
                    <div class="filter-ttl">
                        <h3>Availabilty</h3>
                    </div>
                    <ul class="avail-checks">
                        <li>



                            <input type="radio" name="Fixed" value="Fixed" id="c1">
                            <label for="c1">
                                <span></span>
                            </label>
                            <small>Fixed</small>
                        </li>
                        <li>
                            <input type="radio" name="Full_Time" value="Full-Time" id="c2">
                            <label for="c2">
                                <span></span>
                            </label>
                            <small>Full-Time</small>
                        </li>
                        <li>
                            <input type="radio" name="Part-Time" value="Part-Time" id="c3">
                            <label for="c3">
                                <span></span>
                            </label>
                            <small>Part-Time</small>
                        </li>
                        <li>
                            <input type="radio" name="Alternate" value="Alternate" id="c3">
                            <label for="c3">
                                <span></span>
                            </label>
                            <small>Alternate</small>
                        </li>
                        <li>
                            <input type="radio" name="Overtime" value="Overtime" id="c3">
                            <label for="c3">
                                <span></span>
                            </label>
                            <small>Overtime</small>
                        </li>
                        <li>
                            <input type="radio" name="Shift" value="Shift" id="c3">
                            <label for="c3">
                                <span></span>
                            </label>
                            <small>Shift</small>
                        </li>
                    </ul>


                </div>
                <div class="filter-dd">
                    <div class="filter-ttl">
                        <h3>Job Type</h3>
                    </div>
                    <select class="form-control form-control-sm" name="job_type">

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
                <div class="filter-dd">
                    <div class="filter-ttl">
                        <h3>Pay Rate / Hr ($)</h3>
                    </div>
                    <div class="rg-slider">
                        <input class="rn-slider slider-input" type="hidden" value="5,50" />
                    </div>
                    <div class="rg-limit">
                        <h4>1</h4>
                        <h4>100+</h4>
                    </div>
                </div>
                <div class="filter-dd">
                    <div class="filter-ttl">
                        <h3>Countries</h3>
                    </div>
                    <select class="form-control form-control-sm">
                        <option>Select a country</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>Russia</option>
                    </select>
                </div>

            </div>
            <input class="btn btn-block text-white" type="submit" value="Filter" style="background-color: #e44d3a;">
        </form>
    </div>
</div>
<div class="col-lg-9">
    <div class="main-ws-sec">
        <div class="posts-section">


            <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">My Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">All Post</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($posts as $post)

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="posty">
                        <div class="post-bar no-margin">
                            <div class="post_topbar">
                                <div class="usy-dt">
                                    <img src="images/resources/us-pc2.png" alt="">
                                    <div class="usy-name">
                                        <h3>{{ $post->user->name }}</h3>
                                        <span><img src="images/clock.png" alt="">{{
                                            \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <div class="ed-opts">
                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                    <ul class="ed-options">
                                        <li><a href="#" title="">Edit Post</a></li>
                                        <li><a href="#" title="">Unsaved</a></li>
                                        <li><a href="#" title="">Unbid</a></li>
                                        <li><a href="#" title="">Close</a></li>
                                        <li><a href="#" title="">Hide</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="epi-sec">
                                <ul class="descp">
                                    <li><img src="images/icon8.png" alt=""><span>
                                            {{ $post->slogan }} </span>
                                    </li>
                                    <li><img src="images/icon9.png" alt=""><span>{{ $post->user->country }}</span></li>
                                </ul>
                            </div>
                            <div class="job_descp">
                                <h3> {{ $post->job_type }}</h3>
                                <ul class="job-dt">
                                    <li><a href="#" title=""> {{ $post->availability }}</a></li>
                                    <li><span> ${{ $post->pay_rate }}/hr</span></li>
                                </ul>
                                <p> {{ $post->post_body }}<a href="#" title="">view more</a></p>
                                <ul class="skill-tags">
                                    @foreach ($post->skills as $skill)
                                    {{-- <button type="button" class="btn btn-outline-primary"></button> --}}

                                    <li><a href="#" title="">{{ $skill->name }}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="job-status-bar">
                                <ul class="like-com">
                                    <li>
                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @foreach ($all_posts as $all_post)

                    <div class="posty">
                        <div class="post-bar no-margin">
                            <div class="post_topbar">
                                <div class="usy-dt">
                                    <img src="images/resources/us-pc2.png" alt="">
                                    <div class="usy-name">
                                        <h3>{{ $all_post->user->name }}</h3>
                                        <span><img src="images/clock.png" alt="">{{
                                            \Carbon\Carbon::parse($all_post->created_at)->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <div class="ed-opts">
                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                    <ul class="ed-options">
                                        <li><a href="#" title="">Edit Post</a></li>
                                        <li><a href="#" title="">Unsaved</a></li>
                                        <li><a href="#" title="">Unbid</a></li>
                                        <li><a href="#" title="">Close</a></li>
                                        <li><a href="#" title="">Hide</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="epi-sec">
                                <ul class="descp">
                                    <li><img src="images/icon8.png" alt=""><span>
                                            {{ $all_post->slogan }} </span>
                                    </li>
                                    <li><img src="images/icon9.png" alt=""><span>{{ $all_post->user->country }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="job_descp">
                                <h3> {{ $all_post->job_type }}</h3>
                                <ul class="job-dt">
                                    <li><a href="#" title=""> {{ $all_post->availability }}</a></li>
                                    <li><span> ${{ $all_post->pay_rate }}/hr</span></li>
                                </ul>
                                <p> {{ $all_post->post_body }}<a href="#" title="">view more</a></p>
                                <ul class="skill-tags">
                                    @foreach ($all_post->skills as $skill)
                                    {{-- <button type="button" class="btn btn-outline-primary"></button> --}}

                                    <li><a href="#" title="">{{ $skill->name }}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="job-status-bar">
                                <ul class="like-com">
                                    <li>
                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
