<div class="container">
    <div class="row align-items-center" style="height: 100vh">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center"><?php echo $title; ?></h1>
                    <hr>
                    <h2 id="timer" class="display-4 text-center" ></h2>
                </div>
                <div class="col">
                    <form id="contact_form" action="/contact" method="post" class="mt-5">
                        <div class="mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3" id="status"></div>
                        <div class="mb-3 d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Notify Me</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>