<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                    <hr>

                    <form action="{{ route('questions.answers.store', $question->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body"
                                id="body" rows="7">
                            </textarea>
                            @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button class="btn btn-outline-primary btn-lg" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>