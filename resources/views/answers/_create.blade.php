<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" content>Contenido</label>
                            <textarea class="form-control" name="content" id="content" rows="10" cols="30"></textarea>
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