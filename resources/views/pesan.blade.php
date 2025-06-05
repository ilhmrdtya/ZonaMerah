<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- navbar -->
     @include('navbar')

     <!-- content -->
      <div class="container">
        <div class="row">
            <!-- Sidebar Menu Chat -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong>Daftar Chat</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- Contoh daftar chat -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <img src="https://ui-avatars.com/api/?name=User+1" class="rounded-circle" width="35" alt="User 1">
                                <span class="ms-2">User 1</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <img src="https://ui-avatars.com/api/?name=User+2" class="rounded-circle" width="35" alt="User 2">
                                <span class="ms-2">User 2</span>
                            </div>
                        </li>
                        <!-- Tambahkan daftar chat lain di sini -->
                    </ul>
                </div>
            </div>
            <!-- Chat Area -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Chat dengan User 1</strong>
                    </div>
                    <div class="card-body" style="height: 400px; overflow-y: auto;">
                        <!-- Contoh pesan chat -->
                        <div class="mb-3">
                            <div class="d-flex">
                                <div class="me-2">
                                    <img src="https://ui-avatars.com/api/?name=User+1" class="rounded-circle" width="35" alt="User 1">
                                </div>
                                <div>
                                    <div class="bg-light p-2 rounded">
                                        Halo, ada yang bisa saya bantu?
                                    </div>
                                    <small class="text-muted">10:00</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-end">
                            <div>
                                <div class="bg-primary text-white p-2 rounded d-inline-block">
                                    Saya ingin bertanya tentang produk.
                                </div>
                                <br>
                                <small class="text-muted">10:01</small>
                            </div>
                        </div>
                        <!-- Tambahkan pesan lain di sini -->
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ketik pesan...">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <!-- Footer -->
    @include('footer')

</body>
