@include('Template/Header')
<div id="page-wrapper" class="well">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Higher Or Lower!</h1>
        </div>
    </div>
    <div class="row">
        <strong>{{ $Cards[0] }}</strong>
        <button type="button" id="higher" class="btn btn-success">Higher</button>
        <button type="button" id="lower" class="btn btn-danger">Lower</button>
        <br />
        <small>Ace is high!</small>        
    </div>
</div>
@include('Template/Footer')
