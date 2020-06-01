<div>
    <div class="reveal" id="product-review-modal" data-reveal>
        <div>
            <form action="{{ route('review.store') }}" method="post" role="form"></form>
            {{ csrf_field() }}
            
            <legend>Rate our product</legend>

            <div class="form-group">
                <label for="">Rate it</label>
                <input type="text" class="form-control" name="headline" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="">Headline</label>
                <input type="text" class="form-control" name="headline" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="">Tell us more</label>
                <input type="text" class="form-control" name="description" id="" placeholder="Input...">
            </div>


        </div>      
    </div>
</div>