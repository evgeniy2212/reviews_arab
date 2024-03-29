<div class="edit-review-buttons flex-wrap">
    <div class="col-md-2 mb-2 mb-md-0">
        <input type="hidden"
               name="redirectToMain"
               value="{{ 'true' }}"
        >
        <button data-toggle="modal"
                type="submit"
                id="editReview"
                class="createReviewButton loginButton submitReviewButton">
            @lang('service/index.save')
        </button>
    </div>
    <div class="col-md-4 col-lg-3 mb-2 mb-md-0">
        <button data-toggle="modal"
                type="submit"
                id="editReview"
                data-action="{{ route('preupdating-review', $review->id) }}"
                class="createReviewButton loginButton submitReviewButton">
            @lang('service/index.view_and_save')
        </button>
    </div>
    <div class="col-md-2">
        <a role="button"
           href="{{ route('reviews', ['review_item' => $slug]) }}"
           class="createReviewButton"
           id="cancelButton">
            @lang('service/index.cancel')
        </a>
    </div>
</div>
