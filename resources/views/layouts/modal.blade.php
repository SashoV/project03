<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('storeEmail') }}" method="post" id="storeEmail" class="modalForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            @if (Request::is('category/*'))
                            <input type="number" name="category_id" value="{{ $category->id }}" class="hidden">
                            @else
                            <div class="form-group @error('category_id') has-error @enderror">
                                <select class="form-control" name="category_id" id="category_id" required>
                                    <option value="">Одбери категорија</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == old('category_id'))
                                        {{ "selected" }}
                                        @endif>{{ Str::ucfirst($category->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email Adress" name="email" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Пријави се</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>