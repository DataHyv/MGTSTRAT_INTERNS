<form action="{{ route('deleteRecord') }}" method="POST">
    @csrf
    <input type="hidden" name="id" class="e_id" value="{{ $item->id }}" readonly>
    <input type="hidden" name="workshop_id" class="budget_number" value="{{ $item->workshop_id }}" readonly>
    <input type="hidden" name="engagement_title" value="{{ $item->engagement_title }}" readonly>
    <div class="modal-footer">
        <div class="">
            <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
        </div>
        <div class="">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </div>
</form>