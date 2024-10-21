<div class="modal fade" tabindex="-1" role="dialog" id="edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title text-2xl">
                    Municipality Budget
                </h1>
                <p>You can add the municipality budget details here.</p>
                <hr class="mt-2 mb-2">

                <form action="{{ route('municipality-budget.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="row mt-2 align-center">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label" for="mb_year">Budget Year <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the budget year (e.g., 2024-2025).</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" required class="form-control" id="mb_year" name="mb_year"
                                        placeholder="Enter Budget Year here..">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label" for="mb_amount">Budget Amount <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the budget amount here.</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="number" required step="0.01" class="form-control" id="mb_amount" name="mb_amount"
                                        placeholder="Enter Budget Amount here..">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label" for="mb_supporting_documents">Supporting Documents <i>(Optional)</i></label>
                                <span class="form-note">Upload supporting documents here (multiple files).</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input type="file" class="form-control" accept=".pdf,.docx,.jpeg,.png" id="mb_supporting_documents" name="mb_supporting_documents[]" multiple>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4"></div>
                    <div class="col-lg-8" style="float: right">
                        <hr class="mt-2 mb-2">
                    </div>

                    <div class="col-lg-5"></div>
                    <div class="col-lg-7 justify-end" style="float: right">
                        <div class="form-group mt-2 mb-2 justify-end">
                            <button type="submit" class="btn btn-primary">
                                <em class="icon ni ni-check"></em>
                                &ensp;Submit Record
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
