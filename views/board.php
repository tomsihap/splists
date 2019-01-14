<?php  
    require_once('../controllers/boardController.php');
    $_SESSION['page'] = 'board';
?>


<?php include('../partials/_header.php'); ?>
<?php include('../partials/_form_list.php'); ?>

<!-- CONTENU DE index.php, board.php, login.php, signup.php -->
<div class="container-fluid mt-2">
    <div class="row">

        <!-- SIDEBAR : Liste de listes -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <?php
                    
                    foreach($lists as $l) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="/splists/views/board.php?list=<?= $l['id']; ?>">
                                    <span data-feather="home"></span>
                                    <?= $l['title']; ?> <span class="sr-only">(current)</span>
                                </a>
                            </li>
                    <?php
                    }
                    ?>

                    <li><hr></li>

                    <li class="ml-2">
                        <button class="btn btn-sm btn-primary"
                                type="button"
                                data-toggle="modal"
                                data-target="#formList">Nouvelle liste</button>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <!-- MAIN CONTENT : Tickets appartenants à une liste -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <?php
            if ( isset($_GET['list']) && intval($_GET['list'] > 0) ){
                // Cas où j'ai un ID de liste
                ?>
                
                    <h1>Nom de ma liste</h1>

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                        beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                        beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                        beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
            }

            else {
                // Cas où je n'ai pas d'ID de liste
                ?>
                <h1>Bienvenue sur votre board.</h1>
                <?php
            }
        ?>

        </main>
    </div>
</div>

<?php include('../partials/_footer.php'); ?>