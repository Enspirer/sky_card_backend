@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h3 style="text-align: center;padding-top: 20px;color: dimgrey">AI Detection Count</h3>
                <div id="container" style="height: 300px"></div>
                <div class="card-body">
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
                    <script type="text/javascript">
                        var dom = document.getElementById("container");
                        var myChart = echarts.init(dom);
                        var app = {};
                        var option;
                        option = {
                            xAxis: {
                                type: 'category',
                                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                            },
                            yAxis: {
                                type: 'value'
                            },
                            series: [{
                                data: [
                                    @foreach($calls_details as $calls)
                                    {{$calls->calls}},
                                    @endforeach
                                ],
                                type: 'bar'
                            }]
                        };
                        if (option && typeof option === 'object') {
                            myChart.setOption(option);
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        <h4>External API Calls</h4>
                        <h2>{{$all_calls}}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        <h4>Active User Count</h4>
                        <h2>{{$user_count}}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        <h4>External API Calls</h4>
                        <h2>0012</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
