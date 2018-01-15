<button type="button" class="btn btn-light" data-toggle="modal" data-target="#subotica"><i class="material-icons">mail_outline</i></button>

<!-- Modal -->
<div class="modal fade" id="subotica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova poruka za salon Subotica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Vas email:</label>
            <input type="email" class="form-control" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Poruka:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i></button>
        <button type="button" class="btn btn-primary"><i class="material-icons">send</i></button>
      </div>
    </div>
  </div>
</div>