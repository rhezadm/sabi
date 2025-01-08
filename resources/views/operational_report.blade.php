<x-app-layout title="Operational Report Dashboard">
    <div class="row">
        <!-- Ringkasan Per Outlet -->
        <div class="col-lg-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Outlet Checklist Progress</h5>

                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Outlet Name</th>
                                <th>Manager Checklist</th>
                                <th>Progress</th>
                                <th>Issues</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                                <!-- Example: 10 outlets -->
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>Outlet {{ $i }}</td>

                                    <!-- Manager Checklist (Outlet & Area) -->
                                    <td>
                                        <!-- Outlet Manager Checklist -->
                                        <span class="badge {{ rand(0, 1) ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                            Outlet Manager: {{ rand(0, 1) ? 'Completed' : 'Not Completed' }}
                                        </span><br>
                                        <!-- Area Manager Checklist -->
                                        <span class="badge {{ rand(0, 1) ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                            Area Manager: {{ rand(0, 1) ? 'Completed' : 'Not Completed' }}
                                        </span>
                                    </td>

                                    <!-- Overall Progress (Based on section completion) -->
                                    <td>
                                        @php
                                            // Simulate section completion for Kitchen, Cashier, Server
                                            $sectionsCompleted = rand(1, 3); // Randomly completed sections
                                            $totalSections = 3;
                                            $progressPercentage = ($sectionsCompleted / $totalSections) * 100;
                                            $progressColor = $progressPercentage >= 75 ? 'bg-success' : ($progressPercentage >= 50 ? 'bg-warning' : 'bg-danger');
                                        @endphp
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar {{ $progressColor }}" role="progressbar" style="width: {{ $progressPercentage }}%;" aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                                {{ round($progressPercentage) }}%
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Issues (Show number of issues if any) -->
                                    <td>
                                        @php
                                            $issues = rand(0, 5); // Random number of issues per outlet
                                        @endphp
                                        <span class="badge {{ $issues > 0 ? 'bg-soft-danger text-danger' : 'bg-soft-success text-success' }}">
                                            {{ $issues > 0 ? $issues . ' Issues' : 'No Issues' }}
                                        </span>
                                    </td>

                                    <!-- Actions -->
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#outletDetails{{ $i }}" aria-expanded="false" aria-controls="outletDetails{{ $i }}">
                                            <i class="bx bx-detail"></i> View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="p-0">
                                        <!-- Collapse Section Details -->
                                        <div class="collapse" id="outletDetails{{ $i }}">
                                            <div class="card card-body border-top-0">
                                                <!-- Kitchen Section -->
                                                <div class="mb-3">
                                                    <h6>Kitchen</h6>
                                                    <span class="badge {{ rand(0, 1) ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ rand(0, 1) ? 'Completed' : 'Not Completed' }}
                                                    </span>
                                                    <span class="ms-2 text-muted">Notes: Some details for kitchen</span>
                                                </div>

                                                <!-- Cashier Section -->
                                                <div class="mb-3">
                                                    <h6>Cashier</h6>
                                                    <span class="badge {{ rand(0, 1) ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ rand(0, 1) ? 'Completed' : 'Not Completed' }}
                                                    </span>
                                                    <span class="ms-2 text-muted">Notes: Cashier checklist detail</span>
                                                </div>

                                                <!-- Server Section -->
                                                <div class="mb-3">
                                                    <h6>Server</h6>
                                                    <span class="badge {{ rand(0, 1) ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ rand(0, 1) ? 'Completed' : 'Not Completed' }}
                                                    </span>
                                                    <span class="ms-2 text-muted">Notes: Server checklist detail</span>
                                                </div>
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
</x-app-layout>
