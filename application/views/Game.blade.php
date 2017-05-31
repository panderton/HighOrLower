@include('Template/Header')
<div id="page-wrapper" class="well">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Higher Or Lower!</h1>
            <small>Ace is high!</small>
        </div>
    </div>
    <div class="row">
        <h3>{{ $Deck[0] }}</h3>
        <div id="next-card">
            
        </div>
        <button type="button" id="higher" class="btn btn-success">Higher</button>
        <button type="button" id="lower" class="btn btn-danger">Lower</button>
    </div>
</div>
@include('Template/Footer')
