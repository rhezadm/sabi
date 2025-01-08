<x-app-layout title="Sales Race">
    <div class="row">
        <!-- Filter Section -->
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter</h5>
                    <div class="row">
                        <!-- Filter Tanggal -->
                        <div class="col-md-3">
                            <label for="dateFilter" class="form-label">Filter Tanggal</label>
                            <input type="date" id="dateFilter" class="form-control">
                        </div>
                        <!-- Filter Minggu -->
                        <div class="col-md-3">
                            <label for="weekFilter" class="form-label">Filter Minggu</label>
                            <select id="weekFilter" class="form-select">
                                <option value="">Pilih Minggu</option>
                                @for ($i = 1; $i <= 52; $i++)
                                    <option value="Week {{ $i }}">Minggu {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <!-- Filter Bulan -->
                        <div class="col-md-3">
                            <label for="monthFilter" class="form-label">Filter Bulan</label>
                            <select id="monthFilter" class="form-select">
                                <option value="">Pilih Bulan</option>
                                @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Filter Range Tanggal -->
                        <div class="col-md-3">
                            <label for="rangeFilter" class="form-label">Range Tanggal</label>
                            <input type="text" id="rangeFilter" class="form-control" placeholder="yyyy-mm-dd - yyyy-mm-dd">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sales Race Table -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sales Race</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Outlet</th>
                                    <th>Target</th>
                                    <th>Penjualan Saat Ini</th>
                                    <th>Penjualan Bulan Lalu</th>
                                    <th widht="10%">Persentase Perubahan</th>
                                    <th>Progres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 26; $i++)
                                    @php
                                        $target = 50000000; // Target penjualan (dalam rupiah)
                                        $currentSales = rand(10000000, 50000000); // Penjualan saat ini
                                        $lastMonthSales = rand(10000000, 50000000); // Penjualan bulan lalu
                                        $percentageChange = $lastMonthSales > 0 ? (($currentSales - $lastMonthSales) / $lastMonthSales) * 100 : 0;
                                        $progressPercentage = ($currentSales / $target) * 100;
                                        $progressColor = $progressPercentage >= 75 ? 'bg-success' : ($progressPercentage >= 50 ? 'bg-warning' : 'bg-danger');
                                    @endphp
                                    <tr>
                                        <td>Outlet {{ $i }}</td>
                                        <td>Rp {{ number_format($target, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($currentSales, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($lastMonthSales, 0, ',', '.') }}</td>
                                        <td>
                                            @if ($percentageChange >= 0)
                                                <span class="text-success">
                                                    +{{ round($percentageChange, 2) }}%
                                                </span>
                                            @else
                                                <span class="text-danger">
                                                    {{ round($percentageChange, 2) }}%
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar {{ $progressColor }}" role="progressbar" style="width: {{ $progressPercentage }}%;" aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                                    {{ round($progressPercentage) }}%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
