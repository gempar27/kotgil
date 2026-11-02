@extends('dashboard.layouts.main')
@section('title', 'Kotgil | Free Lesson')
@section('breadcrumb', 'Free Lesson')
@section('content')
<div class="br-section-wrapper">
    <div class="d-flex justify-content-between">
        <p class="mg-b-25 mg-lg-b-50"><a href="{{ route('dashboard-free-lesson.create') }}" class="btn btn-info">+ Tambah</a>
        </p>
    </div>
    <div class="table-wrapper">
        @if ($msg = session('success'))
            <div class="alert alert-success" role="alert">
                {{ $msg }}
            </div>
        @elseif($msg = session('error'))
            <div class="alert alert-danger" role="alert">
                {{ $msg }}
            </div>
        @endif
        <table id="free-lesson" class="table display responsive table-bordered">
            <thead>
                <tr>
                    <th class="wd-5p text-center">No</th>
                    <th class="wd-10p text-center">Judul</th>
                    <th class="wd-10p text-center">Foto</th>
                    <th class="wd-10p text-center">Video</th>
                    <th class="wd-20p text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                    <td class="w-25 text-center">
                        <a class="btn btn-info" href="#"><i
                                class="icon ion-edit"></i></a>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#modal-lesson-delete"
                            class="btn btn-info"><i class="icon ion-trash-a"></i></a>
                        <div id="modal-lesson-delete" class="modal fade">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body tx-center pd-y-20 pd-x-20">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <i
                                            class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                                        <h4 class="tx-danger  tx-semibold mg-b-20">Data akan dihapus
                                        </h4>
                                        <p class="mg-b-20 mg-x-20">Anda akan kehilangan akses
                                            permanen ke data ini. Pastikan untuk melanjutkan hanya jika Anda yakin.
                                        </p>
                                        <form action="#"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="cursor: pointer"
                                                class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                                                Hapus</button>
                                            <button type="button" style="cursor: pointer"
                                                class="btn btn-outline-gray tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20"
                                                data-dismiss="modal" aria-label="Close">
                                                Batal</button>
                                        </form>
                                    </div><!-- modal-body -->
                                </div><!-- modal-content -->
                            </div><!-- modal-dialog -->
                        </div><!-- modal -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div><!-- table-wrapper -->
</div>
@endsection
