@extends('layout.app')

@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if(!$aboutUs)
                    <a href="{{ route('aboutUs.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>Add AboutUs</a><br /><br />
                @endif
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4>About Us</h4>
                    </div>
                    <div class="card-body">
                        <!--<h4 class="card-title">قائمة موظفي الشركة</h4>-->
                        <div class="table-responsive">
                            <table id="example23" class="table table-bordered yajra-datatable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>AboutUs(EN)</th>
                                        <th>AboutUs(AR)</th>
                                        <th style="text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if($aboutUs)
                                        <td>{{ $aboutUs->aboutUs_en }}</td>
                                        <td>{{ $aboutUs->aboutUs_ar }}</td>
                                        <td style="text-align:center;">
                                            <a href="{{ route('aboutUs.edit', $aboutUs->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{-- if you need the delete button --}}
                                            {{-- <button class="btn btn-danger deleteRow" data-action="{{ route('aboutUs.destroy', $aboutUs->id) }}" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></button> --}}
                                        </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- if you need the delete button --}}

{{-- <!--Modal 2-->
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete About Us</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the data?</p>
            </div>
            <div class="modal-footer">
                <form id="deleterow" class="hidden" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <button class="btn btn-danger" onclick="$('#deleterow').submit();" data-toggle="modal" data-target="#delete-modal">Delete</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Back</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal 2--> --}}
@stop
@push('scripts')
{{-- if you need the delete button --}}

{{-- <script type="text/javascript">
    $(document).ready(function(){
        $('.deleteRow').on('click',function(){
            var action=$(this).data('action');
            $('#deleterow').attr('action',action);
        });
    });
</script> --}}
@endpush
