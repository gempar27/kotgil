@extends('dashboard.layouts.main')
@section('title', 'Kotgil | Transaction')
@section('breadcrumb', 'Transaction')
@section('content')
<div class="br-section-wrapper">
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
                    <th class="wd-10p text-center">Nama</th>
                    <th class="wd-10p text-center">Tanggal & Waktu</th>
                    <th class="wd-10p text-center">ID Transaksi</th>
                    <th class="wd-20p text-center">Lesson</th>
                    <th class="wd-20p text-center">Tipe Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                    <td>Gwenchanayo</td>
                </tr>
            </tbody>
        </table>
    </div><!-- table-wrapper -->
</div>
@endsection
