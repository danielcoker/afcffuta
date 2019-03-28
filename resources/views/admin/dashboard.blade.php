@extends('layouts.admin.main')

@section('title', 'Dashboard')

@section('content')

    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Dashboard</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">1</span>
                                <p class="stats-info">Feedback</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_upward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">2</span>
                                <p class="stats-info">Published Articles</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_downward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">3</span>
                                <p class="stats-info">New Registrations</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_upward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">4</span>
                                <p class="stats-info">Published Posts</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_upward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Resources</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive invoice-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><strong>#</strong></th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->

            {{-- <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Browsers</h4>
                        </div>
                        <div class="panel-body">
                            <div class="browser-stats">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-chrome"></i>Google Chrome
                                        <div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div>
                                    </li>
                                    <li><i class="fa fa-firefox"></i>Firefox
                                        <div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div>
                                    </li>
                                    <li><i class="fa fa-internet-explorer"></i>Internet Explorer
                                        <div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div>
                                    </li>
                                    <li><i class="fa fa-safari"></i>Safari
                                        <div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div>
                                    </li>
                                    <li><i class="fa fa-opera"></i>Opera
                                        <div class="text-danger pull-right">7%<i class="fa fa-level-down"></i></div>
                                    </li>
                                    <li><i class="fa fa-tablet"></i>Mobile &amp; tablet
                                        <div class="text-success pull-right">4%<i class="fa fa-level-up"></i></div>
                                    </li>
                                    <li><i class="fa fa-hashtag"></i>Others
                                        <div class="text-success pull-right">3%<i class="fa fa-level-up"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Projects</h4>
                        </div>
                        <div class="panel-body">
                            <div class="project-stats">
                                <ul class="list-unstyled">
                                    <li>Alpha - Admin Template<span class="label label-default pull-right">85%</span></li>
                                    <li>Meteor - Landing Page<span class="label label-success pull-right">Finished</span></li>
                                    <li>Modern - Corporate Website<span class="label label-success pull-right">Finished</span></li>
                                    <li>Space - Admin Template<span class="label label-danger pull-right">Rejected</span></li>
                                    <li>Backend UI<span class="label label-default pull-right">27%</span></li>
                                    <li>Personal Blog<span class="label label-default pull-right">48%</span></li>
                                    <li>E-mail Templates<span class="label label-default pull-right">Pending</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Projects</h4>
                        </div>
                        <div class="panel-body">
                            <div class="project-stats">
                                <ul class="list-unstyled">
                                    <li>Alpha - Admin Template<span class="label label-default pull-right">85%</span></li>
                                    <li>Meteor - Landing Page<span class="label label-success pull-right">Finished</span></li>
                                    <li>Modern - Corporate Website<span class="label label-success pull-right">Finished</span></li>
                                    <li>Space - Admin Template<span class="label label-danger pull-right">Rejected</span></li>
                                    <li>Backend UI<span class="label label-default pull-right">27%</span></li>
                                    <li>Personal Blog<span class="label label-default pull-right">48%</span></li>
                                    <li>E-mail Templates<span class="label label-default pull-right">Pending</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Row -->
        </div>
        <!-- Main Wrapper -->
        @include('layouts.admin.footer')
    </div>
    
@endsection