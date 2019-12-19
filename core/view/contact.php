<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card bg-light">
        <div class="card-body">
        <h1 class="display-4 text-center">Contact</h1>
        <hr>
        <form id="contact_form">
          <div class="form-group">
            <label for="i_email">Email</label>
            <input type="email" class="form-control form-control-sm" id="i_email" name="email" placeholder="Email"
                   required>
          </div>
          <div class="form-group">
            <label for="i_name">Subject</label>
            <input type="text" class="form-control form-control-sm" id="i_subject" name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <label for="ta_message">Message</label>
            <textarea class="form-control form-control-sm" id="ta_message" name="message" rows="3"></textarea>
          </div>
          <div class="form-group">
            <div id="result"></div>
          </div>
          <button type="submit" class="btn btn-primary btn-sm" id="btn_submit">Send</button>
          <button type="reset" class="btn btn-secondary btn-sm" id="btn_reset">New</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
