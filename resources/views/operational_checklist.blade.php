<x-app-layout title="Operational Checklist">
    <div class="row">
        <!-- Operational Checklist Card -->
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Operational Checklist</h5>

                    <!-- Section: Kitchen -->
                    <div class="mb-4">
                        <h6>Kitchen</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Checklist</th>
                                    <th>Status</th>
                                    <th>Evidence</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 3; $i++)
                                    <tr>
                                        <td>Kitchen Checklist {{ $i }}</td>
                                        <td>
                                            <select class="form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" />
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="2" placeholder="Add notes here..."></textarea>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>

                    <!-- Section: Cashier -->
                    <div class="mb-4">
                        <h6>Cashier</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Checklist</th>
                                    <th>Status</th>
                                    <th>Evidence</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 3; $i++)
                                    <tr>
                                        <td>Cashier Checklist {{ $i }}</td>
                                        <td>
                                            <select class="form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" />
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="2" placeholder="Add notes here..."></textarea>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>

                    <!-- Section: Server -->
                    <div class="mb-4">
                        <h6>Server</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Checklist</th>
                                    <th>Status</th>
                                    <th>Evidence</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 3; $i++)
                                    <tr>
                                        <td>Server Checklist {{ $i }}</td>
                                        <td>
                                            <select class="form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" />
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="2" placeholder="Add notes here..."></textarea>
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
