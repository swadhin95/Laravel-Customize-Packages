@extends('master')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>P-58 MODC</h5>
    </div>
    <div class="card-body">
        <div id="accordion">
            @foreach ($formattedArray as $key => $datam)
            <div class="card">
                <div class="card-header d-flex justify-content-between" id="heading{{ $key }}">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            Voucher No : <b> {{ $datam->id }} </b>
                        </button>
                    </h5>
                </div>
                <div id="collapse{{ $key }}" class="collapse show" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Name</th>
                                <th>Rank</th>
                                <th>BD Number</th>
                                
                                <th width="280px">Action</th>
                            </tr>
                            
                            <tr>
                                <td style="width: 25%">{{ $datam->job_info_name }}</td>
                                <td style="width: 20%">{{ $datam->job_info_rank }}</td>
                                <td style="width: 20%">{{ $datam->job_info_bd }}</td>
                                <td style="width: 35%; align="text-center">
                                    <a href="{{ route('p58modc.downloadPdf', ['p58modc' => $datam->id]) }}" class="btn btn-sm btn-outline-info">PDF View</a>
                                    <a href="{{ route('p58modc.view', ['p58modc' => $datam->id]) }}" class="btn btn-sm btn-outline-success">Preview</a>
                                    <a href="{{ route('p58modc.edit', ['p58modc' => $datam->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="{{ route('p58modc.delete', ['p58modc' => $datam->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card-footer text-center">
        <a href="{{ route('p58modc.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
    </div>
</div>
@push('js')
<script>
    $('.collapse').collapse({
        toggle: true
    })
</script>
<script src="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@endsection