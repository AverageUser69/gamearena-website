<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}
?>
<?php
include('navbar.php');
?>
<form method="post" action="action.php" enctype="multipart/form-data">
    <section class="gradient-bg">
        <!-- style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');"> -->
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card  gradient-customuser" style="border-radius: 20px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Add a game</h2>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                        name="name" required />
                                    <label class="form-label" for="form3Example1cg">Game Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                        name="typeone" required />
                                    <label class="form-label" for="form3Example3cg">First Type</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4cg" class="form-control form-control-lg"
                                        name="typetwo" required />
                                    <label class="form-label" for="form3Example4cg">Second Type</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4cg" class="form-control form-control-lg"
                                        name="price" required />
                                    <label class="form-label" for="form3Example4cg">Price</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4cdg" class="form-control form-control-lg"
                                        name="rating" required />
                                    <label class="form-label" for="form3Example4cdg">Game Rating</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4cdg" class="form-control form-control-lg"
                                        name="publisher" required />
                                    <label class="form-label" for="form3Example4cdg">Publisher Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example4cdg" class="form-control form-control-lg"
                                        name="dimension" required />
                                    <label class="form-label" for="form3Example4cdg">Dimension Type</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea name="description" class="form-control form-control-lg"
                                        placeholder="Details regarding the GAME." required></textarea>
                                    <label class="form-label" for="form3Example4cdg">Description</label>
                                </div>

                                <div class="form-outline mb-4 custom-file">
                                    <input type="file" class="custom-file-input form-control form-control-lg"
                                        id="customInput" name="image" required>
                                    <label class="custom-file-label" for="customInput">Choose file...</label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="addgame"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add
                                        Game</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">
                                <div class="d-flex justify-content-center">
                                    <button type="button" name="discard"
                                        class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body"><a
                                            href="gamedisplay.php" style="color:black;">Discard
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                            </svg></a></button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?php
include('footer.php');
?>
<style media="screen">
.custom-file-input.selected:lang(en)::after {
    content: "" !important;
}

.custom-file {
    overflow: hidden;
}

.custom-file-input {
    white-space: nowrap;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>