@extends('app')

@section('page-header')

    <h2>Recruitment Management</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Recruitment Management</span></li>
            <li><span>List Recruitments</span></li>

        </ol>

        <div class="sidebar-right-toggle"></div>
    </div>
@endsection

@section('content')
    <div class="col-md-6">
        <section class="panel panel-featured-left panel-featured-primary">
            <div class="panel-body">
                <div class="widget-summary r-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                            <i class="fa fa-trophy"></i>
                        </div>
                    </div>
                    <div class="widget-summary-col">
                        <div class="summary">
                            <h4 class="title">Total numbers collected</h4>

                            <div class="info">
                                <strong>{{ $data->count() }}</strong>
                            </div>
                        </div>
                        <div class="summary-footer">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel panel-featured-left panel-featured-primary">
            <div class="panel-body">
                <div class="widget-summary r-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                            <i class="fa fa-trophy"></i>
                        </div>
                    </div>
                    <div class="widget-summary-col">
                        <div class="summary">
                            <h4 class="title">Numbers collected this month</h4>

                            <div class="info">
                                <strong>{{ $data_month }}</strong>
                            </div>
                        </div>
                        <div class="summary-footer">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>

                <h2 class="panel-title">List Recruitments</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="{{isset($table_class) ? $table_class : 'table table-bordered table-striped table-condensed mb-none'}}">
                        <thead>
                        <tr>
                            <th>Phone Number</th>
                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $itm)
                            <tr>
                                <td>{{ $itm->phone_number }}</td>
                                <td>{{ $itm->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection