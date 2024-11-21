<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nameBasic" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Username</label>
                        <input type="text" id="emailBasic" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Email</label>
                        <input type="email" id="emailBasic" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Password</label>
                        <input type="password" id="emailBasic" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
  </div>