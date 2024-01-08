<!-- Modal -->
<div aria-hidden="true" aria-labelledby="modelTitleId" class="modal fade" id="confirm-violation" role="dialog" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" x-data="{ agree: false}" style="border-radius: 10px">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" style="color: #0A0863;">ACKNOWLEDGEMENT OF FORM CONTENT</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                    <label class="form-check-label">
                        <input x-model="agree" class="form-check-input" id="" name="" type="checkbox" value="checkedValue">
                        I acknowledge that the information provided in this Violation Form is true and accurate to the best of my knowledge.
                    </label>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button data-dismiss="modal" x-bind:disabled="!agree" class="btn btn-primary" style="width: 100%; border-color: #0A0863; background-color: #0A0863; color: white; font-size: 14px;" type="submit" wire:click='updateViolationForm()'>Confirm and Submit</button>
            </div>
        </div>
    </div>
</div>
