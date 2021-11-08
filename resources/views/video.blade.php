@extends('layouts.master')

@push('css')
    <link href="{{ asset('vendors/plyr/plyr.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="card mb-3">

    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-2.png);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Video</h3>
                <p class="mb-0">Uso de plugin <strong>plyr</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-lg-6 pe-lg-2">
      <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0" data-anchor="data-anchor">Youtube Player</h5>
        </div>
        <div class="card-body bg-light">
            <div class="player rounded-3" data-plyr-provider="youtube" data-plyr-embed-id="NcBjx_eyvxc"> </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 pe-lg-2">
        <div class="card mb-3">
          <div class="card-header">
              <h5 class="mb-0" data-anchor="data-anchor">Vimeo Player</h5>
          </div>
          <div class="card-body bg-light">
            <div class="player rounded-3" data-plyr-provider="vimeo" data-plyr-embed-id="76979871"> </div>
          </div>
        </div>
      </div>

</div>

@endsection

@push('scripts')
    <script src="{{ asset('vendors/plyr/plyr.polyfilled.min.js') }}"></script>
@endpush