@include("haader.header")

<div id="app" class = "container">
    <div class="row">
        <div class="col-md-8 col-md-offseet-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <customers></customers>
                </div>

            </div>

        </div>
    </div>
</div>

<script src="{{asset("js/app.js")}}"></script>
@include("foote.footer")